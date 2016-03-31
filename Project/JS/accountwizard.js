var page = 1;
var validform = true;

function nextform()
{
	$("div.errormessage").remove();




	switch(page) {
		case 1:
		var firstname = $("input#firstname").val();
		var surname =  $("input#surname").val();
		var occupation = $("#occupationselect").val();
		var DOB = $("input#DOB").val();

		if (!empty(firstname,'firstname') && !empty(surname,'surname') && !empty(occupation,'occupation') && !empty(DOB,'DOB'))
		{

			$.ajax
			({  
				type: 'POST',
				url: "../PHP/Wizard/insertDetails.php",
				data: { first: firstname, surname: surname, occupation: occupation, dob: DOB},
				cache: false,
				success: function(result){
					page += 1;
					validform = true;
					$("div#formarea").html(addressHTML);
					swapclass("detailcircle","current","completed");
					swapclass("addresscircle","incomplete","current");
				},
				error: function(error){
					alert("Error Occured While Inserting Details");
					alert(error);
				}
			});
		}
		break;


		case 2:
		var number = $("input[name=number]").val();
		var street =  $("input[name=street]").val();
		var city = $("input[name=city]").val();
		var postcode = $("input[name=postcode]").val();

		if (!empty(number,'housenumber') && !empty(street,'street') && !empty(city,'city') && !empty(postcode,'postcode'))
		{
			$.ajax
			({  
				type: 'POST',
				url: "../PHP/Wizard/insertAddress.php",
				data: { number: number, street: street, postcode: postcode, city: city},
				cache: false,
				success: function(result){
					$("div#formarea").html(qualificationHTML);
					swapclass("addresscircle","current","completed");
					swapclass("qualificationcircle","incomplete","current");
					$("select#levelselect").load("../../php/Qualifications/getLevels.php");
					$("select#courseselect").load("../../php/Qualifications/getCourses.php");
					page+=1;
					validform = true;
				},
				error: function(error){
					alert("Error Occured While Inserting Details");
					alert(error);
				}
			});

		}
		break;


		case 3:
		submitForm(false);
		$("div#formarea").html(employmentHTML);
		swapclass("qualificationcircle","current","completed");
		swapclass("employmentcircle","incomplete","current");
		$("select#monthstart").load("../../php/core/monthOptions.php");
		$("select#monthend").load("../../php/core/monthOptions.php");
		getYear();
		page+=1;
		break;


		case 4:
		submitJobs(false);
		page += 1;
		$("div#formarea").html(addressHTML);
		swapclass("addresscircle","current","completed");
		break;
	}

}



function empty(divValue, divID)
{

	if(divValue === "")
	{
		$("div#"+divID).append("<div id='invalid' class='errormessage'> Field cannot be blank </div>");
		return true;
	}
	else
	{	
		if(divValue === "NonSelect")
		{
			$("div#"+divID).append("<div id='invalid' class='errormessage'> Select an option </div>");
		}
		else
		{
			return false;
		}
	}
}



function swapclass($divID,$remove,$add)
{
	$("div#"+$divID).removeClass($remove);
	$("div#"+$divID).addClass($add);
}

function getYear(){
	var first = document.getElementById("yearstart");
	var second = document.getElementById("yearend");
	var year = new Date().getFullYear();
	var gen = function(max){
		do{
			yearstart.add(new Option(year,year),null);
			yearend.add(new Option(year,year),null);
			year--;
			max--;
		}
		while(max>0);
	}
	(60);
}



var addressHTML = '<div class="form-group" id="housenumber"><label> House Number * </label><input type="text" name="number" class="form-control glow" placeholder="Enter House Number"></div>'+
'<div class="form-group" id="street"><label> Street Name * </label><input type="text" name="street" class="form-control glow" placeholder="Enter Street Name"></div>'+
'<div class="form-group" id="postcode"><label> Postcode * </label><input type="text" name="postcode" class="form-control glow" placeholder="Enter PostCode"></div>'+
'<div class="form-group" id="city"><label> City * </label><input type="text" name="city" class="form-control glow" placeholder="Enter City"></div>';

var qualificationHTML = '<div id="coursediv" class="form-group"><label> Course Name * </label><select id="courseselect" name="course" class="form-control"><option value="NoneSelect" selected>Select Course</option>'+
'</select></div>'+
'<div id="leveldiv" class="form-group"><label> Course Level * </label><select id="levelselect" name="level" class="form-control" onchange="javascript: gradeselected();">'+
'<option value="NoneSelect" selected>Select Level</option></select></div>'+
'<div id="gradediv" class="form-group"><label> Course Grade * </label><select id="gradeselect" name="grade" class="form-control"><option value="NoneSelect">Select Grade</option>'+
'</select></div>'+
'<div class="form-group"><button onclick="addGrade()" id="storeGrade" class="btn btn-primary"> Add Grade </button>'+
'<div id="qualificationslist"></div>';

var employmentHTML = '<div class="form-group" id="employer"><label> Employer </label><input type="text" name="employer" class="form-control glow" placeholder="Employer"></div>'+
'<div class="form-group" id="jobtitle"><label> Job Title </label><input type="text" name="title" class="form-control glow" placeholder="Job Title"></div>'+
'<div class="form-group onerow" id="startdate"><label class="col-md-12"> Start Date </label><select id="monthstart" name="startmonth" class="form-control leftdrop"><option value="NonSelect">Select Month</option></select>'+
'<select id="yearstart" name="startyear" class="form-control rightdrop"><option value="NonSelect">Select Year</option></select></div>'+ 
'<div class="onerow form-group" id="enddate"><label class="col-md-12"> End Date </label><select id="monthend" name="endmonth" class="form-control leftdrop"><option value="NonSelect">Select Month</option></select>'+
'<select id="yearend" name="endyear" class="form-control rightdrop"><option value="NonSelect">Select Year</option></select></div>'+ 
'<div class="form-group" id="description"><label> Description </label><textarea id="descript" class="form-control" rows="3" name="description" placeholder="Job Description"></textarea></div>'+
'<div class="form-group"><button class="btn btn-primary" onclick="addJobArray()"> Add Another Job </button></div><div><button class="btn btn-primary" onclick="clearinput()"> Clear Job Form </button></div>'+
'<div id="joblist"></div>'; 



