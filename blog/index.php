<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');
  	require_once('../includes/variableuploadproducts.php');

  //insert page head and header
  $page_title = 'Blog';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >

</div><!--content-->

</div> <!--wrapper-->


</body></html>