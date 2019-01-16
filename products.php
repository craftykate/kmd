<?php
  //sets the proper active tab on main nav
  $products = 'active';

  //insert page head and header
  $page_title = 'Products | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="products.php" ><h1 class="letterpress boxshadow curlup" >Pr<span class="orange" >o</span>d<span class="orange" >u</span>cts</h1></a>
		<ul id="navbar" >
			<li><a href="bags.php" >Bags</a></li>
			<li><a href="accessories.php" >Accessories</a></li>
			<li><a href="portfolio.php" >Portfolio</a></li>
		</ul>

	</div>

<?php
  require_once('templates/sidebar.php');
?>

<!--
<hr class="fade" />
	<div id="" class="infobox boxshadow whitebox" >
		<h3></h3>
		<img src="img/bags/" alt="" width="" class="right round" >
		<p></p>
		<br style="clear:both">
	</div>
-->

<div id="content" >

<div class="blockholder" >

<div class="blocktable" >
<div class="navblock firstnarrow" >
<div class="blockbackground" ><div class="corner" ><h1><a href="bags.php" >Bags</a></h1></div><a href="bags.php" ><img src="img/bags/fave2.jpg" alt="" ></a></div>
<a href="bags.php" ><p><strong>Bags</strong> My bags are gorgeous but also made for daily use - and abuse! Pockets are where you need them, bottoms are reinforced, stitches are beautifully in place – my designs have all been carefully thought out to give you a well made and durable item that is loaded with style. Click here to see them!</p></a>
</div>
</div>

<div class="blocktable" >
<div class="navblock middlenarrow" >
<div class="blockbackground" ><div class="corner" ><h1><a href="accessories.php" >Accessories</a></h1></div><a href="accessories.php" ><img src="img/acc/apron1.jpg" alt="" ></a></div>
<a href="accessories.php" ><p><strong>Accessories</strong> Flirty aprons, darling coffee cups sleeves, and handy little pin cushions with thread catchers are just a few of my well designed, gorgeous, and fun accessories. Click here to see them!</p></a>
</div>
</div>

<div class="blocktable" >
<div class="navblock lastnarrow" >
<div class="blockbackground" ><div class="corner" ><h1><a href="portfolio.php" >Portfolio</a></h1></div><a href="portfolio.php" ><img src="img/products/portfolioimage.png" alt="" ></a></div>
<a href="portfolio.php" ><p><strong>Portfolio</strong> All (or, almost all) of my products in one nicely packaged pdf delivered straight to your browser. PLUS, my flyer for store owners looking for more info on carrying my products in their stores! Click here to see them!</p></a>
</div>
</div>

</div><!--blockholder-->
	
</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>