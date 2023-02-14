<?php
  include('vendor/autoload.php');
  use Amk\App\Databases\DatabaseConnect;
  use Amk\App\Databases\Employee;

  $db = new Employee(new DatabaseConnect);
  $employees = $db->getEmployees();

  // getAverageSalary
  $averageSalary = $db->getAverageSalary();
  // getTotalSalary
  $totalSalary = $db->getTotalSalary();
  // getEmployeeCountByCity
  $employeeCountByCity = $db->getEmployeeCountByCity();
  // getEmployeeCountByYear
  $employeeCountByYear = $db->getEmployeeCountByYear();
  // getEmployeeCountByCityHaving
  $employeeCountByCityHaving = $db->getEmployeeCountByCityHaving();
  // getAverageSalaryHaving
  $averageSalaryHaving = $db->getAverageSalaryHaving();
  //getTotalSalaryHaving
  $totalSalaryHaving = $db->getTotalSalaryHaving();
  
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
      <h3>Employee</h3>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Age</th>
         <th>Gender</th>
         <th>DOJ</th>
         <th>DEPT</th>
         <th>City</th>
         <th>Salary</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <?php foreach($employees as $key => $employee) : ?>
         <td><?=  $employee->emp_id; ?></td>
         <td><?=  $employee->emp_name; ?></td>
         <td><?=  $employee->age; ?></td>
         <td><?= $employee->gender;?></td>
         <td>
          <!-- doj with date format -->
          <?= date('d-m-Y', strtotime($employee->doj)); ?>
         </td>
         <td><?= $employee->dept; ?></td>
         <td><?= $employee->city; ?></td>
         <td><?= $employee->salary; ?></td>
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
        <h6>find the average salary of employees in each department</h6>
       </div>
       <div class="card-body">
        <table class="table">
         <thead>
          <tr>
           <th>Dept</th>
           <th>Average Salary</th>
          </tr>
         </thead>
         <tbody>
          <?php foreach($averageSalary as $key => $salary) : ?>
          <tr>
           <td><?= $salary->dept; ?></td>
           <td><?= $salary->average_salary; ?></td>
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
        <h6>find the total salary accroding to department</h6>
       </div>
       <div class="card-body">
        <table class="table">
         <thead>
          <tr>
           <th>Dept</th>
           <th>Total Salary</th>
          </tr>
         </thead>
         <tbody>
          <?php foreach($totalSalary as $key => $salary) : ?>
          <tr>
           <td><?= $salary->dept; ?></td>
           <td><?= $salary->total_salary; ?></td>
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
        <h6>count emp id accroding to city</h6>
       </div>
       <div class="card-body">
        <table class="table">
         <thead>
          <tr>
           <th>city</th>
           <th>emp_count</th>
          </tr>
         </thead>
         <tbody>
          <?php foreach($employeeCountByCity as $key => $count) : ?>
          <tr>
           <td><?= $count->city; ?></td>
           <td><?= $count->employee_count; ?></td>
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
        <table class="table">
         <thead>
          <tr>
           <th>year</th>
           <th>emp_count</th>
          </tr>
         </thead>
         <tbody>
          <?php foreach($employeeCountByYear as $key => $count) : ?>
          <tr>
           <td><?= $count->year; ?></td>
           <td><?= $count->employee_count; ?></td>
          </tr>
          <?php endforeach; ?>
         </tbody>
        </table>
       </div>
      </div>
     </div>


    </div>

   </div>
   <div class="col-lg-4">
    <div class="card">
     <div class="card-header">
      getEmployeeCountByCityHaving (having clause)
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>city</th>
         <th>emp_count</th>
        </tr>
       </thead>
       <tbody>
        <?php foreach($employeeCountByCityHaving as $key => $count) : ?>
        <tr>
         <td><?= $count->city; ?></td>
         <td><?= $count->employee_count; ?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>

    <div class="card">
     <div class="card-header">
      avage salary of employees in each department having average salary greater than 50000 (having clause)
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>dept</th>
         <th>salary</th>
        </tr>
       </thead>
       <tbody>
        <?php foreach($averageSalaryHaving as $key => $salary) : ?>
        <tr>
         <td><?= $salary->dept; ?></td>
         <td><?= $salary->average_salary; ?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>

    <div class="card">
     <div class="card-header">
      total salary of employees in each city having total salary greater than 50000 (having clause)
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <tr>
         <th>city</th>
         <th>salary</th>
        </tr>
       </thead>
       <tbody>
        <?php foreach($totalSalaryHaving as $key => $city_salary) : ?>
        <tr>
         <td><?= $city_salary->city; ?></td>
         <td><?= $city_salary->total_salary; ?></td>
        </tr>
        <?php endforeach; ?>
       </tbody>
      </table>
     </div>
    </div>
   </div>



  </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>