
<!DOCTYPE html> 
<html>
<head>


 <meta charset= "UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE-edge">
 <meta name= "viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


 <title>MUSIC LIST</title>
 <body style= "margin: 50PX;">
            <h1> PLAYLIST </h1>
            <br>
            <div class= "container my-5">
                <h2> List of Music </h2>
                <a class= "btn btn-primary" href="CRUDcreate.php" role="button"> ADD</a>
                <br>
            <table class= "table">
                <thread>
                    <tr>
                     <th>Item ID</th>
                     <th>SONG</th>
                     <th>Artist</th>
                     <th>Relase Year</th>
                     <th>Action</th> 
                    </tr>
                </thread>
                <tbody>

                    <?php
                    $severname='localhost';
                    $user='anyx';
                    $password='nas422';
                    $database='addresses';

                    //creating the connection

                    $connection = new mysqli($severname,$user,$password,$database);

                    //checking for connection 
                    if ($connection->connect_error){
                        die("connection failed:" . $connection->connect_error);

                    }
                    $sql= "SELECT * FROM addresses.customers";
                    $result= $connection->query($sql);

                    if(!$result) {
                         die("Invalid query:" . $connection->$error);
                     }
                    //read rows from database 
                    while($row = $result->fetch_assoc()){
                        echo"
                        <tr>
                            <td>$row[NAME]</td>
                            <td>$row[ADDRESS]</td>
                            <td>$row[CITY]</td>
                            <td>$row[STATE]</td>
                            <td>$row[ZIP]</td>
                            <td>$row[PHONENUMBER]</td>
                            <td>$row[ID]</td>

                            <td>
                                <a class='btn btn-primary btn-sm' href='edit.php?ID=$row[ID]'>edit</a>
                                <a class='btn btn-primary btn-sm' href='delete.php?ID=$row[ID]'>delete</a>
 
                            </td>
                        </tr>
                        ";
                    } 
                    ?>
                </tbody>    
            </table>
            </div>
 </body>        
</html>
 


