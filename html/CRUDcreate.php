
<?php
include 'test.php';
if(isset($_POST['submit'])){

    $song= $_POST['song'];
    $artist=$_POST['artist'];
    $release_year=$_POST['year'];
    $connection = new mysqli($severname,$user,$password,$database);
    require_once("test.php");
    $sql = "INSERT INTO soundtrack.music (song, artist, release_year) VALUES ('$song','$artist', '$release_year')";
    $connection->query($sql);

    if($result){

        echo "DATA INSERTED SUCCESS";
    }else {

        die(mysqli_error());
    }
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <title>CRUD OPERATION</title>
 </head>

  <body>

      <div class= "container">
           <form method="post">
               <div class="form-group">
                    <labe>SONG:</label>
                    <input type="text" class="form-control"  placeholder="Enter song" name="song">
                 </div> 

                 <div class="form-group">
                    <labe>ARTIST:</label>
                    <input type="text" class="form-control"  placeholder="Enter artist" name="artist">
                 </div> 

                 <div class="form-group">
                    <labe>YEAR:</label>
                    <input type="number" class="form-control"  placeholder="Enter year" name="year">
                 </div>  

                 <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
                
              
            
            </form>
        
        
        </div>
    </body>
   
</html>  


