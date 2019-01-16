<?php
  $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1);

  //select all products matching category id on bags page from available_products
  $query = "SELECT * FROM available_products WHERE category_id = '$category' AND in_stock >0 ORDER BY in_stock DESC";
  $data = mysqli_query($dbc1, $query);

  if ($row = mysqli_fetch_array($data) > 0) {
    //select name of that category from product_categories
    $query2 = "SELECT plural_name, singular_name FROM product_categories WHERE category_id = '$category'";
    $data2 = mysqli_query($dbc1, $query2);
    if (mysqli_num_rows($data2) == 1) {
      $row2 = mysqli_fetch_array($data2);
      $productname = $row2['plural_name'];
      $emailname = $row2['singular_name'];
    }
    echo '<div>';
?>
    <a href="#" id="<?php echo $droplink; ?>-show" class="showLink" onclick="showHide('<?php echo $droplink; ?>');return false;">Show <?php echo $productname; ?> in stock!</a>
<?php
    echo '</div>';
  }

  $data1 = mysqli_query($dbc1, $query);
  echo '<div id="' . $droplink . '" class="availablediv">';
  echo '<hr/>';
  echo '<h2 class="avheader">Available ' . $productname . ':</h2>';
  echo '<p>(Click on an item to send me a message about that particular product!)</p>';
  while($row = mysqli_fetch_array($data1)) {
    echo '<a href="contact.php?message=Regarding the ' . $row['title'] . ' ' . $emailname . ':"><div class="available">';
    echo '<img src="productimages/' . $row['screenshot'] . '" alt="' . $alttag . '" />';
    echo '<p><strong>' . $row['title'] . '</strong><br/>';
    echo $row['description'] . '<br/>';
    if ($row['price'] > 0) {
      echo $row['price'];
    }
    echo '</p></div></a>';
  }
  mysqli_close($dbc1);
?>
  <br style="clear:both;"/>
  <a href="#" id="<?php echo $droplink; ?>-hide" class="hideLink" onclick="showHide('<?php echo $droplink; ?>');return false;">Hide available <?php echo $productname; ?></a>

<?php
  echo '</div>';
?>