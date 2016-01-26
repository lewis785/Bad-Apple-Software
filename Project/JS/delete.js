
function deleteUser(){

    alert("Button Pressed");

    $.ajax({
      type: "POST",
      url: "badapple/PHP/delete.php",

      success: function(){
        alert(" has run correctly ");
      },
      error: function() {
        alert("Error Occured");
      },

    });

}