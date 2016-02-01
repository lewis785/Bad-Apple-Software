var index = 0;
var qualificationsarray = [] ;

function addGrade(){


	$("#storeGrade").css({background:"#1D2A59",color:"white"});

	var selectedCourse = $('#courseselect').val();
	var selectedLevel = $('#levelselect').val();
	var selectedGrade = $('#gradeselect').val();
	
	//alert(selectedCourse+selectedLevel+selectedGrade);

	var dataString = "course="+selectedCourse+", level="+selectedLevel+", grade="+selectedGrade;

	$.ajax({
		type: 'POST',
		url: "../PHP/validateGrade.php",
		dataType: 'json',
		data: {grade: selectedGrade, level: selectedLevel, course: selectedCourse},
		cache: false,
		success: function(result){

			var complete = (result.completeinput);
			var valid = (result.qualificationvalid);

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

			if(complete){

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
			else
			{
				$("#qualificationslist").append("bye world");
			}


			var course = (result.completeinput+" "+result.coursevalid+" "+result.qualificationvalid+" "+result.courseSet+" "+result.levelSet+" "+result.gradeSet);



		},
		error: function(failed){
			alert("Error");
		}
	});



}