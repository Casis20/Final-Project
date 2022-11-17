<?php 
if (isset($_GET["ID"])){

    $id = $_GET["ID"];

    $severname='localhost';
    $user='anyx';
    $password='nas422';
    $database='addresses';

    //creating the connection
    $connection = new mysqli($severname,$user,$password,$database);


    //Delete from table 

    $sql = "DELETE FROM addresses.customers WHERE ID=$id";
    $connection->query($sql);
}

header("location:test.php");

exit;
?>
