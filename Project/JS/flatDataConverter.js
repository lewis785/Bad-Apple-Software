
function getAndConvert() {


    $.ajax({
        type: "POST",
        url: "../PHP/getUserHistory.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(result){
            
            
            
          
        

        error: function(ts) {
        window.location.href="../html/profile.php";
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


    });
}

