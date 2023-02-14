<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class ProductLine

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all cricket with try catch
 public function getAllProductLine()
 {
  try {
   $sql = "SELECT * FROM productlines";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $cricket = $stmt->fetchAll();
   return $cricket;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 // inner join products and productlines
 // select productLine, productName, textDescription from products inner join productlines  using (productLine);
public function getProductAndProductLine()
{
 try {
  $sql = "select productLine, productName, textDescription from products inner join productlines  using (productLine);";
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