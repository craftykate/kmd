<?php
  require_once('includes/connectkmdemail.php');

  //sets the proper active tab on main nav
  $contact = 'active';

  //insert page head and header
  $page_title = 'Contact | ';
  require_once('templates/head.php');
?>

<div id="wrapper" >
	<div id="titlebox" >
		<a href="contact.php" ><h1 class="letterpress boxshadow curlup" >C<span class="orange" >o</span>nt<span class="orange" >a</span>ct M<span class="orange" >e</span></h1></a>
	</div>

<?php
  require_once('templates/sidebar.php');
?>

<div id="content" style="left:0; " >

	<form class="realform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="contactkmd" >
    <fieldset>    

<?php

    $human = $_POST['human'];
    $noemail = 'I will never share your email address!';
if (isset($_GET['message'])) {
    $message = $_GET['message'];
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = $_POST['name'];
    $to = 'katemcfauldesigns@gmail.com'; 
    $subject = 'Kate McFaul Designs Contact Form';
    $newsletter = $_POST['newsletter'];
    $hear = $_POST['hear'];
    $output_form = false;
    $nonum = '';
    $noname = '';
			
    $body = " From: $name\n E-Mail: $email\n Message:\n $message\n\n Found me by: $hear\n Signed up for newsletter? $newsletter";

$headers = 'From: '.$name."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

    
  if ($human != '4'){
	$nonum = 'Uh oh, are you human? Hint: answer is 4.';
	$output_form = true;
  }

  if (empty($name)){
	$noname = 'I need to know what to call you! Please enter your name.';
	$output_form = true;
  }

  if (empty($email)){
	$noemail = 'Please enter your email. I promise I wont share it with anyone.';
	$output_form = true;
  }

  if ((!empty($name)) && (!empty($email)) && ($human == '4')) {
	if ($newsletter == 'y') {
		$newsletter = 'Yes';
	}
	else {
		$newsletter = 'No';
	}
	 if (mail ($to, $subject, $body, $headers)) {
		echo 'Thank you for your message ' . $name . '! I will contact you shortly.<br/><br/>';
		echo 'You wrote: <br/><br/>';
		echo '<p><strong>Name:</strong> ' . $name . '<br/>';
		echo '<strong>Email:</strong> ' . $email . '</p>';
		echo '<p><strong>Your Message:</strong> ' . $message . '<br/>';
		echo '<strong>How you heard about me:</strong> ' . $hear . '<br/>';
		echo '<strong>Did you sign up for my newsletter?:</strong> ' . $newsletter . '</p>';

	} 
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

	$query = "INSERT INTO email_form (date, name, email, message, hear, newsletter) " .
"VALUES (NOW(), '$name', '$email', '$message', '$hear', '$newsletter')";

	$result = mysqli_query($dbc, $query) or die('Error querying database.');

	mysqli_close($dbc);

	if ($newsletter == 'Yes') {
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

		$query = "INSERT INTO newsletter (date, name, email) " .
"VALUES (NOW(), '$name', '$email')";

		$result = mysqli_query($dbc, $query) or die('Error querying database.');

		mysqli_close($dbc);
	}
  }
}

else {
	$output_form = true;
}

if ($output_form) {
	?>

<label for="name" >*Name:<span class="oops"><?php echo '<br/>' . $noname; ?></span></label>
    <input class="styleme" name="name" id="name" value="<?php echo $name; ?>"/>

            <br style="clear:both;">
    <label for="email" >*Email:<span class="oops"><?php echo '<br/>' . $noemail; ?></span></label>
    <input class="styleme" name="email" id="email" type="email" value="<?php echo $email; ?>"/>
            
            <br style="clear:both;">
    <label for="message" >Your Message:</label>
    <textarea class="big" name="message" id="message" ><?php echo $message; ?></textarea>

<br style="clear:both; " >
	<label for="hear" >It would be wonderful to know how you found me!</label>
    <textarea name="hear" id="hear" placeholder="From a friend, internet search, etc." ><?php echo $hear; ?></textarea>

<br style="clear:both; " >
	<label>Want to join my newsletter? I've never put one out yet, but who knows.</label>
	<span class="radio" >
	<input type="radio" value="y" name="newsletter" checked/>Yes<br>
	<input type="radio" value="n" name="newsletter" />No
	</span>

<br style="clear:both; " >
	<label for="human" >*Are you human? What is 2+2?<span class="oops"><?php echo '<br/>' . $nonum; ?></span></label>
	<input class="styleme" name="human" id="human" required="required" value="<?php echo $human; ?>"/><br>

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