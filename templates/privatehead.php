<!DOCTYPE html>
<html><head>
		<link href="../css/reset.css" rel="stylesheet" >
		<link href="../css/main.css" rel="stylesheet" media="screen" >
		<meta charset="utf-8" >
		<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" ><!--REMOVE WHEN FINAL SITE IS PUBLISHED-->
		<link rel="icon" href="../img/favicon.ico" type="image/x-icon" >
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" >
<?php		
		echo '<title>' . $page_title . '</title>';
?>

<!--For making older versions of IE recognize HTML5 structural elements.-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

</head>
	<body>
<div id="header" >
	<div id="headerContent" >
		<a href="index.php" ><img src="../img/headlogo.png" alt="" ></a>
		<div id="nav-wrap" >
		<ul id="nav" >
			<li><a href="../index.php" >Home</a></li> <!--SET A  class="active" TO ACTIVE LI-->
			<li><a href="../products.php" >Products</a></li>
			<li><a href="../webdesign.php" >Web Design</a></li>
			<li><a href="../press.php" >Press</a></li>
			<li><a href="../about.php" >About</a></li>
			<li><a href="../contact.php" >Contact</a></li>
			<li class="active" ><a href="http://katemcfauldesigns.com/private/index.php" >Private Page</a></li>
		</ul>
		</div>
	</div><!--header content-->
<br style="clear:both; " >
</div> <!--header-->

<div id="wrapper" >
	<div id="titlebox" >
		<a href="http://katemcfauldesigns.com/private/index.php" ><h1 class="letterpress boxshadow curlup" >Pr<span class="orange" >i</span>v<span class="orange" >a</span>t<span class="orange" >e</span></h1></a>
		<ul id="navwrap">
<?php
  	if (!isset($_SESSION['user_id'])) {
		echo '<li><a href="index.php">Log In</a></li>';
	}
	else if (isset($_SESSION['user_id'])) {	
		echo '<li><a href="../includes/logout.php">Log Out</a></li>';
	}
?>
		</ul>
	</div>

