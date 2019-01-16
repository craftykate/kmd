<?php
  //sets the proper active tab on main nav
  $products = 'active';

  //insert page head and header
  $page_title = 'Accessories | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="accessories.php" ><h1 class="letterpress boxshadow curlup" >Acc<span class="orange" >e</span>ssori<span class="orange" >e</span>s</h1></a>
		<ul id="navbar" class="hideme" >
			<li><a href="#all" >All Accessories</a>
				<ul class="boxshadow" >
					<li><a href="#apron" >Aprons</a></li>
					<li><a href="#sandwich" >Sandwich Bags</a></li>
					<li><a href="#coffee" >Insulate Coffee Cup Sleeve</a></li>
					<li><a href="#thread" >Pin Cushion with Thread Catcher</a></li>
					<li><a href="#tissue" >Tissue Holder</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
  require_once('templates/sidebar.php');
?>

<!--
<hr class="fade" />
	<div id="" class="infobox boxshadow whitebox" >
		<h3></h3>
		<img src="img/acc/" alt="" width="" class="right round" >
		<p></p>
		<br style="clear:both">
	</div>
-->

<div id="content" >

<br id="all"/>
	<div id="apron" class="infobox boxshadow whitebox" >
		<h3>Aprons</h3>
		<img src="img/acc/apron1.jpg" alt="" width="" class="left mediumimg round" >
		<p>Aren't these aprons <strong>darling</strong>? </p>
		<p>I have a lot of fun with these. I make them one at a time and let the <strong>fabrics decide</strong> the shape and style.</p> 
		<img src="img/acc/apron2.jpg" alt="" width="" class="mediumimg right round" >
		<p style="clear:left; " >Some are flowy, some are slim, some are full, some are little half aprons - but they all have their own personalities! </p>
		<img src="img/acc/apron3.jpg" alt="" width="" class="left smallimg round" >
		<p style="clear:right; " >I love aprons that are <strong>fun, flirty and stylish</strong> - aprons you want to keep on even <em>after</em> you're done cooking.</p>
		<br style="clear:both; " >
	</div>

	<div id="sandwich" class="infobox boxshadow whitebox" >
		<h3>Sandwich Bags</h3>
		<img src="img/acc/sandwich2.jpg" alt="" width="" class="left mediumimg round" >
		<p>These cotton sandwich baggies are perfect for bag lunches. The fold is sewn down so it stays closed, just like the plastic kind - except these are <strong>quality cotton, not plastic</strong>, pvc or pul. Help the environment <em>and</em> keep that nasty plastic away from your food!</p> 
		<img src="img/acc/sandwich1.jpg" alt="" width="" class="smallimg right round" >
		<p>These easily hold a sandwich, a large helping of crackers, veggies, or (I won't tell!) cookies. The fun fabrics bring a <strong>touch of home</strong> to your child's school lunch or a bit of flair to your bagged lunch.</p>
		<p style="clear:left; " >Simply <strong>rinse</strong> when it gets sticky and leave it to dry overnight. Every once in a while I <strong>toss them in the wash</strong> for good measure.</p>
		<img src="img/acc/sandwich3.jpg" alt="" width="" class="center biggestimg round" >
		<p>I keep a stack of these in my kitchen drawer - <strong>they're so handy</strong>!</p>
		<br style="clear:both; " >
	</div>
	
	<div id="coffee" class="infobox boxshadow whitebox" >
		<h3>Insulated Coffee Cup Sleeve</h3>
		<img src="img/acc/coffee1.jpg" alt="" width="" class="right mediumimg round" >
		<p>Bring a <strong>soft bit of luxury</strong> to your daily drink! These insulated coffee cup sleeves feature high quality 100% cotton fabrics and insulated material to keep <strong>both hot <em>and</em> cold</strong> temperatures away from your fingers. </p>
		<img src="img/acc/coffee3.jpg" alt="" width="" class="left smallimg round" >
		<p style="clear:right; " >I love these little sleeves. I get comments on mine every time I go to the local coffee shop! <strong>One always lives in my purse</strong> - and since they fold up flat it doesn't take up much space. I still smile every time I use it!</p>
		<img src="img/acc/coffee2.jpg" alt="" width="" class="center biggestimg round" >
		<br style="clear:both; " >
	</div>

	<div id="thread" class="infobox boxshadow whitebox" >
		<h3>Pin Cushion with Thread Catcher</h3>
		<img src="img/acc/thread2.jpg" alt="" width="" class="right mediumimg round" >
		<p>This Pin Cushion with Thread Catcher is the perfect addition to your craft room! <strong>Store pins</strong> next to your sewing machine, iron, cutting table or couch and the bag is perfect for holding <strong>stray threads</strong>, scrap fabrics, <strong>crafting supplies</strong> and more. The loop inside keeps your <strong>small scissors</strong> in reach. </p>
		<img src="img/acc/thread1.jpg" alt="" width="" class="left smallimg round" >
		<p style="clear:left; " >I have two of these in my sewing room - one sits by my sewing machine and the other is on my cutting table. I love them!</p>
		<br style="clear:both; " >
	</div>

	<div id="tissue" class="infobox boxshadow whitebox" >
		<h3>Tissue Holder</h3>
		<img src="img/acc/tissue.jpg" alt="" width="" class="center largeimg round" >
		<p>Store your tissues in style in your purse, car, diaper bag, desk or nightstand. This <strong>soft tissue holder</strong> holds a healthy stack of full-sized tissues, is easy to load, lays flat so it will fit in your <strong>glove box</strong> and is so darn pretty.</p>
		<br style="clear:both; " >
	</div>

</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>