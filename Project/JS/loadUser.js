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


function gradeselected(){

    var selectedlvl = $('#levelselect :selected').text();

    var dataString = "level="+selectedlvl;

    $.ajax({
        type: 'POST',
        url: "../PHP/getGrades.php",
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