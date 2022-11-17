<?php
$severname='localhost';
$user='anyx'; //this is the user for our DB
$password='nas422'; // password for DB 
$database='addresses'; //DB, will hold client info

//creating the connection

$connection = new mysqli($severname,$user,$password,$database);

//checking for connection 
if ($connection->connect_error){
    die("connection failed:" . $connection->connect_error);
} 

$name = ""; //name 
$address = ""; //address 
$city = ""; //city
$state = "";//state
$zip = ""; //zip 
$phonenumber= ""; //phone#
$id = ""; //id 

if(isset($_GET["ID"])){

    if(!isset($_GET["ID"])){
        header("location: test.php");
        exit; 
    }
    $id =$_GET["ID"];
    $sql = "SELECT * FROM addresses.customers WHERE ID = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row){
        header("location: test.php"); 
        exit; 
    }
    $name = $row["NAME"]; 
    $address = $row ["ADDRESS"]; 
    $city = $row ["CITY"]; 
    $state= $row ["STATE"]; 
    $zip = ["ZIP"]; 
    $phonenumber= ["PHONENUMBER"];
    $id = ["ID"];

}

    else {
        $name = $row["NAME"]; 
        $address = $row ["ADDRESS"]; 
        $city = $row ["CITY"]; 
        $state= $row ["STATE"]; 
        $zip = ["ZIP"]; 
        $phonenumber= ["PHONENUMBER"];
        $id = ["ID"];
    }
//code will connect to DB, applied all columns 
//code should allow us to edit items from customers table 
?>

<input type ="hidden" value="<?php echo $id; ?>">
