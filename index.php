<?php
  //sets the proper active tab on main nav
  $home = 'active';

  //insert page head and header
  $page_title = '';
  require_once('templates/head.php');
?>

  <div id="wrapper" >

<?php
  require_once('templates/sidebar.php');
?>

<div id="content" >

<div id="homeimg" ><img src="img/home/websiteheader.jpg" alt="" usemap="#headermap" ><map name="headermap" ><area coords="11,11,157,157" shape="rect" href="accessories.php#coffee" title="Jump to Coffee Sleeves" alt="" ></area><area shape="rect" coords="328,11,474,157" href="bags.php#clutch" title="Jump to Clutch Wallets" alt="" ></area><area shape="rect" coords="487,10,633,158" href="accessories.php#apron" title="Jump to Aprons" alt="" ></area><area shape="rect" coords="644,11,791,158" href="about.php" title="Jump to About Me" alt="" ></area><area shape="rect" coords="804,11,948,157" href="bags.php#farmer" title="Jump to Farmer's Market Bags" alt="" ></area><area shape="rect" coords="170,169,315,315" href="bags.php#fave" title="Jump to Favorite Things Bag" alt="" ></area><area shape="rect" coords="328,169,474,315" href="bags.php#super" title="Jump to Super Market Bags" alt="" ></area><area shape="rect" coords="486,169,632,314" href="accessories.php#sandwich" title="Jump to Sandwich Bags" alt="" ></area><area shape="rect" coords="645,169,791,314" href="accessories.php#thread" title="Jump to Thread Catchers" alt="" ></area><area shape="rect" coords="804,167,949,314" href="bags.php#vagabond" title="Jump to Vagabond Bag" alt="" ></area></map></div>

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="purses" >Kate McFaul Designs</h2><h3>Quality Handmade Stuff</h3></div>

<div class="blockholder" >

<div class="blocktable" >
<div class="navblock firstwide" >
<div class="blockbackground" ><div class="corner" ><h1><a href="products.php" >Products</a></h1></div><a href="products.php" ><img src="img/bags/clutch2.jpg" alt="" ></a></div>
<a href="products.php" ><p><strong>What makes my products unique:</strong> My designs are beautiful, durable and smart. My bags are gorgeous but also made for daily use – and abuse! Pockets are where you need them, bottoms are reinforced, stitches are beautifully in place – my designs have all been carefully thought out to give you a well made and durable item that is loaded with style. Click here to read more.</p></a>
</div>
</div>

<div class="blocktable" >
<div class="navblock lastwide" >
<div class="blockbackground" ><div class="corner" ><h1><a href="webdesign.php" >Web Design</a></h1></div><a href="webdesign.php" ><img src="img/webdesign/isuitekmd.jpg" alt="" ></a></div>
<a href="webdesign.php" ><p><strong>I build clean websites with solid code.</strong> I pay lots of attention to usability and little bitty details you probably wouldn’t notice, but add to an overall quality of the site. Great navigation in a web site is very important. Your viewers need to know where they are, where they can go and how to get back. Given that you probably have mere seconds to grab your viewers you need your site to be clear and well made. Click here to read more.</p></a>
</div>
</div>

</div><!--blockholder-->

<div class="blockholder" >

<div class="blocktable" >
<div class="navblock firstnarrow" >
<div class="blockbackground" ><div class="corner" ><h1><a href="press.php" >Press</a></h1></div><a href="press.php" ><img src="img/press/corps.jpg" alt="" ></a></div>
<a href="press.php" ><p><strong>I've been fortunate enough to have been in a few TV shows and a few craft books!</strong> Click here to see my videos and what books I've been in.</p></a>
</div>
</div>

<div class="blocktable" >
<div class="navblock middlenarrow" >
<div class="blockbackground" ><div class="corner" ><h1><a href="about.php" >About</a></h1></div><a href="about.php" ><img src="img/about/kate.jpg" alt="" ></a></div>
<a href="about.php" ><p><strong>I’m a mama to two very energetic and happy little boys</strong> who never cease to amaze me with their mischief. I’m very creative and I love to sew. I sewed up my first bag in high school and haven’t been able to shake the sewing bug since. Click here to read more about me.</p></a>
</div>
</div>

<div class="blocktable" >
<div class="navblock lastnarrow" >
<div class="blockbackground" ><div class="corner" ><h1><a href="contact.php" >Contact</a></h1></div><a href="contact.php" ><img src="img/home/contact.jpg" alt="" ></a></div>
<a href="contact.php" ><p><strong>Questions, comments, words of unending devotion and praise?</strong> Click here to contact me!</p></a>
</div>
</div>

</div><!--blockholder-->

</div><!--content-->

</div> <!--wrapper-->

<?php
  require_once('templates/footer.php');
?>