var index = 0;
var length = 0;
var qualificationsarray = [] ;
var qualificationpresent = false;
var selectedCourse;
var selectedLevel;
var selectedGrade;
var UCASScore = 0;

function addGrade(){

	if(checkinput()){
		$.ajax({  
			type: 'POST',
			url: "../PHP/Qualifications/validateGrade.php",
			dataType: 'json',
			data: {grade: selectedGrade, level: selectedLevel, course: selectedCourse},
			cache: false,
			success: function(result){

				var complete = (result.completeinput);
				var valid = (result.qualificationvalid);

				if(complete){
					if(valid){
						if(!checkarray(selectedCourse, selectedLevel, false)){

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
							}

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
}


function gradeselected(){

	var selectedlvl = $('#levelselect :selected').text();

	var dataString = "level="+selectedlvl;

	$.ajax({
		type: 'POST',
		url: "../PHP/Qualifications/getGrades.php",
		dataType: 'json',
		data: {level:selectedlvl},
		cache: false,
		success: function(data){


			$('#gradeselect').find('option').remove();
			$('#gradeselect').find('option').end().append('<option value="NoneSelect">Select Grade</option>');

			for (var i=0; i<data.length; i++){
				var grade = data[i].grade;
				$('#gradeselect').find('option').end().append('<option value="'+grade+'">'+grade+'</option>');
			}

			$('#gradeselet').prop('disabled', true);



		},
		error: function (error) {
			alert('error; ' + eval(error));
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

	return allinputs;
}





function checkarray(course, level, submitting){
	
	length = qualificationsarray.length;
	qualificationpresent = false;

	for(var i = 0; i < length; i += 3){

		if(qualificationsarray[i] === course){
			if(qualificationsarray[i+1] === level){
				qualificationpresent = true;
			}
		}

	}

	if(qualificationpresent & !submitting){
		$(".grade-form").append("<div class='errormessage'>Qualification already entered </div>");
	}
	
	return qualificationpresent;
}



function checkconnect(output){
	alert("We managed to connect "+output);
}


function submitForm(redirect){

	selectedCourse = $('#courseselect').val();
	selectedLevel = $('#levelselect').val();
	selectedGrade = $('#gradeselect').val();


	if( !checkarray(selectedCourse, selectedLevel, true) ){
		$.when($.ajax(addGrade())).then(function(){ insertGrades(redirect); });
	}
	else
	{
		$("div").remove(".errormessage");
		insertGrades(redirect);
	}

}



function insertGrades(redirect){

	if ($(".errormessage").length){
	}
	else
	{
		length = qualificationsarray.length;
		var posCheck = 3;
		for(var i = 0; i < length; i +=3)
		{

			selectedCourse = qualificationsarray[i];
			selectedLevel = qualificationsarray[i+1];
			selectedGrade = qualificationsarray[i+2];

			$.ajax({  
				type: 'POST',
				url: "../PHP/Qualifications/insertGrade.php",
				dataType: 'json',
				data: {grade: selectedGrade, level: selectedLevel, course: selectedCourse},
				cache: false,
				success: function(result){
					UCASScore += result.UCASPoints;
				},
				error: function(){
					alert("Error Occured While Inserting");
				},
				complete: function(){
					posCheck += 3;
					if( posCheck > length)
					{
						$.ajax({  
							type: 'POST',
							url: "../PHP/Qualifications/updatePoints.php",
							data: {points: UCASScore},
							cache: false,
							success: function(result){
							},
							error: function(error){
								alert("Error Occured While Updating UCAS Points");
							}
						});
						
						if(redirect)
							window.location.href="../html/qualifications.php";

					}
				}
			});

		}
	}
}


function deleteGrade(inputnum){
	$("div").remove(".errormessage");
	var deleteGrade = inputnum;

	$.ajax({  
		type: 'POST',
		url: "../PHP/Qualifications/deleteQualification.php",
		dataType: 'json',
		data: {QID: deleteGrade},
		cache: false,
		success: function(result){
			$("table#currentQualifications tr#"+deleteGrade).remove();
			$(".options").remove();
			$("div#points").html(result.total);
		},
		error: function(){
			alert("Error Occured While Deleting");
		}
	});
	

}


function qualificationclicked(numclicked){

	var qualification = $("tr#"+numclicked).text()

	$(".overlay").show();
	$('div.options').remove();
	$("body").append("<div class='options'>"+
		"<div id='info'>"+qualification+"</div>"+
		"<div id='editbutton' class='choice'>"+
		"<button id='"+numclicked+"' onclick=editqualification('"+numclicked+"') class='btn-warning btn-lg'>Edit</button>"+
		"</div>"+
		"<div id='deletbutton' class='choice'>"+
		"<button id='"+numclicked+"' onclick=deleteGrade('"+numclicked+"') class='btn-danger btn-lg'>Delete</button>"+
		"</div>"+
		"</div>");


}


$(document).mouseup(function (e)
{
	var container = $(".options");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
    	container.remove();
    }
});



function editqualification(QID)
{

	$.ajax({  
		type: 'POST',
		url: "../PHP/Qualifications/specificGrade.php",
		dataType: 'json',
		data: {QID: QID},
		cache: false,
		success: function(result){
			
			var html = result.html;
			html.replace(/\//g,"/");
			$("div.options").empty();
			$("div.options").append(html);

		},
		error: function(){
			alert("Error Occured While Deleting");
		}
	});
}



function updatequalification(QID)
{
	var inlevel = $("select#levelselect").val();
	var ingrade = $("select#gradeselect").val();
	var inQID = QID;
	$(".errormessage").remove();
	// alert(inQID+" "+inlevel+" "+ingrade);
	if(ingrade != 'NoneSelect')
	{
		$.ajax({  
			type: 'POST',
			url: "../PHP/Qualifications/updategrade.php",
			data: {QID: inQID, level: inlevel, grade: ingrade},
			cache: false,
			success: function(result){
			// alert("update complete");
			$("tr#"+inQID).find("td#level").html(inlevel);
			$("tr#"+inQID).find("td#grade").html(ingrade);
			var Points = parseInt($("div#points").text());
			Points = Points + parseInt(result);
			$("div#points").html(Points);
			$(".options").remove();

		},
		error: function(error){
			alert("Error Occured While Deleting");
			alert(error);
			console.log(error);
		}
	});
	}
	else
	{
		$("#gradediv").append("<div id='invalid' class='errormessage'> Select Grade </div>");
	}
	
}