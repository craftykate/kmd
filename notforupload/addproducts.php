<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');
  	require_once('../includes/variableuploadproducts.php');

  //insert page head and header
  $page_title = 'Add Products to Database';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >

	<form enctype="multipart/form-data" class="realform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="newsletter" >
	<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo KMD_MAXFILESIZE; ?>" />
    	<fieldset>    
	<legend class="round" >Add Products to Database</legend>

<?php

  if (isset($_POST['submit'])) {
    $category_id = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $in_stock = $_POST['in_stock'];
    $screenshot = $_FILES['screenshot']['name'];
    $screenshot_type = $_FILES['screenshot']['type'];
    $screenshot_size = $_FILES['screenshot']['size']; 

    if (!empty($description) && !empty($screenshot) && !empty($category_id) && !empty($title)) {
      if ((($screenshot_type == 'image/gif') || ($screenshot_type == 'image/jpeg') || ($screenshot_type == 'image/pjpeg') || ($screenshot_type == 'image/png'))
        && ($screenshot_size > 0) && ($screenshot_size <= KMD_MAXFILESIZE)) {
        if ($_FILES['screenshot']['error'] == 0) {
          // Move the file to the target upload folder
          $target = KMD_UPLOADPATH . $screenshot;
          if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {
            // Connect to the database
            $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');

            // Write the data to the database
            $query = "INSERT INTO available_products VALUES (0, '$category_id', '$title', '$description', '$price', '$in_stock', '$screenshot')";
            mysqli_query($dbc1, $query);

            // Confirm success with the user
            echo 'You added: <br/><br/>';
		     echo '<strong>Title:</strong> ' . $title . '<br/>';
		     echo '<strong>Description:</strong> ' . $description . '<br/>';
		     echo '<strong>Price:</strong> ' . $price . '<br/>';
		     echo '<strong>Available in Stock:</strong> ' . $in_stock . '</p>';
            echo '<img src="' . KMD_UPLOADPATH . $screenshot . '" alt="" /></p>';
		     echo 'Wanna go again?<br/><br/>';

            // Clear the data to clear the form
            $category_id = "";
            $title = "";
            $singular_name = "";
            $description = "";
            $price = "";
            $in_stock = "";
            $screenshot = "";

            mysqli_close($dbc1);
          }
          else {
            echo '<p class="error">Sorry, there was a problem uploading your screen shot image.</p>';
          }
        }
      }
      else {
        echo '<p class="error">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (KMD_MAXFILESIZE / 1024) . ' KB in size.</p>';
      }

      // Try to delete the temporary screen shot image file
      @unlink($_FILES['screenshot']['tmp_name']);
    }
    else {
      echo '<p class="error">Please enter all required info.</p>';
    }
  }


?>
	

<label for="category">*Name</label>
<select id="category" name="category" class="inputbutton" style="margin-bottom:5px;">
  <option value="">Select One:</option>
<?php
  $query = "SELECT * FROM product_categories ORDER BY singular_name ASC";

  $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');
  $data = mysqli_query($dbc1, $query);
  while($row = mysqli_fetch_array($data)) {
    echo '<option value="' . $row['category_id'] . '">' . $row['singular_name'] . '</option>';
  }
  mysqli_close($dbc1);
?>
</select>
            
	<br style="clear:both;" > 
	<label for="title" >*Title of Product:</label>
    	<input class="styleme" name="title" id="title" value="<?php echo $title; ?>" />

    	<label for="description" >*Description of Product:</label>
    	<textarea class="big" name="description" id="description" ><?php echo $description; ?></textarea>

	<label for="price" >Price of Product:</label>
    	<input class="styleme" name="price" id="price" value="<?php echo $price; ?>" />
            
	<label for="in_stock" >Amount in Stock:</label>
    	<input class="styleme" name="in_stock" id="in_stock" value="<?php echo $in_stock; ?>" />
        <label for="screenshot">*Upload a picture</label>
	<input type="file" id="screenshot" class="inputbutton" name="screenshot" />

	<br style="clear:both; " > 
	<div class="buttons" >           
    	<input class="shinyButton orangeButton" id="submit" name="submit" type="submit" value="Submit" /> <input class="shinyButton orangeButton" id="myreset" type="reset" value="Start over" />
	</div>

	</fieldset>   
	</form>
	
</div><!--content-->

</div> <!--wrapper-->


</body></html>