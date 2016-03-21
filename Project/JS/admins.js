var usernumber = 0;



function searchUsers(){

    var user = $("#usersearch").val();

    $.ajax({
       type: 'POST',
       url: "../../PHP/Admin/searchUsers.php",
       dataType: 'json',
       data: {namesearch:user},
       cache: false,
       success: function(data){

        $("#usertable tbody tr").remove();

        for (var i=0; i<data.length; i++){
            var id = data[i].userid;
            var username = data[i].username;
            var firstname = data[i].first;
            var surname = data[i].surname;
            var email = data[i].email;
            var dob = data[i].dj;

            var html ="<tr onclick='userselected("+id+")'><td>"+id+"</td><td>"+username+"</td><td>"+firstname+"</td><td>"+surname+"</td><td>"+email+"</td><td>"+dob+"</td></tr>";

            $('#usertable').append(html);
            usernumber += 1;

        }





    },
    error: function (error) {
        // alert('Search Error ' + eval(error));
    }
});

}


function checkKey(){

    $("#usersearch").keyup(function() {
        searchUsers();
    });

}

function userselected(id){

    if (name != undefined && name != null) {
        window.location = '/HTML/admin/userinfo.php?userid=' + id;
    }


}





function deleteUser(){

    var userid = $("#userid").text();
    var name = $("#username").text();

    alert(userid+name);
    $.ajax({
       type: 'POST',
       url: "../../PHP/Admin/admindeleteuser.php",
       data: {userid:userid, username:name},
       cache: false,
       success: function(data){

            alert(name + " " + userid + "has been deleted");

    },
    error: function (error) {
        alert('Delete Error ' + eval(error));
    }
});

}

