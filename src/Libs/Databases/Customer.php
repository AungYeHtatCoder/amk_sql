<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class Customer

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all cricket with try catch
 public function getAllCustomer()
 {
  try {
   $sql = "SELECT * FROM customers";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $cricket = $stmt->fetchAll();
   return $cricket;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 // left join customers and orders
 //  select c.customerNumber, c.customerName, orderNumber, status from customers as c left join orders as o on c.customerNumber = o.customerNumber;
 public function LeftJoinCustomerAndOrder()
 {
  try {
   $sql = "SELECT c.customerNumber, c.customerName, orderNumber, status from customers as c left join orders as o on c.customerNumber = o.customerNumber";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $cricket = $stmt->fetchAll();
   return $cricket;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 // left join customers and orders
 //  select c.customerNumber, c.customerName, orderNumber, status from customers as c left join orders as o on c.customerNumber = o.customerNumber;
 public function LeftJoinCustomerAndOrderWithWhereCondition()
 {
  try {
   $sql = "SELECT c.customerNumber, c.customerName, orderNumber, status from customers as c left join orders as o on c.customerNumber = o.customerNumber where orderNumber is null";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $cricket = $stmt->fetchAll();
   return $cricket;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }
}