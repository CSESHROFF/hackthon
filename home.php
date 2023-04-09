<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: ../index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: ../index.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
        
        
        
      <div class="container">
         <div class="form">
        <p>Hey, <?php echo $_SESSION['fname']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Admin Waste Management System</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
            <td> User ID </td>
                  <td> Full Name: </td>
                  <td> Phone Number: </td>
                  <td> Your Address: </td>
                     <td> Quantity: </td>
                    <td> Want To Donate:</td>
                  <td> Food Types: </td>
                 <td> Additional Note: </td>
                    <td> Time: </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['country']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['languages']; ?></td>
                  <td><?php echo $row['note']; ?></td>
                 <td><?php echo $row['time']; ?></td>
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
        
        
    </body>
</html>