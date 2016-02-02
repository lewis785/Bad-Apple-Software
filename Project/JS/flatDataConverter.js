
function getAndConvert() {


    $.ajax({
        type: "POST",
        url: "../PHP/getUserHistory.php",
        data: "",
        cache: false,
        dataType: 'json', 
        success: function(result){

            var name = (result.name);
            var parent = (result.parent);
            
            $("#address").text(housenumber + ' ' + street + ', ' + city + ', ' + postcode);
        },

        error: function(ts) {
        window.location.href="../html/profile.php";
        }
        
        
var dataMap = data.reduce(function(map,node) {
 map[node.name] = node;
 return map;
}, {});



var treeData = [];
data.forEach(function(node) {
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

