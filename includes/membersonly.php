<?php
  //Make sure user is logged in before going any further
  if (!isset($_SESSION['user_id'])) {
          $url = 'index.php';
          echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    exit();
  }

?>