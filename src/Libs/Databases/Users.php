<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class Users

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all users
 public function getAllUsers()
 {
  $sql = "SELECT * FROM users";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll();
 }

 // select distinct city from users;
 public function getDistinctCity()
 {
  $sql = "SELECT DISTINCT city FROM users";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll();
 }

 public function countName()
 {
  $sql = "select count(name) as total_name from users";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll();

 }

 public function TotalSalary()
 {
  $sql = "select sum(salary) as salary_total from users";
   $stmt = $this->db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll();
 }

 // name, city, salary where sex = f
 public function SalaryBySexWithFemale()
 {
  $sql = "select name, city, salary from users where sex = 'f'";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll();
 }

 /*

## specify coloum fetch
select name, age, city from users;
 */
public function getColoum()
{
 $sql = "select name, age, city from users";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

/*
## where caluse (to filter)
select * from users where age > 30;
*/
public function getAgeGreaterThan30()
{
 $sql = "select * from users where age > 30";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

/*
## between operator
select * from users where doj between '2000-01-01' and '2010-01-01';
*/
public function getBetween()
{
 $sql = "select * from users where doj between '2000-01-01' and '2010-01-01'";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

/* 
## group by 
select sex, sum(salary) as total_salary from users group by sex;
*/
public function GetTotalSalaryGroupBySex(){
 $sql = "select sex, sum(salary) as total_salary from users group by sex";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
 
}
// get total salary by year
public function getTotalSalaryByYear(){
 $sql = "select year(doj) as year, sum(salary) as total_salary from users group by year(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by month
public function getTotalSalaryByMonth(){
 $sql = "select month(doj) as month, sum(salary) as total_salary from users group by month(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by day
public function getTotalSalaryByDay(){
 $sql = "select day(doj) as day, sum(salary) as total_salary from users group by day(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by weekly 
public function getTotalSalaryByWeekly(){
 $sql = "select week(doj) as week, sum(salary) as total_salary from users group by week(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by quarter
public function getTotalSalaryByQuarter(){
 $sql = "select quarter(doj) as quarter, sum(salary) as total_salary from users group by quarter(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by year and month
public function getTotalSalaryByYearAndMonth(){
 $sql = "select year(doj) as year, month(doj) as month, sum(salary) as total_salary from users group by year(doj), month(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by year and month and day
public function getTotalSalaryByYearAndMonthAndDay(){
 $sql = "select year(doj) as year, month(doj) as month, day(doj) as day, sum(salary) as total_salary from users group by year(doj), month(doj), day(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by year and month and day and week
public function getTotalSalaryByYearAndMonthAndDayAndWeek(){
 $sql = "select year(doj) as year, month(doj) as month, day(doj) as day, week(doj) as week, sum(salary) as total_salary from users group by year(doj), month(doj), day(doj), week(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// count within year month's name
public function countNameWithinYearMonth(){
 $sql = "select year(doj) as year, month(doj) as month, count(name) as total_name from users group by year(doj), month(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}

// get total salary by hourly
public function getTotalSalaryByHourly(){
 $sql = "select hour(doj) as hour, sum(salary) as total_salary from users group by hour(doj)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute();
 return $stmt->fetchAll();
}


}