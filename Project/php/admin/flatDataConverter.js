
<?php

$fp = fopen('../JS/treeData.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

?>


var dataMap = data.reduce(function(map, node) {
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

<?php

$fp = fopen('../JS/treeData.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

?>