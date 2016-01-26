//with this first line we're saying: "when the page loads (document is ready) run the following script"

$(function(){
	//opens the POPUP if the an element with id="popin" is clicked
	$('#popin').click(function () {
    //select the POPUP FRAME and show it
    $("#popup").hide().fadeIn(1000);

    //close the POPUP if the an element with id="close" is clicked
    $("#close").on("click", function (e) {
    	e.preventDefault();
    	$("#popup").fadeOut(500);
    });
});

  $('#popin').click(function(){
    $('#popin-form')[0].reset();
});

});