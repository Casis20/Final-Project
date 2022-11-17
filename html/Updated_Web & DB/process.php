<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();

$mysqli = new mysqli('localhost', 'anyx', 'nas422', 'addresses') or die(mysqli_error($mysqli));

$update = false;
$name = ""; //name 
$address = ""; //address 
$city = ""; //city
$state = "";//state
$zip = ""; //zip 
$phonenumber= ""; //phone#
//$id = ""; //id 
$id = 0;

if (isset($_POST['save'])){
    $name = $_POST['NAME'];
    $address = $_POST['ADDRESS'];
    $city = $_POST['CITY'];
    $state = $_POST['STATE'];
    $zip = $_POST['ZIP'];
    $phonenumber = $_POST['PHONENUMBER'];
    $id = $_POST['ID'];



    $mysqli->query("INSERT INTO addresses.customers (NAME, ADDRESS, CITY, STATE, ZIP, PHONENUMBER, ID) VALUES ('$name', '$address', '$city', '$state', '$zip', '$phonenumber', '$id')") or
    die($mysqli->error);

    $_SESSION['message'] = "record has been saved";
    $_SESSION['msg_type'] = "success";

    header("location: index.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM addresses.customers WHERE ID =$id") or die($mysqli->error());

    $_SESSION['message'] = "record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("location: index.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM addresses.customers WHERE ID =$id") or die($mysqli->error());
    $row = $result->fetch_array();
    $name = $row['NAME'];
    $address = $row['ADDRESS'];
    $city = $row['CITY'];
    $state = $row['STATE'];
    $zip = $row['ZIP'];
    $phonenumber = $row['PHONENUMBER'];
    $id = $row['ID'];
}

if (isset($_POST['update'])){
    $name = $_POST['NAME'];
    $address = $_POST['ADDRESS'];
    $city = $_POST['CITY'];
    $state = $_POST['STATE'];
    $zip = $_POST['ZIP'];
    $phonenumber = $_POST['PHONENUMBER'];
    $id = $_POST['ID'];

    $mysqli->query("UPDATE addresses.customers SET NAME='$name', ADDRESS='$address', CITY = '$city', STATE = '$state', ZIP = '$zip', PHONENUMBER = '$phonenumber' WHERE ID =$id") or die($mysqli->error);
    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = "warning";
    header('location: index.php');
}
?>