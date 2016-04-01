

var makeTree = function(options) {
  var children, e, id, o, pid, temp, _i, _len, _ref;
  id = options.id || "name";
  pid = options.parentid || "parent";
  children = options.children || "children";
  temp = {};
  o = [];
  _ref = options.q;
  for (_i = 0, _len = _ref.length; _i < _len; _i++) {
    e = _ref[_i];
    e[children] = [];
    temp[e[id]] = e;
    if (temp[e[pid]] != null) {
      temp[e[pid]][children].push(e);
    } else {
      o.push(e);
    }
  }
  return o;
};

makeTree(data);




var dataMap = data.reduce(function(map, node) {
	map[node.name] = node;
	return map;
}, {});

// create the tree array
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