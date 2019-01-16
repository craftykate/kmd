<?php
  //start the session
  require_once('../includes/startsession.php');

  //include connection variables
  require_once('../includes/connectkmdemail.php');
  require_once('../includes/connectkmdproducts.php');

  //insert page head and header
  $page_title = 'Look Up Available Products';
  require_once('../templates/privatehead.php');

  //check if logged in for member pages
  require_once('../includes/membersonly.php');

  $dbc1 = mysqli_connect(DB_HOST1, DB_USER1, DB_PASSWORD1, DB_NAME1) or die('Error connecting to MySQL server.');

  //look up product info from product_categories and available_products
  $query = "SELECT pc.singular_name, ap.id, ap.category_id, ap.title, ap.description, ap.price, ap.in_stock, ap.screenshot " . 
    "FROM product_categories AS pc " .
    "INNER JOIN available_products AS ap USING (category_id) " .
    "WHERE ap.category_id > 0 " . 
    "ORDER BY pc.singular_name ASC";
  $data = mysqli_query($dbc1, $query);
  $products = array();
  while ($row = mysqli_fetch_array($data)) {
     array_push($products, $row);
  }

  mysqli_close($dbc1);
?>

<div id="content" >
<div style="position:fixed; width:10%; top:150px; z-index:9999;">
<ul>
  <li>Categories</li>
<?php
  //build sidebar, starting with first name in list:
  $category = $products[0]['singular_name'];
  echo '<li><a href="#' . $products[0]['category_id'] . '">' . $products[0]['singular_name'] . '</a></li>';
  foreach ($products as $product) {
    //to not repeat categories only display when category doesn't equal the last one:
    if ($category != $product['singular_name']) {
      $category = $product['singular_name'];
      echo '<li><a href="#' . $product['category_id'] . '">' . $product['singular_name'] . '</a></li>';
    }
  }
?>
</ul>
</div>
<?php

  //generate the form by looping through the products array
  echo '<form method="post" action="" class="realform">';
  //grab the category of the first product
  $category = $products[0]['singular_name'];
  echo '<fieldset class="avpro"><legend id="' . $products[0]['category_id'] . '"  class="round">' . $products[0]['singular_name'] . '</legend>';
  foreach ($products as $product) {
    //only start a new fieldset if the category has changed
    if ($category != $product['singular_name']) {
      $category = $product['singular_name'];
      echo '</fieldset><fieldset class="avpro"><legend id="' . $product['category_id'] . '" class="round">' . $product['singular_name'] . '</legend>';
    }
    
    //display the products
    echo '<div><br/>';
    echo '<span style="display:table-cell; width:5%; vertical-align:top;">' . $product['title'] . '<br/><a href="editproducts.php?id=' . $product['id'] . '&amp;category_id=' . $product['category_id'] . '&amp;title=' . $product['title'] . '&amp;description=' . $product['description'] . '&amp;price=' . $product['price'] . '&amp;in_stock=' . $product['in_stock'] . '&amp;screenshot=' . $product['screenshot'] . '">(edit)</a></span>';
    echo '<span style="display:table-cell; width:36%; vertical-align:top; padding:0 2%;">' . $product['description'] . '</span>';
    echo '<span style="display:table-cell; width:10%; vertical-align:top; text-align:center;">' . '$' . $product['price'] . '</span>';
    echo '<span style="display:table-cell; width:12%; vertical-align:top; text-align:center;">' . $product['in_stock'] . ' in stock' . '<br/><br/>' . $product['screenshot'] . '</span>';
    echo '<span style="display:table-cell; width:12%; padding-left:2%;">' . '<img src="../productimages/' . $product['screenshot'] . '" alt="" width="100"/></span>';
    echo '</div>';
  }

  echo '</fieldset>';
  echo '</form>';

?>
</div><!--content-->

</div> <!--wrapper-->


</body></html>