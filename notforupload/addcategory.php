<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');
  	require_once('../includes/variableuploadproducts.php');

  //insert page head and header
  $page_title = 'Add Categories to Category Table';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >

	<form class="realform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    	<fieldset>    
	<legend class="round" >Add Categories to Category Table</legend>

<?php
  if (isset($_POST['submit'])) {
    $singular_name = $_POST['singular_name'];
    $plural_name = $_POST['plural_name'];

    if (!empty($singular_name) && !empty($plural_name)) {
      //make sure those names aren't already in the database
      $query = "SELECT * FROM product_categories WHERE singular_name = '$singular_name' OR plural_name = '$plural_name'";

      $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');
      $data = mysqli_query($dbc1, $query);
      if (mysqli_num_rows($data) == 0) {
        //the category name is unique so insert data into the database
        $query = "INSERT INTO product_categories VALUES (0, '$singular_name', '$plural_name')";
        mysqli_query($dbc1, $query);
  
        $query3 = "SELECT * FROM product_categories WHERE singular_name = '" . $singular_name . "'";
        $data3 = mysqli_query($dbc1, $query3);
        $row = mysqli_fetch_array($data3);

        // Confirm success with the user
        echo 'You added: <br/><br/>';
        echo '<p><strong>Singular name:</strong> ' . $singular_name . '<br/>';
        echo '<strong>Plural name:</strong> ' . $plural_name . '<br/>';
        echo '<strong>Category ID:</strong> ' . $row['category_id'] . '</p>';
        echo 'Wanna go again?<br/><br/>';

        // Clear the name data to clear the form
        $singular_name = "";
        $plural_name = "";

        mysqli_close($dbc1);
      }
      else {
        echo 'At least one of those names are in use already!';
      }
    }
    else {
      echo '<p class="error">Please enter all required info.</p>';
    }
  }
?>

	<label for="name" >Singular Name of Category:</label>
    <input class="styleme" name="singular_name" id="singular_name" placeholder="i.e. Vagabond Bag" value="<?php if (!empty($singular_name)) echo $singular_name; ?>"/>

	<label for="name" >Plural name of Category:</label>
    <input class="styleme" name="plural_name" id="plural_name" placeholder="i.e. Vagabond Bags" value="<?php if (!empty($plural_name)) echo $plural_name; ?>"/>
 
	<br style="clear:both; " > 
	<div class="buttons" >           
    	<input class="shinyButton orangeButton" id="submit" name="submit" type="submit" value="Submit" /> <input class="shinyButton orangeButton" id="myreset" type="reset" value="Start over" />
	</div>

	</fieldset>   
	</form>
	
</div><!--content-->

</div> <!--wrapper-->


</body></html>