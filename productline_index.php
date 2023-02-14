<?php 
include('vendor/autoload.php');

use Amk\App\Databases\ProductLine;
use Amk\App\Databases\DatabaseConnect;
$db = new ProductLine(new DatabaseConnect);
$products = $db->getAllProductLine();
// getProductAndProductLine
$product_lines = $db->getProductAndProductLine();
?>
<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
 <?php include('navbar.php'); ?>
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h2>Products Line</h2>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <thead>
        <tr>
         <th scope="col">Line</th>
         <th scope="col">Text</th>
         <th>HTML</th>
         <th>Image</th>


        </tr>
       </thead>
       <tbody>
        <tr>
         <?php foreach($products as $product) : ?>
         <th scope="row"><?php echo $product->productLine; ?></th>
         <td><?php echo $product->textDescription; ?></td>
         <td><?php echo $product->htmlDescription; ?></td>
         <td>
          <img src="<?= $product->image; ?>" width="100px" height="100px" alt="">
         </td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h2>Products and Products Line inner join </h2>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Product Line</th>
        <th>Product Name</th>
        <th>Text Description</th>
       </tr>
       <tbody>
        <?php foreach($product_lines as $product_line) : ?>
        <tr>
         <td><?php echo $product_line->productLine; ?></td>
         <td><?php echo $product_line->productName; ?></td>
         <td><?php echo $product_line->textDescription; ?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>