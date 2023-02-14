<?php 
include('vendor/autoload.php');

use Amk\App\Databases\Order;
use Amk\App\Databases\DatabaseConnect;
$db = new Order(new DatabaseConnect);
$orders = $db->getAllOrder();

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
      <h2>Orders</h2>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <thead>
        <tr>
         <th scope="col">Code</th>
         <th scope="col">orDate</th>
         <th>ReQDate</th>
         <th>ShippedDate</th>
         <th>Status</th>
         <th>CustomNo</th>

        </tr>
       </thead>
       <tbody>
        <tr>
         <?php foreach($orders as $order) : ?>
         <td><?php echo $order->orderNumber; ?></td>
         <td><?php echo $order->orderDate; ?></td>
         <td><?php echo $order->requiredDate; ?></td>
         <td><?php echo $order->shippedDate; ?></td>
         <td>
          <!-- status with if condition  == cancelled / status == approved // pending // shipped // delivered // returned // refunded // failed // disputed // in progress // on hold // processing // completed  -->
          <?php if($order->status == 'cancelled') : ?>
          <span class="badge bg-danger"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'approved') : ?>
          <span class="badge bg-success"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'pending') : ?>
          <span class="badge bg-warning"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'shipped') : ?>
          <span class="badge bg-info"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'delivered') : ?>
          <span class="badge bg-primary"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'returned') : ?>
          <span class="badge bg-secondary"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'refunded') : ?>
          <span class="badge bg-dark"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'failed') : ?>
          <span class="badge bg-danger"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'disputed') : ?>
          <span class="badge bg-warning"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'in progress') : ?>
          <span class="badge bg-info"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'on hold') : ?>
          <span class="badge bg-primary"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'processing') : ?>
          <span class="badge bg-secondary"><?php echo $order->status; ?></span>
          <?php elseif($order->status == 'completed') : ?>
          <span class="badge bg-dark"><?php echo $order->status; ?></span>
          <?php endif; ?>

         </td>
         <td><?php echo $order->customerNumber; ?></td>
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