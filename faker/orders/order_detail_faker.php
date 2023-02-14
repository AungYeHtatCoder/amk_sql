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
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Check if the table exists
    $tableExists = $pdo->query("SHOW TABLES LIKE 'orderdetails'")->rowCount() > 0;
    if ($tableExists) {
        //Truncate the table
        $stmt = $pdo->prepare("truncate table orderdetails");
        $stmt->execute();
    } else {
        throw new Exception("The table 'orderdetails' does not exist in the database.");
    }

    //Insert the data
    $sql = 'INSERT INTO orderdetails (orderNumber, productCode, quantityOrdered, priceEach, orderLineNumber) VALUES (:orderNumber, :productCode, :quantityOrdered, :priceEach, :orderLineNumber)';
    $stmt = $pdo->prepare($sql);

    for ($i=0; $i < $count; $i++) {
        
        $stmt->execute([
            ':orderNumber' => $faker->numberBetween(1000, 9999),
            // productCode with string and number
            ':productCode' => $faker->randomElement(array('AM_1', 'AM_2', 'AM_3', 'AM_4', 'AM_5', 'AM_6', 'AM_7', 'AM_8', 'AM_9', 'AM_10', 'AM_11', 'AM_12', 'AM_13', 'AM_14', 'AM_15', 'AM_16', 'AM_17', 'AM_18', 'AM_19', 'AM_20', 'AM_21', 'AM_22', 'AM_23', 'AM_24', 'AM_25', 'AM_26', 'AM_27', 'AM_28', 'AM_29', 'AM_30', 'AM_31', 'AM_32', 'AM_33', 'AM_34', 'AM_35', 'AM_36', 'AM_37', 'AM_38', 'AM_39', 'AM_40', 'AM_41', 'AM_42', 'AM_43', 'AM_44', 'AM_45', 'AM_46', 'AM_47', 'AM_48', 'AM_49', 'AM_50', 'AM_51', 'AM_52', 'AM_53', 'AM_54', 'AM_55', 'AM_56', 'AM_57', 'AM_58', 'AM_59', 'AM_60', 'AM_61', 'AM_62', 'AM_63', 'AM_64', 'AM_65', 'AM_66', 'AM_67', 'AM_68', 'AM_69')),
            ':quantityOrdered' => $faker->numberBetween(1, 100),
            ':priceEach' => $faker->numberBetween(1, 100),
            ':orderLineNumber' => $faker->numberBetween(1, 100),
        ]);
    }
    echo "Data inserted successfully";
    
} catch (PDOException $e) {
    echo $e->getMessage();
}