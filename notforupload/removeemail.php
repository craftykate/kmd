<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');

  //insert page head and header
  $page_title = 'Remove From KMD Newsletter';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >

	<form class="realform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="removeemail" >
    	<fieldset>    
	<legend class="round" >Remove Customers from Newsletter</legend>

<?php

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

if (isset($_POST['submit'])) {
    foreach ($_POST['todelete'] as $delete_id) {
	$query = "DELETE FROM newsletter WHERE id = $delete_id";
	mysqli_query($dbc, $query) or die('Error querying database.');
    }

    echo 'Customer(s) removed. <br />';
}

	$query = "SELECT * FROM newsletter ORDER BY email ASC";
	$result = mysqli_query($dbc, $query) or die('Error querying database.');

	while($row = mysqli_fetch_array($result)) {
		echo '<input type="checkbox" value="' . $row['id'] . '" name="todelete[]" />';
		echo $row['name'];
		echo ' ' . $row['email'];
		echo '<br/>';

	}

	mysqli_close($dbc);
?>

	<br style="clear:both; " > 
	<div class="buttons" >           
    	<input class="shinyButton orangeButton" id="submit" name="submit" type="submit" value="Remove" />
	</div>
	</fieldset>   
	</form>
	
</div><!--content-->

</div> <!--wrapper-->


</body></html>