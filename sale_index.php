<?php
  include('vendor/autoload.php');
  use Amk\App\Databases\DatabaseConnect;
  use Amk\App\Databases\Sale;

  $db = new Sale(new DatabaseConnect);
  $sales = $db->getSales();
  // getRevenue
  $revenue = $db->getRevenue();
  // getProfit
  $profit = $db->getProfit();

  // getRevenueByProductId
  $revenueByProductId = $db->getRevenueByProductId();

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
 <?php include('navbar.php') ?>
 <div class="container mt-5">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h3>Sales</h3>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>ID</th>
         <th>Price</th>
         <th>QTY</th>
         <th>State</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php foreach($sales as $key => $sale) : ?>
         <td><?=  $sale->product_id; ?></td>
         <td><?=  $sale->sell_price; ?></td>
         <td><?=  $sale->quantity; ?></td>
         <td><?= $sale->state;?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
    <div class="row">
     <div class="col-lg-4">
      <div class="card">
       <div class="card-header">
        <h6>sum total price group by product_id;</h6>
       </div>
       <div class="card-body">
        <table class="table">
         <thead>
          <tr>
           <th>Product ID</th>
           <th>Total Price</th>
          </tr>
         </thead>
         <tbody>
          <tr>
           <?php foreach($revenue as $key => $sale) : ?>
           <td><?=  $sale->product_id; ?></td>
           <td><?=  $sale->revenue; ?></td>
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
        <h6>getProfit</h6>
       </div>
       <div class="card-body">
        <table class="table">
         <thead>
          <tr>
           <th>Product ID</th>
           <th>Profit</th>
          </tr>
         </thead>
         <tbody>
          <tr>
           <?php foreach($profit as $key => $sale) : ?>
           <td><?=  $sale->product_id; ?></td>
           <td><?=  $sale->profit; ?></td>
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
        <h6>getRevenueByProductId (calculate the profit) </h6>
       </div>
       <div class="card-body">
        <table class="table">
         <thead>
          <tr>
           <th>Product ID</th>
           <th>Revenue</th>

          </tr>
         </thead>
         <tbody>
          <tr>
           <?php foreach($revenueByProductId as $key => $sale) : ?>
           <td><?=  $sale->product_id; ?></td>
           <td><?=  $sale->revenue; ?></td>

          </tr>
          <?php endforeach; ?>
         </tbody>
        </table>
       </div>
      </div>
     </div>
    </div>

    <div class="row">
     <div class="col-lg-4">
      <div class="card">
       <div class="card-header">
        <h6>count emp id accroding to year</h6>
       </div>
       <div class="card-body">

       </div>
      </div>
     </div>


    </div>

   </div>
  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>