<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../localincludes/connectkmdemail.php');
  require_once('../localincludes/connectkmdproducts.php');
  require_once('../includes/variableuploadproducts.php');

  //insert page head and header
  $page_title = 'Edit Products in Database';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');
?>

<div id="content" >
	<form enctype="multipart/form-data" class="realform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    	<fieldset>    
	<legend class="round" >Edit Product in Database</legend>
<?php

if (isset($_GET['id']) && isset($_GET['category_id']) &&isset($_GET['title']) && isset($_GET['description']) && isset($_GET['price']) && isset($_GET['in_stock']) && isset($_GET['screenshot'])) {

	$id = $_GET['id'];
	$category_id = $_GET['category_id'];
	$title = $_GET['title'];
	$description = $_GET['description'];
	$price = $_GET['price'];
	$in_stock = $_GET['in_stock'];
	$currentscreenshot = $_GET['screenshot'];
}

else if (isset($_POST['id']) && isset($_POST['category_id']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['in_stock'])) {

	$id = $_POST['id'];
	$category_id = $_POST['category_id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$in_stock = $_POST['in_stock'];
	$currentscreenshot = $_POST['currentscreenshot'];
    $screenshot = $_FILES['newscreenshot']['name'];
    $screenshot_type = $_FILES['newscreenshot']['type'];
    $screenshot_size = $_FILES['newscreenshot']['size'];
	$imageverification = '<p>You kept the same image: <br/> <img src="' . KMD_UPLOADPATH . $currentscreenshot . '" alt="" />';
}

if (isset($_POST['submit'])) {

if (!empty($screenshot)) {
  if ((($screenshot_type == 'image/gif') || ($screenshot_type == 'image/jpeg') || ($screenshot_type == 'image/pjpeg') || ($screenshot_type == 'image/png'))
        && ($screenshot_size > 0) && ($screenshot_size <= KMD_MAXFILESIZE)) {
        if ($_FILES['screenshot']['error'] == 0) {
	@unlink(KMD_UPLOADPATH . $currentscreenshot);
          // Move the file to the target upload folder
          $target = KMD_UPLOADPATH . $screenshot;
          move_uploaded_file($_FILES['newscreenshot']['tmp_name'], $target);

	 $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');
	
	$query = "UPDATE available_products SET screenshot = '$screenshot' WHERE id = '$id'";

	$imageverification = '<p>You uploaded a new image: <br/> <img src="' . KMD_UPLOADPATH . $screenshot . '" alt="" /></p>';
	mysqli_query($dbc1, $query);
	mysqli_close($dbc1);
}
}
}

if ($_POST['deleteme'] == 'yes') {

	@unlink(KMD_UPLOADPATH . $currentscreenshot);
	$dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');
	$query = "DELETE FROM available_products WHERE id = $id";
	mysqli_query($dbc1, $query);
	mysqli_close($dbc1);

	echo 'Item deleted.<br/>';
	echo '<a href="kmdproductslookup.php">Go back to product listings</a></p>';

}
else {
	 $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');
	
	$query = "UPDATE available_products SET title = '$title', description = '$description', price = '$price', in_stock = '$in_stock' WHERE id = '$id'";

	mysqli_query($dbc1, $query);
	mysqli_close($dbc1);

	echo '<p>You updated this item: ' . $title . '<br/>';
	echo 'Description: ' . $description . '<br/>';
	echo 'Price: ' . $price . '<br/>';
	echo 'Amount in stock: ' . $in_stock . '<br/></p>';
	echo $imageverification . '<br/><br/>';
	echo '<a href="kmdproductslookup.php">Go back to product listings</a></p>';
}
}

else if (isset($id) && isset($category_id) && isset($title) && isset($description) && isset($price) && isset($in_stock) && isset($currentscreenshot)) {

	echo 'Edit this, or <a href="kmdproductslookup.php">Go back to products listings</a><br style="class:clear:both;"/>';
?>
            
	<label for="title" >Title of Product:</label>
    	<input class="styleme" name="title" id="title" value="<?php echo $title; ?>" />

    	<label for="description" >Description of Product:</label>
    	<textarea class="big" name="description" id="description" ><?php echo $description; ?></textarea>

	<label for="price" >Price of Product:</label>
    	<input class="styleme" name="price" id="price" value="<?php echo $price; ?>" />
            
	<label for="in_stock" >Amount in Stock:</label>
    	<input class="styleme" name="in_stock" id="in_stock" value="<?php echo $in_stock; ?>" />

	<label>Current Picture:</label>
	<img src="../productimages/<?php echo $currentscreenshot; ?>" alt="" width="100" style="margin:15px 0;" />

	<br style="clear:both; " > 
	<label for="newscreenshot">Upload a new picture:<br/>(Deletes old picture)</label>
	<input type="file" id="newscreenshot" class="inputbutton" name="newscreenshot" />

	<input type="hidden" name="currentscreenshot" value="<?php echo $currentscreenshot;?>" />
	<input type="hidden" name="id" value="<?php echo $id;?>"/>
	<input type="hidden" name="category_id" value="<?php echo $category_id;?>"/>

	<br style="clear:both; " > 
	<label for="deleteme">Delete this item totally?</label>
	<input type="radio" name="deleteme" value="yes" class="inputbutton"/> Yes
	<input type="radio" name="deleteme" value="no"  class="inputbutton" checked="checked"/> No

	<br style="clear:both; " > 
	<div class="buttons" >           
    	<input class="shinyButton orangeButton" id="submit" name="submit" type="submit" value="Submit" />
	</div>

	
<?php
}
?>	
	</fieldset>   
	</form>
</div><!--content-->

</div> <!--wrapper-->


</body></html>