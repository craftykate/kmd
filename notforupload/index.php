<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');

  //insert page head and header
  $page_title = "Kate's Private Page";
  require_once('../templates/privatehead.php');

?>

<div id="content" >

<div class="infobox boxshadow" >
		<h3>Private Pages</h3>

<?php
    if (isset($_SESSION['username'])) {
?>
		<ul>
		<li>Products Database:</li>
		<li><a href="addproducts.php" >Add Products</a> Add products to database of available products</li>
		<li><a href="kmdproductslookup.php" >Look Up Products</a> Look up available products on the products database</li>
		<li><a href="addcategory.php" >Add Category</a> Add a category to the category table</li>
		<li><a href="kmdcategorieslookup.php" >Look Up Categories</a> Look up all info regarding categoires in the database</li>
		<li>Email Form Database:</li>
		<li><a href="kmdemailformlookup.php" >Email Form</a> Examine the contents of the email form from KMD</li>
		<li><a href="contactkmd.php" >Send Newsletter</a> Contact KMD customers for Newsletter</li>
		<li><a href="removeemail.php" >Delete from Newsletter</a> Select customers for deletion from newsletter list</li>
		</ul>
		<br style="clear:both; " >
	</div>
<?php
}

else {
  //include the log in script
  require_once('../includes/login.php');
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="realform">
  <fieldset>
    <legend>Log In</legend>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" class="styleme" />

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" class="styleme" />
      <div class="buttons" >           
        <input class="shinyButton orangeButton" id="submit" name="submit" type="submit" value="Submit" /> <input class="shinyButton orangeButton" id="reset" type="reset" value="Start over" />
	  </div>
  </fieldset>
</form>
<?php
}
?>
</div><!--content-->

</div> <!--wrapper-->

</body></html>