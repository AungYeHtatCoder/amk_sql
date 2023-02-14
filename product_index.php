<?php 
include('vendor/autoload.php');

use Amk\App\Databases\Product;
use Amk\App\Databases\DatabaseConnect;
$db = new Product(new DatabaseConnect);
$products = $db->getAllProduct();

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
      <h2>Products</h2>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <thead>
        <tr>
         <th scope="col">Code</th>
         <th scope="col">Name</th>
         <th>QTYInstock</th>
         <th>buyPrice</th>
         <th>MSRP</th>

        </tr>
       </thead>
       <tbody>
        <tr>
         <?php foreach($products as $product) : ?>
         <th scope="row"><?php echo $product->productCode; ?></th>
         <td><?php echo $product->productName; ?></td>
         <td><?php echo $product->quantityInstock; ?></td>
         <td><?php echo $product->buyPrice; ?></td>
         <td><?php echo $product->MSRP; ?></td>
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
      <h2>Cricket and football inner join </h2>
     </div>
     <div class="card-body">

     </div>
    </div>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>