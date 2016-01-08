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

            $("#name").html('<span class="pull-left"><strong>Name</strong></span>');


        },

        error: function(ts) {
            alert("Error Occured");
            alert(ts.responseText);
        }

    });
}