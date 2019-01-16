<?php
  //include product database connection
  require_once('includes/connectkmdproducts.php');

  //sets the proper active tab on main nav
  $products = 'active';

  //insert page head and header
  $page_title = 'Bags | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="bags.php" ><h1 class="letterpress boxshadow curlup" >B<span class="orange" >a</span>gs</h1></a>
		<ul id="navbar" >
			<li><a href="#purses" >Purses and Totes</a>
				<ul class="boxshadow" >
					<li><a href="#vagabond" >Vagabond Bag</a></li>
					<li><a href="#fave" >Favorite Things Bag</a></li>
					<li><a href="#super" >Super Market Bag</a></li>
					<li><a href="#farmer" >Farmer's Market Bag</a></li>
					<li><a href="#maui" >Maui Bag</a></li>
					<li><a href="#library" >Library Tote</a></li>
					<li><a href="#quilted" >Quilted Canvas Purse</a></li>
				</ul>
			</li>
			<li><a href="#smallbags" >Smaller Bags</a>
				<ul class="boxshadow" >
					<li><a href="#clutch" >Clutch Wallet</a></li>
					<li><a href="#poochy" >Poochy Coin Pouch</a></li>
					<li><a href="#kindle" >Kindle Cover</a></li>
				</ul>
			</li>
		</ul>
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

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="purses" >Purses and Totes</h2></div>

	<div id="vagabond" class="infobox boxshadow" ><!--Call it class="short" if no pics and doesn't need a min-height-->
		<div><h3 style="display: inline;">The Vagabond Bag</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('vagabond'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/vagabond.jpg" alt="The Vagabond Bag" width="" class="largeimg right round" >
		<p><strong>This isn't a purse, it's a BAG.</strong> This bag ate your purse and is still hungry. </p>
		<p>This is a "Flying to Hawaii and my suitcase is filled with shoes" bag. This is a "Skipping town for the weekend and don't want my boyfriend to know how much stuff I'm bringing" bag. This is a "Leaving the house with twin babies and I'm ready for anything" bag. </p>
		<p><strong>Features:</strong> Zippered top, padded strap, 8 inner pockets, extra large zippered outer pocket (the whole front panel is a pocket! The clever positioning of the zipper mimics the lines of the pleats radiating from the top and let you access the pocket from the side - in the natural direction your hand is going in while wearing the bag), made from all high-quality 100% cotton fabrics.</p>
		<p><strong>Background:</strong> To me, this is like the ultimate hobo bag and the perfect bag to to travel with - thus, The Vagabond. It's the hobo bag on crack! I designed this bag to be the <strong>perfect travel bag</strong> for my trips to New York - big enough to carry everything I need on the plane and have just one carry-on suitcase, big enough to bring around with me on long walks around the city and hold a sweater, water, snacks, and all my lovely purchases I pick up on the way, and yet still be gorgeous, soft, and organized. And, of course, a zippered top AND zippered outer pocket to keep out curious fingers on the subway. And if I had a dollar for every time I stopped short in the car and my purse flew off the front seat and onto the floor I'd be a rich woman. Now my stuff doesn't fly out everywhere, too! The pleats on the top let this bag <strong>scrunch down in a soft gather</strong> when you don't have a lot in it, but still keeps its clean, round shape. Those same pleats also let the bag expand <i>enormously</i> giving this bag a <strong>deceptive roominess</strong>. When full it has an estimated 48" circumference! </p>
		<p>Approximate dimensions: ~18" wide (opening is 14", pleats expand the body to 18+"), ~11" tall, 6.5" wide base</p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '1';
	//pick a unique name for drop down script
	$droplink = 'vaglink';
	//include alt description for pin it button
	$alttag = 'The Vagabond Bag';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

	<div id="fave" class="infobox boxshadow" >
		<div><h3 style="display: inline">Favorite Things Bag</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('fave'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/fave1.jpg" alt="The Favorite Things Bag" class="smallimg right round" >
		<p>All my <strong>Favorite Things</strong> in one bag!</p>
		<p>This is my favorite purse yet packed with all my favorite features! The <strong>folded canvas straps</strong> are sturdy, comfortable and don't slip (and they're awfully cute), the <strong>outer pocket</strong> and three roomy <strong>inner pockets</strong> keep all essentials organized, the <strong>canvas base</strong> is sturdy and helps the bag keep its shape, and the <strong>zipper top</strong> fully encloses the bag, keeping everything safe. It's a smaller bag, but its <strong>wide base</strong> lets this purse hold a lot.
		<img src="img/bags/fave2.jpg" alt="The Favorite Things Bag" class="mediumimg left round" ></p>
		<p style="clear:right; " >Its impeccable design and careful construction make this a small bag with a <strong>big personality!</strong></p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '5';
	//pick a unique name for drop down script
	$droplink = 'favelink';
	//include alt description for pin it button
	$alttag = 'The Favorite Things Bag';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>
	
	<div id="super" class="infobox boxshadow" >
		<div><h3 style="display: inline">Super Market Bag</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('super'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/super2.jpg" alt="The Super Market Bag" width="" class="smallimg left round" >
		<p>What should you take to the supermarket? Why, the <strong>Super Market Bag</strong>, of course!</p>
		<p>Modeled after a plastic grocery bag, this looks and acts like the real thing, except it's reusable, more durable, lined with gorgeous accent fabrics, comes in its own little <strong>carrying case</strong> and is much prettier.</p> 
		<img src="img/bags/super1.jpg" alt="The Super Market Bag" width="" class="mediumimg right round" >
		<p style="clear:left; " >I keep at least one of these in my purse for shopping trips and whenever I need an <strong>extra bag</strong>. The carrying case keeps it nice and tidy in my bag. I cut the pattern for this bag so there is only a <strong>tiny bit of leftover fabric</strong>, making this one of the "greenest" bags around!</p>
		<img src="img/bags/super3.jpg" alt="The Super Market Bag" width="" class="smallimg left round" >
		<p style="clear:right; " ><strong>Makes a great gift!</strong> </p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '6';
	//pick a unique name for drop down script
	$droplink = 'superlink';
	//include alt description for pin it button
	$alttag = 'The Super Market Bag';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

	<div id="farmer" class="infobox boxshadow" >
		<div><h3 style="display: inline">Farmer's Market Bag</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('farmer'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/farmer2.jpg" alt="The Farmer's Market Bag" width="" class="left smallimg round" >
		<p><strong>Go green</strong> with this reusable grocery bag! The Farmer's Market Bag is roomy, has a wide base, holds a lot of groceries and the handles are long enough to throw over your shoulder.</p> 
		<img src="img/bags/farmer3.jpg" alt="The Farmer's Market Bag" width="" class="right mediumimg round" >
		<p style="clear:left; " >Whether at the farmer's market, the <strong>grocery store</strong>, or anywhere else with disposable bags, go green and skip the paper and plastic bags. <strong>Get two</strong> - one to carry with you and one for your car!</p>
		<img src="img/bags/farmer1.jpg" alt="The Farmer's Market Bag" width="" class="left smallimg round" > 
		<p>Lined in denim, they are strong and durable, but not bulky. These versatile guys aren't limited to groceries either - use it as a <strong>hand bag or beach bag</strong> or any kind of bag you need!</p>
		<img src="img/bags/farmer4.jpg" alt="The Farmer's Market Bag" width="" class="right mediumimg round" >
		<p style="clear:right; " >The Farmer's Market Bag folds up small to make it easy to carry around.</p>		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '11';
	//pick a unique name for drop down script
	$droplink = 'farmlink';
	//include alt description for pin it button
	$alttag = 'The Farmer\'s Market Bag';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

	<div id="maui" class="infobox boxshadow" >
		<div><h3 style="display: inline">Maui Bag</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('maui'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/maui3.jpg" alt="The Maui Bag" width="" class="left mediumimg round" >
		<p>The Maui Bag is great as a diaper bag or a shoulder bag - and makes a <strong>great gift for a new mom!</strong> Who says a diaper bag can't be stylish, beautiful, durable AND functional?</p> 
		<img src="img/bags/maui1.jpg" alt="The Maui Bag" width="" class="mediumimg right round" >
		<p style="clear:left; " ><strong>Six outer pockets</strong> keep your essentials (mail, sippy cups, pacifiers, pens, cell phone, etc.) within easy reach.</p>
		<img src="img/bags/maui2.jpg" alt="The Maui Bag" width="" class="mediumimg right round" style="clear:right; " >
		<p>I have used a version of this bag for years. Whether we're going to the park, the pool, to school, or on a playdate, this bag is perfect!</p>
		<p>The pockets and the bag are lined and the straps are padded for comfort.</p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '7';
	//pick a unique name for drop down script
	$droplink = 'mauilink';
	//include alt description for pin it button
	$alttag = 'The Maui Bag';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

	<div id="library" class="infobox boxshadow" >
		<div><h3 style="display: inline">Library Tote</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('library'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/library3.jpg" alt="The Library Tote" width="" class="mediumimg right round" >
		<p>This is a beautiful style of bag. It's slim but roomy, it's soft but sturdy, it's flexible yet structured. It looks like a purse, <strong>acts like a handbag</strong>.</p>
		<p>The design of this bag is divine. I carefully <strong>patchwork</strong> the outside fabrics and I love the stripe down the side. It's a bit unexpected, a touch of glamorous.</p>
		<img src="img/bags/library2.jpg" alt="The Library Tote" width="" class="left smallimg round" > 
		<img src="img/bags/library1.jpg" alt="The Library Tote" width="" class="right smallimg round" >
		<p style="clear:left; " >It's a versatile little bag. Carry home your library books, use it as your purse for the office, bring it <strong>out on the town</strong> at night. </p>
		<p style="clear:left; " >I call this a Library Tote because I imagine these lovely fabrics with this scrumptious design <strong>nestled next to a stack of books</strong>, its owner sipping coffee and scribbling notes before heading out for the night with friends.</p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '4';
	//pick a unique name for drop down script
	$droplink = 'liblink';
	//include alt description for pin it button
	$alttag = 'The Library Tote';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

	<div id="quilted" class="infobox boxshadow" >
		<div><h3 style="display: inline">Quilted Canvas Purse</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('quilted'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/quilted1.jpg" alt="The Quilted Canvas Bag" width="" class="left mediumimg round" >
		<p>The <strong>stitches really shine</strong> in this beautiful bag. Made with one layer of canvas and a double layer of cotton around the bottom, this lightweight bag is sturdy enough to use as an every day purse, big enough to hold magazines, your wallet, keys, cell phone etc, light enough to fold up small and <strong>gorgeous enough to make a statement</strong>.</p> 
		<img src="img/bags/quilted2.jpg" alt="The Quilted Canvas Bag" width="" class="smallimg right round" >
		<p style="clear:right; " >I wanted to make a bag where the <strong>stitches were the focal point</strong> and the fabric was more of an accent. Canvas was the perfect backdrop for the stitches, which meander through and highlight the coordinating fabric perfectly.</p>
		<img src="img/bags/quilted3.jpg" alt="The Quilted Canvas Bag" width="" class="mediumimg right round" >
		<p style="clear:right; " >The inner pocket of the Quilted Canvas Purse is just the right size for your small essentials!</p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '8';
	//pick a unique name for drop down script
	$droplink = 'quiltlink';
	//include alt description for pin it button
	$alttag = 'The Quilted Canvas Bag';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="smallbags" >Smaller Bags</h2></div>

	<div id="clutch" class="infobox boxshadow" >
		<div><h3 style="display: inline">Clutch Wallet</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('clutch'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/clutch1.jpg" alt="The Clutch Wallet" width="" class="left smallimg round" >
		<p>It's a wallet <strong>small enough</strong> to carry in a little purse but also a clutch <strong>big enough</strong> to hold an iPod, cell phone, cash, credit cards and ID, lipstick, keys, etc. When I'm headed to the grocery store or to pick up my kids at school I often just grab my clutch, knowing that <strong>everything I need</strong> is already in it and I'll have something to put my keys in, as well. I slip my writs in the strap and go! Not only is it handy and functional, it's adorable, too, and it gets lots of comments!</p>
		<img src="img/bags/clutch2.jpg" alt="The Clutch Wallet" width="" class="right mediumimg round" > 
		<p style="clear:left; " >The zipper goes halfway down both sides so the top <strong>opens wide</strong> for easy access. Inside are <strong>six pockets</strong>: two credit card-sized pockets and one wide 5" pocket on each side.</p>
		<img src="img/bags/clutch3.jpg" alt="The Clutch Wallet" width="" class="left mediumimg round" > 
		<p style="clear:right; " >I <em>really</em> love this design. It's my favorite wallet!</p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '3';
	//pick a unique name for drop down script
	$droplink = 'clutchlink';
	//include alt description for pin it button
	$alttag = 'The Clutch Wallet';
	//include drop down script
	include('includes/availableproducts.php');
?>

	</div>

	<div id="poochy" class="infobox boxshadow" >
		<div><h3 style="display: inline">Poochy Coin Pouch</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('poochy'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/poochy1.jpg" alt="The Poochy Pouch" width="" class="center largeimg round" >
		<img src="img/bags/poochy2.jpg" alt="The Poochy Pouch" width="" class="left smallimg round" >
		<p>Find exact change quickly and easily with this <strong>fun and unique</strong> zippered pouch! <br><br>The Poochy Pouch is <strong>lightly padded</strong> to hold its shape but not bulky so it can be stuffed in a crowded bag. Its triangular shape lets it <strong>open wide</strong> so you can easily find exactly what you're looking for. </p>
		<img src="img/bags/poochy3.jpg" alt="The Poochy Pouch" width="" class="mediumimg right round" >
		<p style="clear:left; " >Store coins, extra dollars, lipstick, spare keys, or those little odds and ends you don't want wandering around at the bottom of your bag.</p>
		<p><strong>Makes a great gift!</strong></p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '9';
	//pick a unique name for drop down script
	$droplink = 'poochlink';
	//include alt description for pin it button
	$alttag = 'The Poochy Pouch';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

	<div id="kindle" class="infobox boxshadow" >
		<div><h3 style="display: inline">Kindle Cover</h3>
<div class="pinterest"><a href="javascript:selectPinImage('', ' by Kate McFaul Designs', true, document.getElementById('kindle'))"><img src="//assets.pinterest.com/images/PinExt.png" border="0" /></a></div></div>

		<img src="img/bags/kindle3.jpg" alt="The Kindle Cover" width="" class="right mediumimg round" >
		<p>The <strong>Kindle Cover</strong> has a great design - the zipper is on top you can put the cover in your bag and slip the Kindle <strong>in and out easily</strong> without needing to pull out the whole case and fuss with opening flaps and putting the case somewhere.</p>
		<p>The Kindle Cover is <strong>double padded</strong> with a layer of batting and canvas to keep the Kindle cozy and safe. </p>
		<img src="img/bags/kindle2.jpg" alt="The Kindle Cover" width="" class="left smallimg round" >
		<p style="clear:left; " >I love the look of hardbound books that have the fabric binding down the side and the Kindle Cover <strong>mimics this design</strong> with its own fabric stripe down the side. The contents just happen to be electronic, not paper!</p> 
		<img src="img/bags/kindle1.jpg" alt="The Kindle Cover" width="" class="right smallimg round" >
		<p>Use your case to <strong>prop up your Kindle!</strong> Fold under the top edge to prop it up.</p>
		<br style="clear:both; " >
<?php
 	//as in database. Use the look up categories form to find the right number
	$category = '10';
	//pick a unique name for drop down script
	$droplink = 'kindlelink';
	//include alt description for pin it button
	$alttag = 'The Kindle Cover';
	//include drop down script
	include('includes/availableproducts.php');
?>
	</div>

</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>