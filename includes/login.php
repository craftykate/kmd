<?php
  //Clear the error message
  $oops = "";

  //If the user isn't logged in, try to log them in
  if (!isset($_SESSION['user_id'])) { //check if user is logged in
    if (isset($_POST['submit'])) { //if no, check if they've submitted log in data
      //connect to database
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      //grab user entered data
      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      if (!empty($user_username) && !empty($user_password)) {
        //look up username and password in database
        $query = "SELECT user_id, username FROM users WHERE username = '$user_username' AND password = SHA('$user_password')";
        $data = mysqli_query($dbc, $query);

        if (mysqli_num_rows($data) == 1) {
          //The log-in is okay so set the user ID and username cookies, and redirect to home page
          $row = mysqli_fetch_array($data);

          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['username'] = $row['username'];

          setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30)); //expires in 30 days
          setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30)); //expires in 30 days
          $url = 'index.php';
          echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
        }
        else {
          //Username and password are incorrect so set and error message
          $oops = 'Sorry, you must enter a valid username and password to log in.';
        }
      }
      else {
        //Username and password weren't entered so set an error message
        $oops = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }
?>
