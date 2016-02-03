var index = 0;
var length = 0;
var qualificationsarray = [] ;
var qualificationpresent = false;
var selectedCourse;
var selectedLevel;
var selectedGrade;

function addGrade() {

	$.ajax({  
		type: 'POST',
		url: "../PHP/validateGrade.php",
		dataType: 'json',
		data: {grade: selectedGrade, level: selectedLevel, course: selectedCourse},
		cache: false,
		success: function(result){


			var complete = (result.completeinput);
			var valid = (result.qualificationvalid);

			if(complete){
				if(valid){
					if(!checkarray(selectedCourse, selectedLevel)){

						for (var i = 0; i < 3; i++) {
							switch(i){
								case 0:
								qualificationsarray.push(selectedCourse);
								break;
								case 1:
								qualificationsarray.push(selectedLevel);
								break;
								case 2:
								qualificationsarray.push(selectedGrade);
								break;
							}
						};

						if(index == 0 ){
							$("#qualificationslist").html('<table id="inputlist"class="table table-hover">'+
								'<thead><tr>'+
								'<th>Subject</th>'+
								'<th>Qualification</th>'+
								'<th>Grade</th>'+
								'</tr></thead><tbody>'+
								'<tr></tr>'+
								'</tbody></table>');
						}

						$("#inputlist > tbody:last-child").append("<tr> <td>"+selectedCourse+"</td><td>"
							+selectedLevel+"</td> <td>"
							+selectedGrade+"</td> </tr>");

						index = index + 1;
					}

				}
				else
				{
					var validcourse = (result.coursevalid);
					var validlevel = (result.levelvalid);
					var validgrade = (result.gradevalid);
					var validgradeset = (result.gradesetvalid);

					if(!validcourse)
						$("#coursediv").append("<div id='invalid' class='errormessage'> Not Valid Course </div>");

					if(!validlevel)
						$("#leveldiv").append("<div id='invalid' class='errormessage'> Not Valid Level </div>");

					if(!validgrade)
						$("#gradediv").append("<div id='invalid' class='errormessage'> Not Valid Grade </div>");

					if(validlevel && validgrade && !validgradeset )
						$("#gradediv").append("<div id='invalid' class='errormessage'> Not Valid Grade for selected Level </div>")

				}

			}
			else
			{
				var setcourse = (result.courseSet);
				var setlevel = (result.levelSet);
				var setgrade = (result.gradeSet);

				if(!setcourse)
					$("#coursediv").append("<div id='invalid' class='errormessage'> Select Course </div>");

				if(!setlevel)
					$("#leveldiv").append("<div id='invalid' class='errormessage'> Select a Level </div>");

				if(!setgrade)
					$("#gradediv").append("<div id='invalid' class='errormessage'> Select a Grade </div>");
			}
		},
		error: function(failed){
			alert("Error");
		}
	});
}


function checkinput(){

	$("div").remove(".errormessage");
	allinputs = true;
	selectedCourse = $('#courseselect').val();
	selectedLevel = $('#levelselect').val();
	selectedGrade = $('#gradeselect').val();


	$("#storeGrade").css({background:"#1D2A59",color:"white"});


	if (selectedCourse === "NoneSelect"){
		$("#coursediv").append("<div id='invalid' class='errormessage'> Select Course </div>");
		allinputs = false;
	}
	if (selectedLevel === "NoneSelect"){
		$("#leveldiv").append("<div id='invalid' class='errormessage'> Select Level </div>");
		allinputs = false;
	}
	if (selectedGrade === "NoneSelect"){
		$("#gradediv").append("<div id='invalid' class='errormessage'> Select Grade </div>");
		allinputs = false;
	}

	if(allinputs)
		addGrade();


}





function checkarray(course, level){
	
	length = qualificationsarray.length;
	qualificationpresent = false;

	for(var i = 0; i < length; i += 3){
		if(qualificationsarray[i] === course){

			if(qualificationsarray[i+1] === level){
				qualificationpresent = true;
				break;
			}
		}

	}

	if(qualificationpresent){
		$(".grade-form").append("<div class='errormessage'>Qualification already entered </div>");
	}

	return qualificationpresent;
}



function insertGrades(){
	selectedCourse = $('#courseselect').val();
	selectedLevel = $('#levelselect').val();
	selectedGrade = $('#gradeselect').val();

	length = qualificationsarray.length;

	if( !(selectedCourse === qualificationsarray[length-3] && selectedLevel === qualificationsarray[length-2]) ){
		checkinput();
	}

	if ($(".errormessage").length){
	}
	else
	{
		for(var i = 0; i < length; i +=3){

			selectedCourse = qualificationsarray[i];
			selectedLevel = qualificationsarray[i+1];
			selectedGrade = qualificationsarray[i+2];

			$.ajax({  
				type: 'POST',
				url: "../PHP/insertGrade.php",
				dataType: 'json',
				data: {grade: selectedGrade, level: selectedLevel, course: selectedCourse},
				cache: false,
				success: function(result){
                    alert("Successful")
				},
				error: function(){
					alert("Error Occured While Inserting");
				}
			});
		}
							window.location.href="../html/qualifications.php";

	}

}