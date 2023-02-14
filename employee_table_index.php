<?php 
include('vendor/autoload.php');

use Amk\App\Databases\EmployeeTable;
use Amk\App\Databases\DatabaseConnect;

$db = new EmployeeTable(new DatabaseConnect);
$employees = $db->getAllEmployeeTable();


// echo "<pre>";
// print_r($where_conditions);
// echo "</pre>";
// die();

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
      <h2>Employee Table list</h2>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <thead>
        <tr>
         <th>Em No</th>
         <th scope="col">Name</th>
         <th scope="col">Extenstion</th>
         <th>Email</th>
         <th>Jobtitle</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php foreach ($employees as $customer) : ?>
         <td><?= $customer->employeeNumber; ?></td>
         <td><?= $customer->firstName; ?></td>
         <td><?= $customer->extension; ?></td>
         <td><?= $customer->email; ?></td>
         <td><?= $customer->jobTitle; ?></td>
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
      <h2>Customers / Orders / Lesf join </h2>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <th>C No</th>
        <th>C Name</th>
        <th>Order No</th>
        <th>Status</th>
       </thead>


      </table>
     </div>
    </div>


    <div class="card">
     <div class="card-header">
      <h2>Customers / Orders / Lesf join whit Where Condition </h2>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <th>C No</th>
        <th>C Name</th>

       </thead>
       <tbody>
        <tr>

        </tr>
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