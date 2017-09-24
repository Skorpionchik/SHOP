<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery-3.1.0.min.js"></script>
</head>
<body class="bg-warning">
<?php include_once('pages/classes.php');?>
 	<div class="conteiner">
		<div class="row-fluid  "  >
		<nav class="navbar navbar-default navbar-static-top">
  		<a class="navbar-brand" href="index.php">magazin</a>
 		<ul class="nav navbar-nav"   role="tablist">
		    <li role="presentation" id="myTab"><a href="index.php?menu=1" role="tab">Categories</a></li>
		    <li role="presentation"><a href="index.php?menu=2"   role="tab">Items</a></li>
		    <li role="presentation"><a href="index.php?menu=3"   role="tab">Reports</a></li> 
		    <li role="presentation"><a href="index.php?menu=4"   role="tab">Admin</a></li> 
		    <li role="presentation"><a href="index.php?menu=5"   role="tab">Catalog</a></li> 
		    <li role="presentation"><a href="index.php?menu=6"   role="tab">Cart</a></li> 
			<li role="presentation"><a href="index.php?menu=7"   role="tab">Comment</a></li> 
	 	</ul>
	 	</div>
	 	</nav>
  </div>
		<div class="row-fluid content">
 		<?php
			if(isset($_GET['menu']))
			{
				$menu=$_GET['menu'];
				if ($menu==1)
					include_once('pages/categories.php');
				if ($menu==2)
					include_once('pages/items.php');
				if ($menu==3)
					include_once('pages/reports.php');
				if ($menu==4)
					include_once('pages/admin.php');
				if ($menu==5)
					include_once('pages/Catalog.php');		 
			}

		?>




 
		</div>
		
	</div>
	<script src="js/jquery-ui.js"></script>
</body>
</html>