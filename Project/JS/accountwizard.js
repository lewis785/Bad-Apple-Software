var page = 1;
var skippage = 1;
var validform = true;

function nextform()
{
	$("div.errormessage").remove();

<<<<<<< HEAD
	switch(page) {
		case 1:
=======
	validform = true;
	if (page === 1)
	{
>>>>>>> origin/Jack
		var firstname = $("input#firstname").val();
		var surname =  $("input#surname").val();
		var occupation = $("#occupationselect").val();
		var DOB = $("input#DOB").val();

		// if (!empty(firstname,'firstname') && !empty(surname,'surname') && !empty(occupation,'occupation') && !empty(DOB,'DOB'))
		// {

			// $.ajax
			// ({  
			// 	type: 'POST',
			// 	url: "../PHP/Wizard/insertDetails.php",
			// 	data: { first: firstname, surname: surname, occupation: occupation, dob: DOB},
			// 	cache: false,
			// 	success: function(result){
			// 		page += 1;
			// 	},
			// 	error: function(error){
			// 		alert("Error Occured While Inserting Details");
			// 		alert(error);
			// 	}
			// });
$("div#formarea").html(addressHTML);
swapclass("detailcircle","current","completed");
swapclass("addresscircle","incomplete","current");
// }


}

if(page === 2)
{
	var number = $("input[name=number]").val();
	var street =  $("input[name=street]").val();
	var city = $("input[name=city]").val();
	var postcode = $("input[name=postcode]").val();

	// if (!empty(number,'housenumber') && !empty(street,'street') && !empty(city,'city') && !empty(postcode,'postcode'))
	// {

		$("div#formarea").html(qualificationHTML);
		swapclass("addresscircle","current","completed");
		swapclass("qualificationcircle","incomplete","current");
		
		$("select#levelselect").load("../../php/Qualifications/getLevels.php");
		$("select#courseselect").load("../../php/Qualifications/getCourses.php");


	// }
	// else
	// {
		// validform =false;
	// }

}


<<<<<<< HEAD
		case 4:
		submitJobs(false);

		window.location.href="../html/profile.php";
		break;
	}
=======

if(page === 3)
{
 validform = false;
}

if(page === 4)
{}

if(validform)
	page+=1;
>>>>>>> origin/Jack

}


function pageskip()
{
	switch(skippage)
	{
		case 1:
		$("div#formarea").html(addressHTML);
		swapclass("detailcircle","current","completed");
		swapclass("addresscircle","incomplete","current");
		skippage +=1;

		case 2:
		$("div#formarea").html(qualificationHTML);
		swapclass("addresscircle","current","completed");
		swapclass("qualificationcircle","incomplete","current");
		$("select#levelselect").load("../../php/Qualifications/getLevels.php");
		$("select#courseselect").load("../../php/Qualifications/getCourses.php");
		skippage+=1;

		case 3:
		$("div#formarea").html(employmentHTML);
		swapclass("qualificationcircle","current","completed");
		swapclass("employmentcircle","incomplete","current");
		$("select#monthstart").load("../../php/core/monthOptions.php");
		$("select#monthend").load("../../php/core/monthOptions.php");
		getYear();
	}

}

function empty(divValue, divID)
{
	// alert(divValue);

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
			return true;
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



var addressHTML = '<div class="form-group" id="housenumber"><input type="text" name="number" class="form-control" placeholder="Enter House Number"></div>'+
'<div class="form-group" id="street"><input type="text" name="street" class="form-control" placeholder="Enter Street Name"></div>'+
'<div class="form-group" id="postcode"><input type="text" name="postcode" class="form-control" placeholder="Enter PostCode"></div>'+
'<div class="form-group" id="city"><input type="text" name="city" class="form-control" placeholder="Enter City"></div>';

<<<<<<< HEAD
var qualificationHTML = '<div id="coursediv" class="form-group"><select id="courseselect" name="course" class="form-control"><option value="NoneSelect" selected>Select Course</option>'+
=======

var qualificationHTML = '<div id="coursediv" class="form-group"><label> Course Name * </label><select id="courseselect" name="course" class="form-control"><option value="NoneSelect" selected>Select Course</option>'+
>>>>>>> origin/Jack
'</select></div>'+
'<div id="leveldiv" class="form-group"><select id="levelselect" name="level" class="form-control" onchange="javascript: gradeselected();">'+
'<option value="NoneSelect" selected>Select Level</option></select></div>'+
'<div id="gradediv" class="form-group"><select id="gradeselect" name="grade" class="form-control"><option value="NoneSelect">Select Grade</option>'+
'</select></div>'+
<<<<<<< HEAD
'<div class="form-group"><button onclick="addGrade()" id="storeGrade" class="btn btn-llg bg-headings"> Add Grade </button>'+
'<div id="qualificationslist"></div>';

var employmentHTML = '<div class="form-group" id="employer"><input type="text" name="employer" class="form-control" placeholder="Employer"></div>'+
'<div class="form-group" id="jobtitle"><input type="text" name="title" class="form-control" placeholder="Job Title"></div>'+
'<div class="form-group onerow" id="startdate"><select id="monthstart" name="startmonth" class="form-control leftdrop"><option value="NonSelect">Select Month</option></select>'+
'<select id="yearstart" name="startyear" class="form-control rightdrop"><option value="NonSelect">Select Year</option></select></div>'+ 
'<div class="onerow form-group" id="enddate"><select id="monthend" name="endmonth" class="form-control leftdrop"><option value="NonSelect">Select Month</option></select>'+
'<select id="yearend" name="endyear" class="form-control rightdrop"><option value="NonSelect">Select Year</option></select></div>'+ 
'<div class="form-group" id="description"><textarea id="descript" class="form-control" rows="3" name="description" placeholder="Job Description"></textarea></div>'+
'<div class="form-group"><button class="btn btn-llg bg-headings" onclick="addJobArray()"> Add Another Job </button></div><div><button class="btn btn-llg bg-headings" onclick="clearinput()"> Clear Job Form </button></div>'+
'<div id="joblist"></div>'; 



=======
'<div class="form-group"><button onclick="addGrade()" id="storeGrade" class="btn btn-primary"> Add Grade </button>'+
'<div id="qualificationslist"></div>';
>>>>>>> origin/Jack
