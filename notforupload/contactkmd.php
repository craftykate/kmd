<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');

  //insert page head and header
  $page_title = 'Contact KMD Subscribers';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >

	<form class="realform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="newsletter" >
    	<fieldset>    
	<legend class="round" >Contact KMD Subscribers for Newsletter</legend>

<?php
if (isset($_POST['submit'])) {
	$from = 'katemcfauldesigns@gmail.com';
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$output_form = false;
	$oops = '';

  if ((empty($subject)) && (empty($message))) {
	$oops = 'You forgot the email subject and body message.';
	$output_form = true;
  }

  if ((empty($subject)) && (!empty($message))) {
	$oops = 'You forgot the email subject.';
	$output_form = true;
  }

  if ((!empty($subject)) && (empty($message))) {
	$oops = 'You forgot the body message.';
	$output_form = true;
  }

  if ((!empty($subject)) && (!empty($message))) {
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

	$query = "SELECT * FROM newsletter";
	$result = mysqli_query($dbc, $query) or die('Error querying database.');

	while($row = mysqli_fetch_array($result)) {
		$name = $row['name'];

		$msg = "Dear $name, \n\n $message";

		$to = $row['email'];

		mail($to, $subject, $msg, 'From:' . $from);

		echo 'Email sent to: ' . $to . '<br />';

	}

	mysqli_close($dbc);

  }
}
else {
	$output_form = true;
}

if ($output_form) {

	?><p><?php echo $oops; ?></p>
	<label for="subject" >Subject:</label>
    	<input class="styleme" name="subject" id="subject" value="<?php echo $subject; ?>" />
            
    	<label for="message" >Message:</label>
    	<textarea class="big" name="message" id="message" ><?php echo $message; ?></textarea>

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


</body></html>