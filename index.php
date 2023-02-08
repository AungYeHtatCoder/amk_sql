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

$sex_salary = $db->SalaryBySexWithFemale();
// echo "<pre>";
// print_r($sex_salary);
// echo "</pre>";
// die();
$get_specific_column = $db->getColoum();
$getAgeGreaterThan_30 = $db->getAgeGreaterThan30();
// getBetween
$getBetween = $db->getBetween();

// GetTotalSalaryGroupBySex
$getTotalSalaryGroupBySex = $db->getTotalSalaryGroupBySex();

// getTotalSalaryByYear
$getTotalSalaryByYear = $db->getTotalSalaryByYear();

// getTotalSalaryByMonth
$getTotalSalaryByMonth = $db->getTotalSalaryByMonth();

// getTotalSalaryByDay
$getTotalSalaryByDay = $db->getTotalSalaryByDay();

// getTotalSalaryByWeekly
$getTotalSalaryByWeekly = $db->getTotalSalaryByWeekly();
// getTotalSalaryByQuarter
$getTotalSalaryByQuarter = $db->getTotalSalaryByQuarter();

// getTotalSalaryByYearAndMonth
$getTotalSalaryByYearAndMonth = $db->getTotalSalaryByYearAndMonth();

// getTotalSalaryByYearAndMonthAndDay
$getTotalSalaryByYearAndMonthAndDay = $db->getTotalSalaryByYearAndMonthAndDay();
//getTotalSalaryByYearAndMonthAndDayAndWeek
$getTotalSalaryByYearAndMonthAndDayAndWeek = $db->getTotalSalaryByYearAndMonthAndDayAndWeek();

// countNameWithinYearMonth
$countNameWithinYearMonth = $db->countNameWithinYearMonth();
//getTotalSalaryByHourly
$getTotalSalaryByHourly = $db->getTotalSalaryByHourly();

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

    <div class="col-lg-4">
     <div class="card">
      <div class="card-header">
       <h3>Get Between 2000 to 2010 user data</h3>
      </div>
      <div class="card-body">
       <table class="table">
        <thead>
         <tr>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="">DOJ</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <?php 
            foreach($getBetween as $between) :
            ?>
          <td><?= $between->name; ?></td>
          <td><?= $between->age; ?></td>
          <td><?= $between->doj; ?></td>
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
       <h3>Get Total salary group by sex</h3>
      </div>
      <div class="card-body">
       <table class="table">
        <thead>
         <tr>

          <th scope="col">Sex</th>
          <th scope="">Salary</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <?php 
            foreach($getTotalSalaryGroupBySex as $gender) :
            ?>
          <td><?= strtoupper ($gender->sex); ?></td>
          <td><?= $gender->total_salary; ?></td>

         </tr>
         <?php endforeach; ?>
        </tbody>
       </table>
      </div>
     </div>
    </div>
    <div class="col-lg-4">
     <div class="card-header">
      <h6>getTotalSalaryByYear</h6>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Year</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByYear as $year) : ?>
       <tr>
        <td><?= $year->year; ?></td>
        <td><?= $year->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>

    <div class="col-lg-4">
     <div class="card-header">
      <h6>getTotalSalaryByMonth</h6>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>month</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByMonth as $month) : ?>
       <tr>
        <td><?= $month->month; ?></td>
        <td><?= $month->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>
    <div class="col-lg-4">
     <div class="card-header">
      <h6>getTotalSalaryByDay</h6>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Day</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByDay as $day) : ?>
       <tr>
        <td><?= $day->day; ?></td>
        <td><?= $day->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>

    <div class="col-lg-4">
     <div class="card-header">
      <h6>getTotalSalaryByWeekly</h6>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Week</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByWeekly as $weekly) : ?>
       <tr>
        <td><?= $weekly->week; ?></td>
        <td><?= $weekly->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>

    <div class="col-lg-4">
     <div class="card-header">
      <h6>getTotalSalaryByQuater</h6>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>quarter</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByQuarter as $quarter) : ?>
       <tr>
        <td><?= $quarter->quarter; ?></td>
        <td><?= $quarter->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>

    <div class="col-lg-4">
     <div class="card-header">
      <h6>getTotalSalaryByYearAndMonth</h6>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Year</th>
        <th>Month</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByYearAndMonth as $year_month) : ?>
       <tr>
        <td><?= $year_month->year; ?></td>
        <td><?= $year_month->month; ?></td>
        <td><?= $year_month->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
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

    <div class="card">
     <div class="card-header">
      <h4>Name City Salary by sex with Female</h4>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th scope="col">Name</th>
         <th scope="col">City</th>
         <th scope="col">Salary</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php 
          foreach($sex_salary as $salary) :
          ?>
         <td><?= $salary->name; ?></td>
         <td><?= $salary->city; ?></td>
         <td><?= $salary->salary; ?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>

    <div class="card">
     <div class="card-header">
      <h4> get specific column Name age city</h4>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th scope="col">Name</th>
         <th scope="col">Age</th>
         <th scope="col">City</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php 
          foreach($get_specific_column as $columns) :
          ?>
         <td><?= $columns->name; ?></td>
         <td><?= $columns->age; ?></td>
         <td><?= $columns->city; ?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
    <div class="card">
     <div class="card-header">
      <h4> get Age Greater than 30 from users table</h4>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th scope="col">Name</th>
         <th scope="col">Age</th>
         <th scope="col">City</th>
         <th scope="col">Salary</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php 
          foreach($getAgeGreaterThan_30 as $age) :
          ?>
         <td><?= $age->name; ?></td>
         <td><?= $age->age; ?></td>
         <td><?= $age->city; ?></td>
         <td><?= $age->salary; ?></td>
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
      <h4>getTotalSalaryByYearAndMonthAndDay</h4>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Year</th>
        <th>Month</th>
        <th>Day</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByYearAndMonthAndDay as $year_month_day) : ?>
       <tr>
        <td><?= $year_month_day->year; ?></td>
        <td><?= $year_month_day->month; ?></td>
        <td><?= $year_month_day->day; ?></td>
        <td><?= $year_month_day->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h4>getTotalSalaryByYearAndMonthAndDay</h4>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Year</th>
        <th>Month</th>
        <th>Day</th>
        <th>Week</th>
        <th>Salary</th>
       </tr>
       <?php foreach($getTotalSalaryByYearAndMonthAndDayAndWeek as $ymdw) : ?>
       <tr>
        <td><?= $ymdw->year; ?></td>
        <td><?= $ymdw->month; ?></td>
        <td><?= $ymdw->day; ?></td>
        <td><?= $ymdw->week; ?></td>
        <td><?= $ymdw->total_salary; ?></td>
       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h4>getTotalSalaryByYearAndMonthAndDay</h4>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Year</th>
        <th>Month</th>
        <th>Name</th>

       </tr>
       <?php foreach($countNameWithinYearMonth as $m_name) : ?>
       <tr>
        <td><?= $m_name->year; ?></td>
        <td><?= $m_name->month; ?></td>
        <td><?= $m_name->total_name; ?></td>

       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>
   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      <h4>getTotalSalaryByHourly</h4>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>Hour</th>
        <th>Salary</th>


       </tr>
       <?php foreach($getTotalSalaryByHourly as $hours) : ?>
       <tr>
        <td><?= $hours->hour; ?></td>
        <td><?= $hours->total_salary; ?></td>


       </tr>
       <?php endforeach; ?>
      </table>
     </div>
    </div>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>