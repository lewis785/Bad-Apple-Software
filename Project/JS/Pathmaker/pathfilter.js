function getChoices()
{
    			 
    var selectedCourse = [];
    var selectedInstitute = [];
    
    $('input:checkbox[id^="courseBox"]:checked').each(function(){
    selectedCourse.push($(this).attr("value"));});
        $('input:checkbox[id^="instituteBox"]:checked').each(function(){
    selectedInstitute.push($(this).attr("value"));});
    
    alert(selectedCourse.toString());
    alert(selectedInstitute.toString());
    
//    $.ajax
//			 ({  
//			 	type: 'POST',
//			 	url: "../PHP/Wizard/insertDetails.php",
//			 	data: {},
//			 	cache: false,
//			 	success: function(result){
//			 		page += 1;
//			 	},
//			 	error: function(error){
//			 		alert("Error Occured While Inserting Details");
//			 		alert(error);
//			 	}
//			 });
}

function toggleDiv(){
    
    $(updateTree).toggleClass('visable','invisible');
    $(updateTree).toggleClass('invisible','visable');
    
}



function showInstituteChecklist(){

$.ajax({ 
  type : 'GET', 
  url : "../PHP/Pathmaker/getUserInstitutes.php", 
  dataType : 'json', 
  success : function(result){
    
    var lastInst = "";
    var ID = 0;
               $("label#instit").remove();
      $("br").remove();
      
    $.each(result, function () {
      
      var curInst = this.institute;
      if(curInst === lastInst){
				}
				else
				{
 
                    $("#checkInst").append($("<label id='instit'>").text(this.institute).prepend(
                    $("<input>").attr('type', 'checkbox').attr('id', 'instituteBox').val(this.institute)));
                    $("#checkInst").append("<br>");
      
      ID =+ 1;
      lastInst = curInst;
                }
      
    });


    $("#checkInst").on('change', '[type=checkbox]', function () {
       console.log($(this).val());
    });
  },
		error: function(){
			alert("Error Occured While Forming List");
		}
	});
}