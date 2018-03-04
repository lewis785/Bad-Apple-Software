<!DOCTYPE html>
<?php 
//include "../php/core/verify.php";
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Profile </title>
        <!-- core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/animate.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/responsive.css" rel="stylesheet">
        <link href="../css/boostrap.css" rel="stylesheet">
        <link href="../css/boostrap-theme.css" rel="stylesheet">
        <link href="../css/boostrap-theme.min.css" rel="stylesheet">
        <link href="../css/home.css" rel="stylesheet">
        <!-- core JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap/npm.js"></script>
        <script src="../js/bootstrap/bootstrap.js"></script>
        <script src="../js/bootstrap/jquery.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/bootstrap/jquery.prettyPhoto.js"></script>
        <script src="../js/bootstrap/jquery.isotope.min.js"></script>
        <script src="../js/bootstrap/main.js"></script>
        <script src="../js/bootstrap/wow.min.js"></script>
        <!-- Code for loading user information -->
        <script src="../js/loadUser.js"></script>
        <script src="../js/popup.js"></script>
        <script src="//d3js.org/d3.v3.min.js"></script>
    </head>
    <!--/head-->
    <body onload="loadInfo()">
        <div id="navbar">
            <nav id="main-nav" class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <?php include "../php/admin/adminButton.php" ?>
                            <li>
                                <a href="workingbuilderTemp.php"> Path </a>
                            </li>
                            <li>
                                <a href="qualifications.php"> Qualifications </a>
                            </li>                             

                            <!-- still to be made -->
                            <li class="dropdown">
                                <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                                <ul id="nav-drop" class="dropdown-menu">
                                    <li>
                                        <a href="profiledetail.php"> Edit Info </a>
                                    </li>
                                    <li>
                                        <a href="addgrades.php"> Add Grades </a>
                                    </li>                                     
                                    <li>
                                        <a href="addjob.php"> Add Employment </a>
                                    </li>                                     
                                    <li>
                                        <a href="#"> Starred Paths </a>
                                    </li>                                     
                                    <!-- still to be made -->
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="../php/core/signout.php"> Log out </a>
                                    </li>                                     
                                    <!-- still to be made -->
                                </ul>
                            </li>                             
                            <li>
                                <a href="profile.php"> Home </a>
                            </li>                             
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- End of NavBar-->
        <style>
            .node {
            cursor: pointer;
            }
            .node circle {
            fill: #fff;
            stroke: red;
            stroke-width: 1.5px;
            }
            .node text {
            font: 20px sans-serif;
            margin-right: 50px ;
            }
            .link {
            fill: none;
            stroke: #ccc;
            stroke-width: 3px;
            }
</style>
        <section id="page-center" class=" col-md-6 col-md-offset-3">
            <div id="center" class="main-section container-fluid">
                <script>

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



        d3.json("../JS/treeData.json", function(error, treeData) {

          if (error) throw error;



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
        });

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
  .attr("x", function(d) { return d.children || d._children ? 5 : -5; })
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

</script>
            </div>
        </section>
        <!--/#bottom-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2016 
                        <a target="_blank" href="#" title="badapplesoftware"> Bad Apple Software</a>. All Rights Reserved.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right"> Technologies used :
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>PHP6</li>
                            <li>GIMP</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
    </body>
</html>