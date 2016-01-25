function loadInfo(){


    window.alert(5 + 6);

    $.ajax({
        type: "POST",
        url: "../PHP/getInfo.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(result){

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


            $("#joined").text(joindate);
            $("#lastlogin").text('Yesterday');
            $("#firstn").text(firstname);
            $("#lastn").text(surname);
            $("#name").text(firstname + ' ' + surname);
            $("#dob").text(DoB);
            $("#email").text(email);
            $("#address").text(housenumber + ' ' + street + ', ' + city + ', ' + postcode);
        },

        error: function(ts) {
            window.location.href="../html/profile.html";
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
            window.location.href="../html/profile.html";
        }

    });
}


function gradeselected(){

    var e = document.getElementById("gradeselect");
    var strUser = e.options[e.selectedIndex].value;



    $.ajax({
        type: "POST",
        url: "../PHP/getGrades.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(result){

        var grade = (result.grade);
        alert(grade);

        },
        error: function(ts){
            alert("Error");

        }
    });

}

