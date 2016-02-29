

// $(document).ready(function(){
// //setup before functions
// var typingTimer;                //timer identifier
// var doneTypingInterval = 1000;  //time in ms, 5 second for example
// var $input = $('#usersearch');

// //on keyup, start the countdown
// $input.on('keyup', function () {
//   clearTimeout(typingTimer);
//   typingTimer = setTimeout(searchUsers, doneTypingInterval);
// });

// //on keydown, clear the countdown 
// $input.on('keydown', function () {
//   clearTimeout(typingTimer);
// });

// })




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

            var html ="<tr><td>"+id+"</td><td>"+username+"</td><td>"+firstname+"</td><td>"+surname+"</td><td>"+email+"</td><td>"+dob+"</td></tr>";

            $('#usertable').append(html);

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
