<?php
/**
 * Populate MySQL Table Using faker
 * 
 * @author 
 */
require_once('../../vendor/autoload.php');

try{
    $count = 74;
    $faker = \Faker\Factory::create();

    //Connecting MySQL Database
    $pdo  = new PDO('mysql:host=localhost;dbname=amk_test', 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    //Check if the table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'customers'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table customers");
        $stmt->execute();
    } else {
        throw new Exception("The table 'customers' does not exist in the database.");
    }

    //Insert the data
    $sql = 'INSERT INTO customers (customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) values (:customerName, :contactLastName, :contactFirstName, :phone, :addressLine1, :addressLine2, :city, :state, :postalCode, :country, :salesRepEmployeeNumber, :creditLimit)';
    $stmt = $pdo->prepare($sql);

    for ($i=0; $i < $count; $i++) {
        
        $stmt->execute(
            [
             // customers faker data is same orders faker data
                
                'customerName' => $faker->name,
                'contactLastName' => $faker->lastName,
                'contactFirstName' => $faker->firstName,
                'phone' => $faker->phoneNumber,
                'addressLine1' => $faker->address,
                'addressLine2' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'postalCode' => $faker->postcode,
                'country' => $faker->country,
                'salesRepEmployeeNumber' => $faker->numberBetween(1002, 1702),
                'creditLimit' => $faker->numberBetween(1000, 100000)
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