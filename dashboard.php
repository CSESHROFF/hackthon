
<?php 


/*require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/

include 'connect.php';
function dispaly_data(){
  global $conn;
  $query = "select * from user";
  $result = mysqli_query($conn,$query);
  return $result;
}

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Waste Management System</title>
</head>
<body >
  <?php
  include 'nav.php';
  ?>
    <div class="container">
         <div class="form">
        <p><a href="../index.php">Logout</a></p>
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
                     
                  <td> Food Types: </td>
                 
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['contact']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['waste']; ?></td>
                  
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
    <?php
        include 'footer.php';
        ?>
</body>
</html>