<?php
  require_once('includes/connectkmdemail.php');

  //sets the proper active tab on main nav
  $contact = 'active';

  //insert page head and header
  $page_title = 'Unsubscribe | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="unsubscribe.php" ><h1 class="letterpress boxshadow curlup" >Uns<span class="orange" >u</span>bscr<span class="orange" >i</span>b<span class="orange" >e</span></h1></a>
	</div>

<?php
  require_once('templates/sidebar.php');
?>

<div id="content">

	<form class="realform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="unsubscribe" >
    <fieldset>   
<?php
if (isset($_POST['submit'])) {
	$output_form = false;
    	$email = $_POST['email'];
	
    	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

	$query = "DELETE FROM newsletter WHERE email = '$email'";

	mysqli_query($dbc, $query) or die('Error querying database');

	echo 'Your email: ' . $email . ' has been removed!';

	mysqli_close($dbc);
}
else {
	$output_form = true;
}

if ($output_form) {
?>
    	<p>Want to unsubcribe from my newsletter? I'll be sad to see you go! Maybe we can be friends again later. Enter your email into the box below and click submit to be removed from my mailing list.    </p>     
    	<label for="email" >Email:</label>
    	<input class="styleme" name="email" id="email" type="email" />

	<br style="clear:both; " > 
	<div class="buttons" >           
    	<input class="shinyButton orangeButton" id="submit" name="submit" type="submit" value="Submit" /> <input class="shinyButton orangeButton" id="myreset" type="reset" value="Start over" />
 	</div>
<?php
}
?>

</fieldset>   
</form>

	
</div><!--content-->

</div> <!--wrapper-->
<?php
  require_once('templates/footer.php');
?>