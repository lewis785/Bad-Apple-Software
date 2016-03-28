function getqualifications(){

	$.ajax({  
		type: 'POST',
		url: "../PHP/pathmaker/pathqualifications.php",
		dataType: 'json',
		data: {},
		cache: false,
		success: function(result){
			var lastlevel = "not a grade";
			var parentid = 100;
			var data = [];
			$("body").append("<br>")

			for (var i=0; i<result.length; i++){
				
				var curlevel= result[i].level;
				var course= result[i].course;
				var grade= result[i].grade;

				// alert(curlevel + lastlevel);
				
				if(curlevel === lastlevel){
					$("body").append("-------"+course+": "+grade+"<br>");
					data.push('{"name": "'+course+': '+grade+'", "parent": "'+curlevel+'"}');
				}
				else
				{
					$("body").append(curlevel+"<br>");
					data.push('{"name": "'+curlevel+'", "parent": "qualifications"}');
					$("body").append("-------"+course+": "+grade+"<br>");
					data.push('{"name": "'+course+": "+grade+'", "parent": "'+curlevel+'"}');
					var lastlevel = curlevel;
				}



			}

			alert(data);


		},
		error: function(){
			alert("Error Occured While Deleting");
		}
	});




}