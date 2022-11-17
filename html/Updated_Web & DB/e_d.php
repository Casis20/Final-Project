<!doctype html>
<html lang="en">
<div class="header">
  <h1 style="color:red;text-align:center;">ANYX</h1>
</div>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  

    <!-- Bootstrap -->
    <link href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity=
    "sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
    crossorigin="anonymous" />
    </head>
  <body>
  <?php require_once 'process.php'; ?>  
  <?php 
    if (isset($_SESSION['message'])): ?>
    
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
    <?php endif ?>
  <?php
    $mysqli = new mysqli('localhost', 'anyx', 'nas422', 'addresses') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM addresses.customers") or die($mysqli->error);
    //pre_r($result);



    function pre_r($array) {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }
  ?>
  <div class="d-flex justify-content-center">
  </head>
<body>


<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>name</th>
         <th>address</th>
         <th>city</th>
         <th>state</th>
         <th>zip</th>
         <th>phone number</th>
         
         <th></th>

    </thead>
    <tbody>

    <?php
    while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?php echo $row['NAME']; ?> </td>
        <td><?php echo $row['ADDRESS']; ?> </td>
        <td><?php echo $row['CITY']; ?> </td>
        <td><?php echo $row['STATE']; ?> </td>
        <td><?php echo $row['ZIP']; ?> </td>
        <td><?php echo $row['PHONENUMBER']; ?> </td>
        <td>
          <a href="index.php?edit=<?php echo $row['ID']; ?>"
          class = "btn btn-success">Edit</a>
          <a href="process.php?delete=<?php echo $row['ID']; ?>"
          class = "btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php endwhile;?>
    </table>
  </div>

    <div class="d-flex justify-content-center">
    <form action="process.php" method="POST">
      <input type = "hidden" name = "ID" value = "<?php echo $id;?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="NAME" class="form-control" value="<?php echo $name; ?>" placeholder="Enter NAME">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="ADDRESS" class="form-control" value="<?php echo $address; ?>" placeholder="Enter ADDRESS">
      </div> 
      <div class="form-group">
      <label>City</label>
        <input type="text" name="CITY" class="form-control" value="<?php echo $city; ?>" placeholder="Enter CITY">
      </div>


      <div class="form-group">
      <label>State</label>
        <input type="text" name="STATE" class="form-control" value="<?php echo $state; ?>" placeholder="Enter STATE">
      </div>


      <div class="form-group">
      <label>Zip</label>
        <input type="text" name="ZIP" class="form-control" value="<?php echo $zip; ?>" placeholder="Enter ZIP">
      </div>

      <div class="form-group">
      <label>Phone Number</label>
        <input type="text" name="PHONENUMBER" class="form-control" value="<?php echo $phonenumber; ?>" placeholder="Enter PHONENUMBER">
      </div>



      


      <div class="form-group">
        <?php if ($update ==true): 
          ?>
          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <?php else: ?>
          <button type="submit" class="btn btn-primary" name="save">Save</button>
          <?php endif; ?>
      </div>
    </form>
    </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>