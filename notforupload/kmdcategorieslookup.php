<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');

  //insert page head and header
  $page_title = 'Look Up Categories';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >

	<form class="realform" method="post" action="" >
    	<fieldset>    
	<legend class="round" >Look Up Categories</legend>

<?php
  $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');
  //look up category data from table
  $query = "SELECT * FROM product_categories ORDER BY singular_name ASC";
  $data = mysqli_query($dbc1, $query);
  while ($row = mysqli_fetch_array($data)) {
    echo 'singular_name: <strong>' . $row['singular_name'] . '</strong><br/>plural_name: <strong>' . $row['plural_name'] . '</strong><br/>category_id: <strong>' . $row['category_id'] . '</strong><br/><hr/><br/>';
  }

  mysqli_close($dbc1);
?>
</div><!--content-->

</div> <!--wrapper-->


</body></html>