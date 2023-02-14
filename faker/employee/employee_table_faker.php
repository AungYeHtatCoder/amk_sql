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
    $tableExists = $pdo->query("SHOW TABLES LIKE 'employee_tables'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table employee_tables");
        $stmt->execute();
    } else {
        throw new Exception("The table 'employee_tables' does not exist in the database.");
    }

    //Insert the data
    $sql = 'INSERT INTO employee_tables (employeeNumber, lastName, firstName, extension, email, officeCode, reportsTo, jobTitle) values (:employeeNumber, :lastName, :firstName, :extension, :email, :officeCode, :reportsTo, :jobTitle)';
    $stmt = $pdo->prepare($sql);

    for ($i=0; $i < $count; $i++) {
        
        $stmt->execute(
            [
                'employeeNumber' => $faker->numberBetween(1002, 1702),
                'lastName' => $faker->lastName,
                'firstName' => $faker->firstName,
                'extension' => $faker->numberBetween(1000, 100000),
                'email' => $faker->email,
                'officeCode' => $faker->numberBetween(1002, 1702),
                'reportsTo' => $faker->numberBetween(1002, 1702),
                'jobTitle' => $faker->jobTitle  
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