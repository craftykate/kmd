<?php
  //sets the proper active tab on main nav
  $products = 'active';

  //insert page head and header
  $page_title = 'Portfolio | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="portfolio.php" ><h1 class="letterpress boxshadow curlup" >P<span class="orange" >o</span>rtf<span class="orange" >o</span>li<span class="orange" >o</span></h1></a>
	</div>

<?php
  require_once('templates/sidebar.php');
?>

<!--
<hr class="fade" />
	<div id="" class="infobox boxshadow" >
		<h3></h3>
		<img src="img/bags/" alt="" width="" class="right round" >
		<p></p>
		<br style="clear:both">
	</div>
-->

<div id="content" >


	<div class="infobox boxshadow" > <!--Call it class="short" if no pics and doesn't need a min-height-->
		<h3>Portfolio</h3>
		<a href="http://katemcfaul.com/kmd/kmdfiles/Portfolio.pdf"><img src="img/products/portfolioimage.png" alt="" width="" class="left smallimg round" ></a>
		<p>What makes my products unique: My designs are beautiful, durable and smart. My bags are gorgeous but also made for daily use – and abuse! Pockets are where you need them, bottoms are reinforced, stitches are beautifully in place – my designs have all been carefully thought out to give you a well made and durable item that is loaded with style. It has taken me years to develop my line and new items are added once they are perfected. Click the image to see the full portfolio.</p>
		<br style="clear:both">
	</div>

	<div class="infobox boxshadow" >
		<h3>Store Flyer</h3>
		<a href="http://katemcfaul.com/kmd/kmdfiles/Store_Flyer.pdf"><img src="img/products/flyerimage.png" alt="" width="" class="left smallimg round" ></a>
		<p>Do you have a shop and are interested in selling my products in your store? For more information please check out my Store Flyer. Click the image for the full-size PDF.</p>
		<br style="clear:both">
	</div>
	
</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>