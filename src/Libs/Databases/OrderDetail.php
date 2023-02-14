<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class OrderDetail

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all cricket with try catch
 public function getAllOrderDetails()
 {
  try {
   $sql = "SELECT * FROM orderdetails";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $cricket = $stmt->fetchAll();
   return $cricket;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 // inner join orders and orderdetails and products
 // select o.orderNumber, o.status, p.productName, sum(quantityOrde
// red * priceEach) as revenue from orders as o inner join orderdetails as od on o.ord
// ernumber = od.orderNumber inner join products as p on p.productCode = od.productCod
// e group by orderNumber;

public function getInnerJoin()
{
 try {
  $sql = "SELECT o.orderNumber, o.status, p.productName, sum(quantityOrdered * priceEach) as revenue from orders as o inner join orderdetails as od on o.ordernumber = od.orderNumber inner join products as p on p.productCode = od.productCode group by orderNumber";
  $stmt = $this->db->prepare($sql);
  $stmt->execute();
  $cricket = $stmt->fetchAll();
  return $cricket;
 } catch (PDOException $e) {
  echo $e->getMessage();
 }
}

// inner join with aliases 
// select c.cricket_id, c.name, f.football_id, f.name from cricket
 // as c inner join football as f on c.name=f.name;
}