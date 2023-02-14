<?php 
namespace Amk\App\Databases;

use PDO;
use PDOException;

class Football

{
 private $db = null;  // property

 public function __construct($db)
 {
  $this->db = $db->connect();
 }

 // get all cricket with try catch
 public function getFootball()
 {
  try {
   $sql = "SELECT * FROM football";
   $stmt = $this->db->prepare($sql);
   $stmt->execute();
   $cricket = $stmt->fetchAll();
   return $cricket;
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 }
 
}