<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class Employee

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }
 // get all employees
 public function getEmployees()
 {
 try{
  $sql = "SELECT * FROM employees";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }
 /*
## find the average salary of employees in each department 
select dept, avg(salary) as average_salary from employ
ees group by dept;
## find the average salary of employees in each department
 */
 public function getAverageSalary()
 {
 try{
  $sql = "SELECT dept, avg(salary) as average_salary FROM employees GROUP BY dept";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }
 /*
## total salary accroding to department 
select dept, sum(salary) from employees group by de
pt;
 */
 public function getTotalSalary()
 {
 try{
  $sql = "SELECT dept, sum(salary) as total_salary FROM employees GROUP BY dept";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }
 // select count(emp_id), city from employees group by city order by count(emp_id) desc;
 public function getEmployeeCountByCity()
 {
 try{
  $sql = "SELECT count(emp_id) as employee_count, city FROM employees GROUP BY city ORDER BY count(emp_id) DESC";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }

 ## group by year 
//select year(doj) as year, count(emp_id) from employees group by year(doj);
 public function getEmployeeCountByYear()
 {
 try{
  $sql = "SELECT year(doj) as year, count(emp_id) as employee_count FROM employees GROUP BY year(doj)";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }
 /*
## Having caluse 
select count(emp_id), city from employees group by city h
aving count(emp_id) > 2;
 */
 public function getEmployeeCountByCityHaving()
 {
 try{
  $sql = "SELECT count(emp_id) as employee_count, city FROM employees GROUP BY city HAVING count(emp_id) > 2";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }

 // select dept, avg(salary) as average_salary from employees group by dept having avg(salary) > 50000;
 // avage salary of employees in each department having average salary greater than 50000
 public function getAverageSalaryHaving()
 {
 try{
  $sql = "SELECT dept, avg(salary) as average_salary FROM employees GROUP BY dept HAVING avg(salary) > 50000";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }

 // select city, sum(salary) as total from employees  group by city having sum(salary) > 50000;
 // total salary of employees in each city having total salary greater than 50000
 public function getTotalSalaryHaving()
 {
 try{
  $sql = "SELECT city, sum(salary) as total_salary FROM employees GROUP BY city HAVING sum(salary) > 50000";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
 } catch(PDOException $e){
  echo $e->getMessage();
  return false;
 }
 }
}