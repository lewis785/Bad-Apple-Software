var allJobs = [];
var employmentarray = [];
var userinputs = [];
var index = 0;
var employer;
var title;
var startmonth;
var startyear;
var endmonth;
var endyear;
var descript;

function submitJobs(redirect){

	if(!isemptyform())
	{

		if(employmentarray.length != 0)
		{
			var numOfJobs = (employmentarray.length / 7);

			for(var i=0; i < numOfJobs; i++){
				var arrayindex = 7 * i;
				employer = employmentarray[arrayindex+0];
				title = employmentarray[arrayindex+1];
				startmonth = employmentarray[arrayindex+2];
				startyear = employmentarray[arrayindex+3];
				endmonth = employmentarray[arrayindex+4];
				endyear = employmentarray[arrayindex+5];
				descript = employmentarray[arrayindex+6];

				$.ajax
				({  
					type: 'POST',
					url: "../php/insertJob.php",
					data: { employer: employer, title: title, startmonth: startmonth, startyear: startyear, endmonth: endmonth, endyear: endyear, description:descript},
					cache: false,
					success: function(result){
						if(redirect)
							window.location.href="../html/employmenthistory.php";
						return true;

					},
					error: function(error){
						alert("Error Occured While Inserting Career");
						alert(error);
						return false;
					}
				});
			}
		}
		else
			return true;
	}
	else
	{
		addJobArray(true);
		return isemptyform();
	}
}




function checkjobinput(){

	getInput();

	$("div").remove(".errormessage");
	var valid = true;
	var inputs = [];
	inputs.push(["employer", employer]);
	inputs.push(["jobtitle", title]);
	inputs.push(["startdate", startmonth]);
	inputs.push(["startdate", startyear]);
	inputs.push(["enddate", endmonth]);
	inputs.push(["enddate", endyear]);

	for (var i=0; i < inputs.length; i++ )
	{
		if(valid)
			valid = validInput(inputs[i]);
		else
			validInput(inputs[i]); 
	}

	if(valid)
	{
		valid = checkDate(inputs[2], inputs[3], inputs[4], inputs[5])
	}
	return valid;
}

function validInput(inputArray)
{
	var divID = inputArray[0];
	var input = inputArray[1];
	if(input === "")
	{
		$("div#"+divID).append("<div id='invalid' class='errormessage'> Input cannot be empty </div>");
		return false;
	}
	else
	{
		if(input === "NonSelect")
		{
			$("div#"+divID+" .errormessage").remove();
			$("div#"+divID).append("<div id='invalid' class='errormessage'> Please select a month and year  </div>");
			return false;
		}
		else
			return true;
	}
}

function checkDate(SMonth,SYear,EMonth,EYear)
{
	divID = EMonth[0];
	if(SYear[1] > EYear[1])
	{
		$("div#"+divID).append("<div id='invalid' class='errormessage'> Cannot finish job before you start  </div>");
		return false
	}
	else
	{
		if(SYear[1] == EYear[1] && SMonth[1]>EMonth[1])
		{
			$("div#"+divID).append("<div id='invalid' class='errormessage'> Cannot finish job before you start  </div>");
			return false
		}
		else
			return true;
	}
}

function getInput(){
	employer = $("input[name=employer]").val();
	title = $("input[name=title]").val();
	descript =$("textarea#descript").val();
	startmonth = $("#monthstart option:selected").val();
	startyear = $("#yearstart").val();
	endmonth = $("#monthend").val();
	endyear =$("#yearend").val();
	userinputs = [employer,title,descript,startmonth,startyear,endmonth,endyear];
}


function addJobArray(submit){

	if(checkjobinput()){

		for (var i = 0; i < 7; i++) {

			switch(i){
				case 0:
				employmentarray.push(employer);
				break;
				case 1:
				employmentarray.push(title);
				break;
				case 2:
				employmentarray.push(startmonth);
				break;
				case 3:
				employmentarray.push(startyear);
				break;
				case 4:
				employmentarray.push(endmonth);
				break;
				case 5:
				employmentarray.push(endyear);
				break;
				case 6:
				employmentarray.push(descript);
				break;
			}
		}

		var arrayindex = index * 7;
		$("div#joblist").append('<ul class="list-group jobblock">'+
			'<li class="list-group-item text-right"><span class="pull-left"><strong>Employer</strong></span> <div id="employerdisplay">'+employmentarray[arrayindex]+'</div></li>'+
			'<li class="list-group-item text-right"><span class="pull-left"><strong>Time</strong></span> <div id="start">'+convertTomonth(employmentarray[arrayindex+2])+' '+employmentarray[arrayindex+3]+' - '+
			convertTomonth(employmentarray[arrayindex+4])+' '+employmentarray[arrayindex+5]+'</div></li>'+
			'<li class="list-group-item text-right"><span class="pull-left"><strong>Title</strong></span> <div id="title">'+employmentarray[arrayindex+1]+'</div></li>'+
			'<li class="list-group-item text-right"><span class="pull-left"><strong>Description</strong></span> <div id="desc">'+employmentarray[arrayindex+6]+'</div> </li></ul>');

		index += 1;
		clearinput();
		if(submit)
			submitJobs();
	}
}

function isemptyform()
{
	getInput();
	for(var i = 0; i < userinputs.length; i++)
	{
		if(userinputs[i] != "" && userinputs[i] != "NonSelect"){
			return false;
		}
	}
	return true;
}

function clearinput()
{	
	$('#monthstart').prop('selectedIndex',0);
	$('#yearstart').prop('selectedIndex',0);
	$('#monthend').prop('selectedIndex',0);
	$('#yearend').prop('selectedIndex',0);
	$("input").val('');
	$("textarea").val('');
}


function convertTomonth(MonthID)
{
	Month = parseInt(MonthID);
	switch(Month) {
		case 1:
		return "January";
		case 2:
		return "Febuary";
		case 3:
		return "March";
		case 4:
		return "April";
		case 5:
		return "May";
		case 6:
		return "June";
		case 7:
		return "July";
		case 8:
		return "August";
		case 9:
		return "September";
		case 10:
		return "October";
		case 11:
		return "November";
		case 12:
		return "December";
		default:
		return null;
	}
}
