<?php
  //sets the proper active tab on main nav
  $products = 'active';

  //insert page head and header
  $page_title = 'Children | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="children.php" ><h1 class="letterpress boxshadow curlup" >Ch<span class="orange" >i</span>ldr<span class="orange" >e</span>n</h1></a>
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

<div id="content" >

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="CATEGORY" >CATEGORY</h2></div>

	<div id="SUBCATEGORY" class="infobox" > <!--Call it class="short" if no pics and doesn't need a min-height-->
		<h3>TITLE</h3>
		<img src="img/kids/" alt="" width="" class="right round" >
		<p>Text</p>
	</div>

<hr class="fade" />
<div class="headerbox" ><h2 class="round letterpress" id="CATEGORY" >CATEGORY 2</h2></div>

	<div id="SUBCATEGORY" class="infobox" >
		<h3>TITLE</h3>
		<img src="img/kids/" alt="" width="" class="right round" >
		<p>Text</p>
	</div>
	
</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>