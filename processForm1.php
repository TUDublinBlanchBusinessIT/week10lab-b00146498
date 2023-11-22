<?php
$fn = $_POST['FN'];
$sn = $_POST['SN'];

echo "$fn $sn<br>";
session_start();

$_SESSION['passengerFN'] = $fn; 
$_SESSION['passengerSN'] = $sn; 

if (isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 1;
    header("Location: luggage.html"); 
    exit();
} else {
    $_SESSION['luggage'] = 0;
    header("Location: finalStep.php"); 
    exit();
}
?>

