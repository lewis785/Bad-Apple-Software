function getqualifications(){

	$.ajax({  
		type: 'POST',
		url: "../PHP/pathmaker/pathqualifications.php",
		dataType: 'json',
		data: {},
		cache: false,
		success: function(result){
			var lastlevel = "not a grade";
			$("body").append("<br>")

			for (var i=0; i<result.length; i++){
				
				var curlevel= result[i].level;
				var course= result[i].course;
				var grade= result[i].grade;

				// alert(curlevel + lastlevel);
				
				if(curlevel === lastlevel){
					$("body").append("-------"+course+": "+grade+"<br>");
				}
				else
				{
					$("body").append(curlevel+"<br>");
					$("body").append("-------"+course+": "+grade+"<br>");
					var lastlevel = curlevel;
				}



			}



		},
		error: function(){
			alert("Error Occured While Deleting");
		}
	});




}