<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class Cricket

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all cricket with try catch
 public function getCricket()
 {
  try {
   $sql = "SELECT * FROM cricket";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $cricket = $stmt->fetchAll();
   return $cricket;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }

 // inner join cricket and football
 // select * from cricket as c inner join football as f on c.name=f
//.name;
public function getCricketFootball()
{
 try {
  $sql = "SELECT * FROM cricket as c inner join football as f on c.name=f.name";
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