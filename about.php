<?php
  //sets the proper active tab on main nav
  $about = 'active';

  //insert page head and header
  $page_title = 'About | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="about.php" ><h1 class="letterpress boxshadow curlup" >Ab<span class="orange" >o</span>ut M<span class="orange" >e</span></h1></a>
	</div>

<?php
  require_once('templates/sidebar.php');
?>

<div id="content" >

	<div class="infobox boxshadow" > 
		<img src="img/about/boys.jpg" alt="" width="" class="left smallimg round" >
		<p>I'm a mama to two very energetic and happy little boys who never cease to amaze me with their mischief. I'm very creative and I love to sew. I sewed up my first bag in high school and haven't been able to shake the sewing bug since.</p>
		<img src="img/about/booth.png" alt="" width="" class="right smallimg round" >
		<p>Due to a long-standing obsession with bags, an intense love of sewing and a deeply ingrained creative streak, it was inevitable that I would make my own diaper bag with matching purse after the birth of my first son. A friend begged for her own diaper bag and word spread like wildfire that I was making custom-made, high-quality bags. It wasn't too long before I found myself with my very own sewing business based out of my home. Every time I made something for myself like a baby sling or a new purse I'd suddenly have more orders than I could handle!</p>
		<img src="img/about/fam.jpg" alt="" width="" class="left smallimg round" >
		<p>One year, one of my favorite crafting podcasts, ThreadBanger, came to my house to film a few segments on how to sew with zippers. I have a popular knitting video, a quilt in a quilt book, and my profile is in Vickie Howell's book, Craft Corps. It has all been very fun and exciting!</p>
   <br style="clear:both"/>
	</div>
	
</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>