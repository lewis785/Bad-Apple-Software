function loadInfo(){


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
            var DoB = (result.dob);
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
            $("#address").text(housenumber + ' ' + street + ' ' + city + ' ' + postcode);
        },

        error: function(ts) {
            alert("Error Occured");
            alert(ts.responseText);
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
            var DoB = (result.dob);
            var housenumber = (result.number);
            var street = (result.street);
            var city = (result.city);
            var postcode = (result.postcode);

            document.getElementById('firstn').value= firstname;
            document.getElementById('lastn').value= surname;
            document.getElementById('dob').value= DoB;
            document.getElementById('email').value= email;

        },

        error: function(ts) {
            alert("Error Occured");
            alert(ts.responseText);
        }

    });
}