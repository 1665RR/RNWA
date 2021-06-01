<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stil.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MVC</title>

<body onload="showTable()">
  <div class="header">
    <h1>WorkOrder CMS</h1>
  </div>
    <div class="sidebar">
        <a class="active" href="./">Home</a>
		<a href='?controller=users&action=index'>Users</a>
	  <a href='?controller=contactor&action=index'>Contractor</a>
	    <a href='?controller=company&action=index'>Company</a>
      </div>
	  <div class="content" id="con">

        <div class="wrapper" id="dz21">
      
		    <?php require_once('routes.php'); ?>
			
     <div class="footer">
      <div id="dataTable"> </div>
		</div>
		</div>
     </div>  
     
</body>
</html>