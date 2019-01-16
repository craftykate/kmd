<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');

  //insert page head and header
  $page_title = 'Contents of KMD Email Form';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >

	<form class="realform" method="post" action="" id="lookupform" >
    	<fieldset>    
	<legend class="round" >Contents of KMD Email Form</legend>

<?php

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to MySQL server.');

	$query = "SELECT * FROM email_form ORDER BY date DESC";
	$result = mysqli_query($dbc, $query) or die('Error querying database.');

	while($row = mysqli_fetch_array($result)) {
		echo '<p><strong>Name: </strong>' . $row['name'] . '<br/>';
		echo '<strong>Email: </strong>' . $row['email'] . '<br/>';
		echo '<strong>Date added: </strong>' . $row['date'] . '<br/>';
		echo '<strong>Heard about you through: </strong>' . $row['hear'] . '<br/>';
		echo '<strong>Newsletter sign up? </strong>' . $row['newsletter'] . '<br/>';
		echo '<strong>Message: </strong><br/>' . $row['message'] . '<br/>';
		echo '<hr/></p>';
	}

	mysqli_close($dbc);
?>

	</fieldset>   
	</form>
	
</div><!--content-->

</div> <!--wrapper-->


</body></html>