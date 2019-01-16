<!DOCTYPE html>
<html><head>
		<link href="css/reset.css" rel="stylesheet" >
		<link href="css/main.css" rel="stylesheet" media="screen" >
		<meta charset="utf-8" >
		<link rel="icon" href="img/favicon.ico" type="image/x-icon" >
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >
<?php		
		echo '<title>' . $page_title . "Kate McFaul Designs</title>";
?>
<!--For making older versions of IE recognize HTML5 structural elements.-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<!--Add Google Tracking-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1632848-17']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

<div id="header" >
	<div id="headerContent" >
		<a href="index.php" ><img src="img/headlogo.png" alt="" ></a>
		<div id="nav-wrap" >
		<ul id="nav" >
			<li class="<?php echo $home; ?>" ><a href="index.php" >Home</a></li> 
			<li class="<?php echo $products; ?>" ><a href="products.php" >Products</a></li>
			<li class="<?php echo $web; ?>" ><a href="webdesign.php" >Web Design</a></li>
			<li class="<?php echo $press; ?>" ><a href="press.php" >Press</a></li>
			<li class="<?php echo $about; ?>" ><a href="about.php" >About</a></li>
			<li class="<?php echo $contact; ?>" ><a href="contact.php" >Contact</a></li>
		</ul>
		</div>
	</div><!--header content-->
<br style="clear:both; " >
</div> <!--header-->