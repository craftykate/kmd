<?php
  //sets the proper active tab on main nav
  $press = 'active';

  //insert page head and header
  $page_title = 'Press | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="press.php" ><h1 class="letterpress boxshadow curlup" >Pr<span class="orange" >e</span>ss</h1></a>
		<ul id="navbar" >
			<li><a href="#books" >Books</a>
				<ul class="boxshadow" >
					<li><a href="#craftcorps" >Craft Corps</a></li>
					<li><a href="#terrifictees" >Terrific Tees</a></li>
				</ul>
			</li>
			<li><a href="#videos" >Videos</a>
				<ul class="boxshadow" >
					<li><a href="#threadbanger" >ThreadBanger</a></li>
					<li><a href="#cabletutorial" >Knitting Tutorial</a></li>
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
		<img src="img/FOLDER/" alt="" width="" class="right round" >
		<p></p>
		<br style="clear:both">
	</div>
-->

<div id="content" >

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="books" >Books</h2></div>

	<div id="craftcorps" class="infobox boxshadow" > 
		<h3>Craft Corps</h3>
		<img src="img/press/corps.jpg" alt="" class="left smallimg round" >
		<p><strong>I'm in Craft Corps!</strong> Bestselling author and TV show host Vickie Howell wrote <a title="Craft Corps on Amazon" href="http://www.amazon.com/Craft-Corps-Celebrating-Creative-Community/dp/1600594689/ref=sr_1_1?ie=UTF8&amp;s=books&amp;qid=1281215238&amp;sr=8-1" target="_blank">Craft Corps</a>, a book about the community of crafters - and I'm in it! Her extraordinary new collection features interviews with 30 successful professional craftspeople as well as profiles of a diverse group of approximately 60 amateurs (like me!) And every interview includes a photo of the subject, plus a peek at their work or their studio. Check out page 160 to see my profile and pretty mug!</p>
		<br style="clear:both;">
	</div>

	<div id="terrifictees" class="infobox boxshadow" >
		<h3>Terrific Tees</h3>
		<img src="img/press/tees.jpg" alt="" class="left smallimg round" >
		<p><strong>I have a quilt in a book!</strong> <a title="Terrific Tees on Amazon" href="http://www.amazon.com/Terrific-Tees-Believe-T-Shirt-Quilt/dp/1571204601/ref=sr_1_1?ie=UTF8&amp;s=books&amp;qid=1218428229&amp;sr=8-1" target="_blank">Terrific Tees: I Can't Believe It's a T-Shirt Quilt!</a> by Roberta DeLuz is a great book with all the information you need to make beautiful and unique quilts with t-shirts - and includes a full-page picture of one of my quilts! It is a darling wall-hanging I made out of the little shirts my boys wore when they were newborns. It is so exciting to have one of my pieces in a book!</p>
		<br style="clear:both">
	</div>

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="videos" >Videos</h2></div>

	<div id="threadbanger" class="infobox boxshadow" >
		<h3>ThreadBanger</h3>
		<p><a title="http://www.threadbanger.com/" href="http://www.threadbanger.com/">ThreadBanger</a> is a popular internet DIY show (which was featured on the <a title="http://www.rachaelrayshow.com/" href="http://www.rachaelrayshow.com/">Rachael Ray</a> show September '07!) and can be seen on <a title="http://www.threadbanger.com/" href="http://www.threadbanger.com/">their website</a>, or on iTunes, to name a few places. They are fun and young and hip and do great shows on all kinds of DIY fashion projects, they show segments on different craft shows around the country and are basically just a kick-ass place to learn how to do it yourself.</p>
<p style="text-align: justify;">In October '07 the awesome folks at ThreadBanger came over to my "design studio" (okay, my living room) and <strong>filmed me doing a segment on how to sew with zippers.</strong> If you like to sew but are afraid of sewing with zippers watch this episode! I detail a very easy way to sew zippers in a seamline - for a skirt, for instance. Watch the episode here! (If you want to jump ahead my segment starts at 2:30)</p>
<iframe src="http://www.youtube.com/embed/0zuOFD9izBw" frameborder="0" width="550" height="460"></iframe>
<p class="clear" style="text-align: justify;">In December '07 I went to the <strong>San Francisco <a title="http://www.bazaarbizarre.org/" href="http://www.bazaarbizarre.org/">Bazaar Bizarre</a></strong> and filmed interviews and clips with some of the artists. A portion of my video made it in January's ThreadBanger episode which you can watch below (skip to 4:00 for the segment).</p>
<iframe src="http://www.youtube.com/embed/38aNK-tUbnQ" frameborder="0" width="550" height="460"></iframe>
<p class="clear" style="text-align: justify;">Check out my <a href="http://youtu.be/cuNgH373Jtw">full-length segment here</a> with interviews from more amazing artists! (3.5 minutes long)</p>
<p class="clear">And finally, you can see in <a href="http://youtu.be/N0jzUf-0jlo" target="_blank">this episode</a> how I won "the most cookies." (You can skip to 1:45 to cut right to the chase.)</p>
		<br style="clear:both;">
	</div>
	
	<div id="cabletutorial" class="infobox boxshadow" >
		<h3>Cable Knitting Tutorial</h3>
		<p>Here's a short video showing just how easy it is to knit a cable pattern. No cable needle needed, I just used a spare double-pointed needle. This little video has over 90,000 views! So grateful for all the wonderful emails I get from people about how helpful it has been.

<iframe src="http://www.youtube.com/embed/NJQS-XB20SQ" frameborder="0" width="550" height="460"></iframe></p>
		<br style="clear:both">
	</div>

</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>