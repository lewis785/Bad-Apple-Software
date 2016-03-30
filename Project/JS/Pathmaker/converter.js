src="http://d3js.org/d3.v3.min.js";

function drawpath(){

	$.ajax({  
		type: 'POST',
		url: "../PHP/Pathmaker/pathqualifications.php",
		dataType: 'json',
		data: {},
		cache: false,
		success: function(result){
          
			var lastlevel = "not a grade";
			var parentid = 100;
			var data = [];
            var id = 0;
			$("body").append("<br>");
            data.push('{"id":"'+id+'","name":"qualifications","parent":"null"}');
            id += 1;

			for (var i=0; i<result.length; i++){
				
				var curlevel= result[i].level;
				var course= result[i].course;
				var grade= result[i].grade;

				// alert(curlevel + lastlevel);
				
              $("body").append("<br>")
				if(curlevel === lastlevel){
					//$("body").append("-------"+course+": "+grade+"<br>");
					data.push('{"id":"'+id+'","name":"'+course+':'+curlevel+'","parent":"'+curlevel+'"}');
                  id += 1;
					data.push('{"id":"'+id+'","name":"'+grade+'","parent":"'+course+':'+curlevel+'"}');
                  id += 1;
                }

				else
				{
					//$("body").append(curlevel+"<br>");
					data.push('{"id":"'+id+'","name":"'+curlevel+'","parent":"qualifications"}');
                  id += 1;
					//$("body").append("-------"+course+": "+grade+"<br>");
					data.push('{"id":"'+id+'","name":"'+course+':'+curlevel+'","parent":"'+curlevel+'"}');
                  id += 1;
                    data.push('{"id":"'+id+'","name":"'+grade+'","parent":"'+course+':'+curlevel+'"}');
                  id += 1;
                  
        
					var lastlevel = curlevel;
				}
			}
            
            
          alert(data);
          data = '[' +data+ ']';
          data = JSON.parse(data);
          d3.select('body').append('pre')
    .text(JSON.stringify(data, null, '  '));
    
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
                  
          d3.select('body').append('pre')
    .text(JSON.stringify(treeData, null, '  '));
            
    

    var margin = {top: 20, right: 120, bottom: 20, left: 120},
    width = 960 - margin.right - margin.left,
    height = 800 - margin.top - margin.bottom;

var i = 0,
    duration = 750,
    root;

var tree = d3.layout.tree()
    .size([height, width]);

var diagonal = d3.svg.diagonal()
    .projection(function(d) { return [d.y, d.x]; });

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.right + margin.left)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

//d3.json(treeData, function(error, treeData) {
//  if (error) throw error;

  root = treeData[0];
  root.x0 = height / 2;
  root.y0 = width;

  function collapse(d) {
    if (d.children) {
      d._children = d.children;
      d._children.forEach(collapse);
      d.children = null;
    }
  }

  root.children.forEach(collapse);
  update(root);
//});

d3.select(self.frameElement).style("height", "800px");

function update(source) {

  // Compute the new tree layout.
  var nodes = tree.nodes(root).reverse(),
      links = tree.links(nodes);

  // Normalize for fixed-depth.
  nodes.forEach(function(d) { d.y = width - (d.depth * 180); });

  // Update the nodes…
  var node = svg.selectAll("g.node")
      .data(nodes, function(d) { return d.id || (d.id = ++i); });

  // Enter any new nodes at the parent's previous position.
  var nodeEnter = node.enter().append("g")
      .attr("class", "node")
      .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
      .on("click", click);

  nodeEnter.append("circle")
      .attr("r", 1e-6)
      .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

  nodeEnter.append("text")
      .attr("x", function(d) { return d.children || d._children ? -10 : 10; })
      .attr("dy", ".35em")
      .attr("text-anchor", function(d) { return d.children || d._children ? "start" : "end"; })
      .text(function(d) { return d.name; })
      .style("fill-opacity", 1e-6);

  // Transition nodes to their new position.
  var nodeUpdate = node.transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

  nodeUpdate.select("circle")
      .attr("r", 4.5)
      .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

  nodeUpdate.select("text")
      .style("fill-opacity", 1);

  // Transition exiting nodes to the parent's new position.
  var nodeExit = node.exit().transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
      .remove();

  nodeExit.select("circle")
      .attr("r", 1e-6);

  nodeExit.select("text")
      .style("fill-opacity", 1e-6);

  // Update the links…
  var link = svg.selectAll("path.link")
      .data(links, function(d) { return d.target.id; });

  // Enter any new links at the parent's previous position.
  link.enter().insert("path", "g")
      .attr("class", "link")
      .attr("d", function(d) {
        var o = {x: source.x0, y: source.y0};
        return diagonal({source: o, target: o});
      });

  // Transition links to their new position.
  link.transition()
      .duration(duration)
      .attr("d", diagonal);

  // Transition exiting nodes to the parent's new position.
  link.exit().transition()
      .duration(duration)
      .attr("d", function(d) {
        var o = {x: source.x, y: source.y};
        return diagonal({source: o, target: o});
      })
      .remove();

  // Stash the old positions for transition.
  nodes.forEach(function(d) {
    d.x0 = d.x;
    d.y0 = d.y;
  });
}

// Toggle children on click.
function click(d) {
  if (d.children) {
    d._children = d.children;
    d.children = null;
  } else {
    d.children = d._children;
    d._children = null;
  }
  update(d);
}




		},
		error: function(){
			alert("Error Occured While Deleting");
		}
	});

}