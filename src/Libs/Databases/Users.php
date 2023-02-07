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


}