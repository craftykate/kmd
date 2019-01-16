<?php
  //sets the proper active tab on main nav
  $web = 'active';

  //insert page head and header
  $page_title = 'Web Design | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="webdesign.php" ><h1 class="letterpress boxshadow curlup" >W<span class="orange" >e</span>b Des<span class="orange" >i</span>gn</h1></a>
	</div>

<?php
  require_once('templates/sidebar.php');
?>

<div id="content" >

	<div class="infobox boxshadow" >
		<h3 id="intro">I like clean code</h3>
		<p>I build <strong>clean websites with solid code.</strong> I pay lots of attention to <strong>usability</strong> and little bitty details you probably wouldn’t notice, but add to an overall quality of the site. Great navigation in a web site is very important. Your viewers need to know where they are, where they can go and how to get back. Given that you probably have <strong>mere seconds to grab your viewers</strong> you need your site to be clear and well made.</p>
		<p>I generally write code in <strong>HTML5</strong> and <strong>CSS3</strong>, which are the newest versions of HTML and CSS and backwards compatible with older browsers, as well as <strong>PHP/MySQL, Javascript</strong> and <strong>jQuery</strong>.</p>
		<p><strong>For lots more info, visit my web design site at <a href="http://katemcfaul.com">KateMcFaul.com</a></strong>
	</div>
	
</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>