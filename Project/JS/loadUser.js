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

            $("#joined").text(joindate);
            $("#lastlogin").text('Yesterday');
            $("#firstn").text(firstname);
            $("#lastn").text(surname);
            $("#name").text(firstname + ' ' + surname);
            $("#dob").text(DoB);
            $("#email").text(email);

        },

        error: function(ts) {
            alert("Error Occured");
            alert(ts.responseText);
        }

    });
}