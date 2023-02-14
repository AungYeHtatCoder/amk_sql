<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class Sale

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all sales with try catch
 public function getSales()
 {
  try {
   $sql = "SELECT * FROM sales";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $sales = $stmt->fetchAll();
   return $sales;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 /*
 ## sum total price group by product_id;
select product_id, sum(sell_price * quantity) as revenue from sales group by product_id;
 */
 public function getRevenue()
 {
  try {
   $sql = "SELECT product_id, sum(sell_price * quantity) as revenue FROM sales GROUP BY product_id";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $revenue = $stmt->fetchAll();
   return $revenue;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }
 /* 
 ## caculate the profit
select c.product_id, sum((s.sell_price - c.cost_price) * s.quantity) as profit from sales as s inner join c_product as c where s.product_id = c.product_id group by c.product_id;
*/
 public function getProfit()
 {
  try {
   $sql = "SELECT c.product_id, sum((s.sell_price - c.cost_price) * s.quantity) as profit FROM sales as s INNER JOIN c_product as c WHERE s.product_id = c.product_id GROUP BY c.product_id";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $profit = $stmt->fetchAll();
   return $profit;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 // ## sum total price group by product_id;
//select product_id, sum(sell_price * quantity) as revenue from sales group by product_id;
// ## caculate the profit
 public function getRevenueByProductId()
 {
  try {
   $sql = "SELECT product_id, sum(sell_price * quantity) as revenue FROM sales  GROUP BY product_id";
   $stmt = $this->db->prepare($sql);
   //$stmt->bindParam(':product_id', $product_id);
   $stmt->execute();
   $revenue = $stmt->fetchAll();
   return $revenue;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 // ## caculate the profit

 
}