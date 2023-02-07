<?php
include('vendor/autoload.php');
use Amk\App\Databases\DatabaseConnect;
use Amk\App\Databases\Users;

$db = new Users(new DatabaseConnect());
$users = $db->getAllUsers();
//var_dump($users);
$city_only = $db->getDistinctCity();
// echo "<pre>";
// print_r($city_only);
// echo "</pre>";
// die();
$name_count = $db->countName();
// print_r($name_count);
// die();
$total_salary = $db->TotalSalary();
// print_r($total_salary);
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
 <div class="container">
  <div class="row">
   <div class="col-8">
    <div class="card">
     <div class="card-header">
      <h3>Users</h3>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <thead>
        <tr>
         <th scope="col">Name</th>
         <th scope="col">Age</th>
         <th scope="col">City</th>
         <th scope="col">Salary</th>
         <th scope="col">Sex</th>
         <th scope="col">Action</th>
        </tr>
       </thead>
       <tbody>
        <?php foreach ($users as $user) : ?>
        <tr>
         <td scope="row"><?= $user->name ?></td>
         <td><?= $user->age ?></td>
         <td><?= $user->city ?></td>
         <td><?= $user->salary ?></td>
         <td><?=  $user->sex ?></td>
         <td>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>

   </div>
   <div class="col-4">
    <div class="card">
     <div class="card-header">
      <h3>Filter</h3>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th scope="col">City</th>
         <th scope="col">Action</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php 
          foreach($city_only as $city) :
          ?>
         <td><?= $city->city; ?></td>
         <td><a href="#" class="btn btn-primary">Edit</a></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
    <div class="card">
     <div class="card-header">
      <h4>Total User name</h4>
      <p><?php foreach($name_count as $name){
        echo $name->total_name;
      }
      
      ?></p>
     </div>
    </div>

    <div class="card">
     <div class="card-header">
      <h4>Total Salary</h4>
      <p><?php foreach($total_salary as $salary){
        echo $salary->salary_total;
      }
      ?></p>
     </div>
    </div>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>