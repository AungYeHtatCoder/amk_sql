<?php 
include('vendor/autoload.php');

use Amk\App\Databases\Cricket;
use Amk\App\Databases\DatabaseConnect;
$db = new Cricket(new DatabaseConnect);
$cricket = $db->getCricket();
$getCricketFootball = $db->getCricketFootball();
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
      <h2>Cricket</h2>
     </div>
     <div class="card-body">
      <table class="table table-striped">
       <thead>
        <tr>
         <th scope="col">ID</th>
         <th scope="col">Name</th>

        </tr>
       </thead>
       <tbody>
        <?php foreach ($cricket as $cricket) : ?>
        <tr>
         <th scope="row"><?php echo $cricket->cricket_id; ?></th>
         <td><?php echo $cricket->name; ?></td>
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
      <table>
       <thead>
        <tr>
         <th scope="col">Cricket ID</th>
         <th scope="col">Cricket Name</th>
         <th>Football ID</th>
         <th>Football Name</th>
        </tr>
       </thead>
       <tbody>
        <?php foreach ($getCricketFootball as $inner_join) : ?>
        <tr>
         <th scope="row"><?php echo $inner_join->cricket_id; ?></th>
         <td><?php echo $inner_join->name; ?></td>
         <td><?php echo $inner_join->football_id; ?></td>
         <td><?php echo $inner_join->name; ?></td>
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