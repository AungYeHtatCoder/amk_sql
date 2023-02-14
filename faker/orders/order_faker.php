<?php
/**
 * Populate MySQL Table Using faker
 * 
 * @author 
 */
require_once('../../vendor/autoload.php');

try{
    $count = 100;
    $faker = \Faker\Factory::create();

    //Connecting MySQL Database
    $pdo  = new PDO('mysql:host=localhost;dbname=amk_test', 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    //Check if the table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'orders'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table orders");
        $stmt->execute();
    } else {
        throw new Exception("The table 'orders' does not exist in the database.");
    }

    //Insert the data
    $sql = 'INSERT INTO orders (orderNumber, orderDate, requiredDate, shippedDate, status, comments, customerNumber) 
    VALUES (:orderNumber, :orderDate, :requiredDate, :shippedDate, :status, :comments, :customerNumber)';
    $stmt = $pdo->prepare($sql);

    for ($i=0; $i < $count; $i++) {
        //$date = $faker->dateTime($max = 'now', 'UTC')->format('Y-m-d H:i:s');
        // $password = password_hash($faker->password(8), PASSWORD_DEFAULT);
        // $status = $faker->randomElement(array(0,1));
        $stmt->execute(
            [
                'orderNumber' => $faker->numberBetween(1000, 9999),
                'orderDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'requiredDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'shippedDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
                // status with  cancelled, approved 
                'status' => $faker->randomElement(array('cancelled', 'approved', 'pending', 'shipped', 'delivered', 'returned', 'refunded', 'failed', 'disputed', 'in progress', 'on hold', 'processing', 'completed')),
                'comments' => $faker->text(100),
                'customerNumber' => $faker->numberBetween(1000, 9999)  
            ]
        );
    }
} catch(Exception $e){
    echo '<pre>';print_r($e);echo '</pre>';exit;
}

if ($stmt->rowCount() > 0) {
    echo 'Data Inserted Successfully';
} else {
    echo 'Data Inserted Failed';
}