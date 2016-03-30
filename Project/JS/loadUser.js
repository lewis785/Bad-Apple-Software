var valid = false;

function loadInfo(){

    $.ajax({
        type: "POST",
        url: "../PHP/getInfo.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(result){

            if(result.error == 0){
                var firstname = (result.firstname);
                var surname = (result.surname);
                var user = (result.user);
                var email = (result.email);
                var DoB = (result.dobcorrected);
                var joindate = (result.joined);
                var housenumber = (result.number);
                var street = (result.street);
                var city = (result.city);
                var postcode = (result.postcode);
                var occupation = (result.occupation);

                $("#joined").text(joindate);
                $("#lastlogin").text('Yesterday');
                $("#firstn").text(firstname);
                $("#lastn").text(surname);
                $("#name").text(firstname + ' ' + surname);
                $("#dob").text(DoB);
                $("#occupation").text(occupation);
                $("#email").text(email);
                $("#address").text(housenumber + ' ' + street + ', ' + city + ', ' + postcode);
            }
            else
            {
                $("#joined").text("oh god im on fire");
            }
        },

        error: function(ts) {
            //window.location.href="../html/profile.php";
            alert("An Error Occured");
        }


    });
}


function loadEditInfo(){


    $.ajax({
        type: "POST",
        url: "../PHP/getInfo.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(result){

            var firstname = (result.firstname);
            var surname = (result.surname);
            var email = (result.email);
            var DoB = (result.dobnormal);
            var housenumber = (result.number);
            var street = (result.street);
            var city = (result.city);
            var postcode = (result.postcode);

            document.getElementById('firstn').value= firstname;
            document.getElementById('lastn').value= surname;
            document.getElementById('dob').value= DoB;
            document.getElementById('email').value= email;
            document.getElementById('number').value= housenumber;
            document.getElementById('street').value= street;
            document.getElementById('city').value= city;
            document.getElementById('postcode').value= postcode;

        },

        error: function(ts) {
            window.location.href="../html/profile.php";
        }

    });
}



function occupationfill(){

    $.ajax({
        type: 'POST',
        url: "../PHP/.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(data){


            $('#gradeselect').find('option').remove();


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

function validatePassword(){

    var input = $("#pass1").val()
    $("div").remove(".errormessage");

    $.ajax({
        type: 'POST',
        url: "../PHP/validatePassword.php",
        dataType: 'json', 
        data: {password: input},
        cache: false,
        success: function(data){
            if(data.valid){

            }
            else
            {
                $("#passdiv").append("<div id='invalid' class='errormessage'> Invalid Password <br> (Min 8 Character, Contain a Capital letter and one Number) </div>");
            }
        },
        error: function(){
            alert("Problem");
        }


    });
}


function Login(){

    $("div").remove(".errormessage");

    var user = $("#userinput").val();
    var pass = $("#passinput").val();

    if(user === ""){
        $("#userdiv").append("<div id='invalid' class='errormessage'> Please Enter User Name </div>");
    }
    if(pass === ""){
        $("#passdiv").append("<div id='invalid' class='errormessage'> Please Enter Password </div>");
    }

    if(!(user === "")  && !(pass === "") ){
        $.ajax({  
         type: 'POST',
         url: "../PHP/validateLogin.php",
         dataType: 'json',
         data: {username:user, password:pass},
         cache: false,
         success: function(result){

             if(result.valid) {
                document.forms['login'].submit();
            }
            else
            {
                $("#logininput").append("<div id='invalid' class='errormessage'> Login Not Valid </div>");

            }

        },
        error: function(){
         alert("Error Occured When Logging In");
     }
 });
    }
}


function updatePassword(){

    $("div").remove(".errormessage");

    var user = $("#userinput").val();
    var pass = $("#passinput").val();

    if(user === ""){
        $("#userdiv").append("<div id='invalid' class='errormessage'> Please Enter User Name </div>");
    }
    if(pass === ""){
        $("#passdiv").append("<div id='invalid' class='errormessage'> Please Enter Password </div>");

    }
}

function checkKey(){

    $("#passinput").keypress(function(e) {
        if(e.which == 13) {
            Login();
        }
    });

}

$(document).ready(function(){
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
})


function employmentclicked(numclicked){

    // alert("Employment Table "+numclicked+" was clicked");
    var employer = $("#"+numclicked+" #employer").text();
    var job = $("#"+numclicked+" #title").text();

    $(".overlay").show();
    $('div.options').remove();
    $("body").append("<div class='options'>"+
        "<div id='info'>"+employer+" - "+job+"</div>"+
        "<div id='editbutton' class='choice'>"+
        "<button id='"+numclicked+"' class='btn-warning btn-lg' onclick = editjob('"+numclicked+"') >Edit</button>"+
        "</div>"+
        "<div id='deletebutton'class='choice'>"+
        "<button id='"+numclicked+"' onclick=employmentdelete('"+numclicked+"') class='btn-danger btn-lg'>Delete</button>"+
        "</div>"+
        "</div>");


}

function employmentdelete(employmentnumber)
{

    $.ajax({  
     type: 'POST',
     url: "../PHP/jobdelete.php",
     dataType: 'json',
     data: {jobid:employmentnumber},
     cache: false,
     success: function(result){
        $("ul#"+employmentnumber).remove()
        $(".joboptions").hide();
    },
    error: function(){
     alert("Error Occured When Logging In");
 }

});
}

$(document).mouseup(function (e)
{
    var container = $(".options");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
    }
});



function editjob(EID)
{
    $.ajax({  
        type: 'POST',
        url: "../PHP/specificJob.php",
        dataType: 'json',
        data: {EID: EID},
        cache: false,
        success: function(result){
            var html = result.html;

            html.replace(/\//g,"/");
            $("div.options").empty();
            $("div.options").append(html);

        },
        error: function(){
            alert("Error Occured While Loading Edit Information");
        }
    });
}



function updatejob(EID)
{
    var validupdate = true;
    var title = $("input#title").val();
    var description = $("textarea#description").val();
    var startmonth = $("select#startmonth").val();
    var endmonth= $("select#endmonth").val();
    var startyear= $("select#startyear").val();
    var endyear = $("select#endyear").val();
    var inEID = EID;
    var startmonthnum = convertmonth(startmonth);
    var endmonthnum= convertmonth(endmonth);

    $(".errormessage").remove();

    if(title === "")
    {
        $("div#titlediv").append("<div id='invalid' class='errormessage'> Insert Title </div>");
        validupdate = false;
    }
    if(startmonth === "" | startyear === "")
    {
        $("div#startdiv").append("<div id='invalid' class='errormessage'> Select Valid Date </div>");
        validupdate = false;
    }
    if(endmonth === "" | endyear === "")
    {
        $("div#enddiv").append("<div id='invalid' class='errormessage'> Select Valid Date </div>");
        validupdate = false;
    }

    if(startyear > endyear)
    {
        $("div#enddiv").append("<div id='invalid' class='errormessage'> Can Not Finish A Job Before You Start It</div>");
        validupdate = false;
    }

    if(startyear === endyear && startmonthnum > endmonthnum )
    {
        $("div#enddiv").append("<div id='invalid' class='errormessage'> Can Not Finish A Job Before You Start It</div>");
        validupdate = false;
    }



    // alert(inQID+" "+inlevel+" "+ingrade);

    if(validupdate)
    {
        $.ajax({  
            type: 'POST',
            url: "../PHP/updatejob.php",
            data: {EID: EID, title: title, description: description, startmonth:startmonthnum, startyear:startyear, endmonth:endmonthnum, endyear:endyear},
            cache: false,
            success: function(result){
            // alert("update complete");
            $("ul#"+EID).find("div#start").html(startmonth+" "+startyear+" - "+endmonth+" "+endyear);
            $("ul#"+EID).find("div#title").html(title);
            $("ul#"+EID).find("div#desc").html(description);
            $(".options").remove();
        },
        error: function(error){
            alert("Error Occured While Deleting");
            alert(error);
            console.log(error);
        }
    });
    }
}


function convertmonth(Month)
{
    switch(Month) {
        case "January":
        return 1;
        case "Febuary":
        return 2;
        case "March":
        return 3;
        case "April":
        return 4;
        case "May":
        return 5;
        case "June":
        return 6;
        case "July":
        return 7;
        case "August":
        return 8;
        case "September":
        return 9;
        case "October":
        return 10;
        case "November":
        return 11;
        case "December":
        return 12;
        default:
        return null;
    }


}


