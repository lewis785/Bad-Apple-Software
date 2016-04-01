src="http://d3js.org/d3.v3.min.js";

function drawinstitutespath(){

	$.ajax({  
		type: 'POST',
		url: "../PHP/Pathmaker/getUserInstitutes.php",
		dataType: 'json',
		data: {},
		cache: false,
		success: function(result){
          
		var lastinstitute = "";	
          var data = [];
            var id = 0;

            data.push('{"id":"'+id+'","name":"Choices","parent":"null"}');
            id += 1;

			for (var i=0; i<result.length; i++){
				
				var curinstitute  = result[i].institute;
                
				// alert(curlevel + lastlevel);
              
              if(curinstitute === lastinstitute){
				}
				else
				{
					data.push('{"id":"'+id+'","name":"'+curinstitute+'","parent":"Choices"}');
                  id += 1;
        
					lastinstitute = curinstitute;
				}
			}
          
          
          data = '[' +data+ ']';
          data = JSON.parse(data);
         
    
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
         
    


            
var margin = {top: 20, right: 100, bottom: 20, left: 100},
    w = 600- margin.right - margin.left,
    h = 1000 - margin.top - margin.bottom,
      i = 0,
      duration = 600,
      root;

    var tree = d3.layout.tree()
    .size([h, w]);

    var diagonal = d3.svg.diagonal()
      .projection(function(d) {
        return [d.y, d.x];
      });

    var vis = d3.select("body").append("svg:svg")
      .attr("width", w + margin.right + margin.left)
      .attr("height", h + margin.top + margin.bottom)
      .append("g")
      .attr("id", "choicessvg")
      .attr("transform", "translate(" + margin.left  + "," + margin.top + ")");
      

    root = treeData[0];
    root.x0 = h;
    root.y0 = w;
         
function collapse(d) {
    if (d.children) {
      d._children = d.children;
      d.children = null;
    }
  }

    root.children.forEach(collapse);
        
             
    update(root);
            
  

    function update(source) {

      // Compute the new tree layout.
      var nodes = tree.nodes(root).reverse();
        
      // Update the nodes…
      var node = vis.selectAll("g.node")
        .data(nodes, function(d) {
          return d.id || (d.id = ++i);
        });

      var nodeEnter = node.enter().append("svg:g")
        .attr("class", "node")
        .attr("transform", function(d) {
          return "translate(" + source.y0 + "," + source.x0  + ")";
        });

//    nodes.forEach(function(d) { d.y = w + (d.depth) * 180 });
//    
      // Enter any new nodes at the parent's previous position.

      nodeEnter.append("svg:rect")
        .attr("width", 160)
        .attr("height", function(d) {
          return 19;
        })
      .attr("x", -80)
        .attr("y", -12)
        .attr("rx", 5)
        .attr("ry", 2)
        .style("fill", function(d) {
          return d._children ? "lightsteelblue" : "#fff";
        })
        .on("click", click);
        

      nodeEnter.append("text")
        .attr("x", function(d) {
          return d._children ? -0 : 8;
        })
        .attr("y", 3)
        .attr("dy", "0em")
        .attr("text-anchor", "middle")
        .text(function(d) {
          return d.name;
        })
        
        
        
      wrap(d3.selectAll('text'),150);

      // Transition nodes to their new position.
      nodeEnter.transition()
        .duration(duration)
        .attr("transform", function(d) {
          return "translate(" + d.y + "," + d.x + ")";
        })
        .style("opacity", 1)
        .select("rect")
        .style("fill", "lightsteelblue");
        
    

      node.transition()
        .duration(duration)
        .attr("transform", function(d) {
          return "translate(" + d.y + "," + d.x + ")";
        })
        .style("opacity", 1);


      node.exit().transition()
        .duration(duration)
        .attr("transform", function(d) {
          return "translate(" + source.y + "," + source.x + ")";
        })
        .style("opacity", 1e-6)
        .remove();

      // Update the links…
      var link = vis.selectAll("path.link")
        .data(tree.links(nodes), function(d) {
          return d.target.id;
        });

      // Enter any new links at the parent's previous position.
      link.enter().insert("svg:path", "g")
        .attr("class", "link")
        .attr("d", function(d) {
          var o = {
            x: source.x0,
            y: source.y0
          };
          return diagonal({
            source: o,
            target: o
          });
        })
        .transition()
        .duration(duration)
        .attr("d", diagonal);

      // Transition links to their new position.
      link.transition()
        .duration(duration)
        .attr("d", diagonal);

      // Transition exiting nodes to the parent's new position.
      link.exit().transition()
        .duration(duration)
        .attr("d", function(d) {
          var o = {
            x: source.x,
            y: source.y
          };
          return diagonal({
            source: o,
            target: o
          });
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
        
      }
      update(d);
    }

    function wrap(text, width) {
      text.each(function() {
        var text = d3.select(this),
         words = d3.select(this).data()[0].name.split(/\s+/).reverse(),
          word,
          line = [],
          lineNumber = 0,
          lineHeight = 1.1, // ems
          y = text.attr("y"),
          dy = parseFloat(text.attr("dy")),
          tspan = text.text(null).append("tspan").attr("x", 5).attr("y", y).attr("dy", dy + "em");
        while (word = words.pop()) {
          line.push(word);
          tspan.text(line.join(" "));
          if (tspan.node().getComputedTextLength() > width) {
            line.pop();
            tspan.text(line.join(" "));
            line = [word];
            tspan = text.append("tspan").attr("x", 5).attr("y", y).attr("dy", ++lineNumber * lineHeight + dy + "em").text(word);
          }
        }
        d3.select(this.parentNode.children[0]).attr("height", 19 * (lineNumber+1));
          
        
      });
    }

wrap(d3.selectAll('text'),150);


		},
		error: function(){
			alert("Error Occured While Deleting");
		}
	});




 function showInstituteChecklist(){

$.ajax({ 
  type : 'GET', 
  url : "../PHP/Pathmaker/getUserInstitutes.php", 
  dataType : 'json', 
  success : function(result){
    
    var lastInst = "";
    var ID = 0;
    
    $.each(result, function () {
      
      var curInst = this.institute;
      if(curInst === lastInst){
				}
				else
				{
        
        $("#checkInst").append($("<label>").text(this.institute).prepend(
            $("<input>").attr('type', 'checkbox').attr('id', 'instChoice').val(this.institute)));
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
}}