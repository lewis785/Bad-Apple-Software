

<script>
function getAndConvert(){

    $.ajax({
        type: "POST",
        url: "../PHP/getUserHistory.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(result){

            if(result.error == 0){

//
// var obj = JSON.parse(result);
//            obj['Course'].push({"parent": "Level"});
//            obj['Grade'].push({"parent": "Course"});
//            jsonStr = JSON.stringify(obj);
//            
//            var name = (result.Course);
//            var parent = (result.parent);
//            console.log(obj);
var data = {
    qualifications: []
};

for(var i in result) {

    var item = someData[i];

    employees.accounting.push({ 
        "firstName" : item.firstName,
        "lastName"  : item.lastName,
        "age"       : item.age 
    });
}
                
var dataMap = result.reduce(function(map,node) {
 map[node.name] = node;
 return map;
}, {});



var treeData = [];
result.forEach(function(node) {
 // add to parent
    
    
var parent = dataMap[node.parent];
 if (parent) {
  // create child array if it doesn't exist
  (parent.children || (parent.children = []))
   // add node to child array
   .push(node);
 } else {
  // parent is null or missing
  treeData.push(node);
 }
});
                
            }
            else
            {
                $("#joined").text("oh god im on fire");
            }
        },

        error: function(ts) {
            //window.location.href="../html/profile.php";
            alert("An Error Occured");
        }




    });
}

</script>