<?php

  //if the user is logged in, delete the session vars to log out
  session_start();

  if (isset($_SESSION['user_id'])) {
    //delete the session vars by clearing the $_SESSION array
    $_SESSION = array();
    //delete the session cookie by setting its expiration to an hour ago
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600);
    }
    //destroy the session
    session_destroy();
  }

  //delete the user id and username cookies by setting their expirations to an hour ago
  setcookie('user_id', '', time() - 3600);
  setcookie('username', '', time() - 3600);

  //redirect to homepage
  $url = '../private/index.php';
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>