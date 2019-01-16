<?php
  //sets the proper active tab on main nav
  $home = 'active';

  //insert page head and header
  $page_title = '';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="TITLE.php" ><h1 class="letterpress boxshadow curlup" >T<span class="orange" >I</span>TL<span class="orange" >E</span></h1></a>
		<ul id="navbar" >
			<li><a href="#" >CATEGORY</a>
				<ul class="boxshadow" >
					<li><a href="#" >SUBCATEGORY</a></li>
					<li><a href="#" >SUBCATEGORY</a></li>
				</ul>
			</li>
			<li><a href="#" >CATEGORY 2</a>
				<ul class="boxshadow" >
					<li><a href="#" >SUBCATEGORY</a></li>
					<li><a href="#" >SUBCATEGORY</a></li>
					<li><a href="#" >SUBCATEGORY</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
  require_once('templates/sidebar.php');
?>

<!--
	<div id="" class="infobox boxshadow" >
		<h3></h3>
		<img src="img/FOLDER/" alt="" width="" class="right round" >
		<p></p>
		<br style="clear:both">
	</div>
-->

<div id="content" >

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="CATEGORY" >CATEGORY</h2></div>

	<div id="SUBCATEGORY" class="infobox boxshadow" > <!--Call it class="short" if no pics and doesn't need a min-height-->
		<h3>TITLE</h3>
		<img src="img/FOLDER/" alt="" width="" class="right round" >
		<p>Text</p>
		<br style="clear:both">
	</div>

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="CATEGORY" >CATEGORY 2</h2></div>

	<div id="SUBCATEGORY" class="infobox boxshadow" >
		<h3>TITLE</h3>
		<img src="img/FOLDER/" alt="" width="" class="right round" >
		<p>Text</p>
		<br style="clear:both">
	</div>
	
</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>