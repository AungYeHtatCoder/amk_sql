<?php 
include('vendor/autoload.php');

use Amk\App\Databases\OrderDetail;
use Amk\App\Databases\DatabaseConnect;

$db = new OrderDetail(new DatabaseConnect);
$order_details = $db->getAllOrderDetails();
$inner_join = $db->getInnerJoin();

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
      <h2>Order Details</h2>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <thead>
        <tr>
         <th>OderNo</th>
         <th scope="col">ProductCode</th>
         <th scope="col">OrderQTY</th>
         <th>PriceEach</th>
         <th>OrderLineNO</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php foreach($order_details as $order_detail) : ?>
         <td><?php echo $order_detail->orderNumber; ?></td>
         <td><?php echo $order_detail->productCode; ?></td>
         <td><?php echo $order_detail->quantityOrdered; ?></td>
         <td><?php echo $order_detail->priceEach; ?></td>
         <td><?php echo $order_detail->orderLineNumber; ?></td>

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
      <h2>Orders / orderdeatils / and products inner join </h2>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <th>OrderNo</th>
        <th>Status</th>
        <th>ProductName</th>
        <th>Revenue</th>
       </thead>
       <tbody>
        <tr>
         <?php foreach($inner_join as $inner) : ?>
         <td><?php echo $inner->orderNumber; ?></td>
         <td><?php echo $inner->status; ?></td>
         <td><?php echo $inner->productName; ?></td>
         <td><?php echo $inner->revenue; ?></td>
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