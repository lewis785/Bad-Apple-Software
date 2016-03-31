var page = 1;
var validform = true;

function nextform()
{
	$("div.errormessage").remove();

	validform = true;
	if (page === 1)
	{
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



if(page === 3)
{
 validform = false;
}

if(page === 4)
{}

if(validform)
	page+=1;

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