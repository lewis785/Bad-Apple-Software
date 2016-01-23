$(function()
{

//Initialize the tooltips
// $("#register-form :input").each(function()
// {
//   var tipelement = this;
 
//   $(tipelement).tooltipster({
//      trigger: 'custom', 
//      onlyOne: false, 
//      position: 'right',
//      multiple:false,
//      autoClose:false});
 
// });


	$("#register-form").validate(
	{
		rules: 
		{
			firstname: 
			{
				required: true,
				lettersonly: true
			},
			surname: 
			{
				required: true,
				lettersonly: true
			},
			username: 
			{
				required: true
			},
			occupation: 
			{
				required: true
			},
			number: 
			{
				required: true
			},
			street: 
			{
				required: true
			},
			postcode: 
			{
				required: true
			},
			city: 
			{
				required: true
			},
			DoB: 
			{
				required: true
			},
			email1: 
			{
				required: true,
				email:true
			},
			email2: 
			{
				required: true,
				email:true,
				equaltTo:"#email1"
			},
			pass1: 
			{
				required: true
			},
			pass2: 
			{
				required: true,
				equalTo:"#pass1"
			}
		},
		// errorPlacement: function(error, element) 
  //       {
  //         var $element = $(element),
  //             tipelement=element,
  //             errtxt=$(error).text(),
  //             last_error='';
          
  //           tipelement = getTipContainer(element);
          
  //           last_error = $(tipelement).data('last_error');
  //           $(tipelement).data('last_error',errtxt);
  //           if(errtxt !=='' && errtxt != last_error)
  //             {
  //               $(tipelement).tooltipster('content', errtxt);
  //               $(tipelement).tooltipster('show');
  //             }
  //       },
  //       success: function (label, element) 
  //       {
  //           var tipelement = getTipContainer(element);
  //           $(tipelement).tooltipster('hide');
  //       }
	});


});   

