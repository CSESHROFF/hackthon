
<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php
include 'nav.php';
?>
<h2>Login Form</h2>

<form action="/action_page.php" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="psw"><b>Phone number</b></label>
    <input type="password" placeholder="Enter Password" name="contact" required>
        
    <input type="submit" name="submit">
    
  </div>

</form>
<?php
        include 'footer.php';
        ?>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['contact'];

    $query= "SELECT * FROM user WHERE name='$name' AND  contact='$phone'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:index3.php");
    }
    else{
        header("location:register1.php");
    }


    }



?>
