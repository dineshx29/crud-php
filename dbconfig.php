<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "employee_management";

try {
    $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db_con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db_con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    // Test the connection
    $db_con->query("SELECT 1");
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?> 