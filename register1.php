<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER INPUT</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body{
            font-family:Arial, Helvetica, sans-serif;
            margin: 15px 30px;
            font-size: 17px;
            padding: 8px;
            width:100%;
            height:auto;
            background-image: linear-gradient(45deg,#42cb84 0%,#ddc0bf 100%);
            background-color: rgb(0, 0, 0);
        }
        .container{
            background-color:rgba(83,121,138,.5);
            width:300px;
            height:auto;
            padding: 5px 20px 15px 20px;
            border: 1px solid hotpink;
            border-radius: 4px;
        }
        
        input("")


    </style>
</head>
<body >
    <?php
    include 'nav.php';
    ?><br><br><br>
    <div class="container">
    <form action="" method="Post">
    <h1>Registration form</h1>
    <h2>Basic Information</h2>
    <p>Name: <input type="text" name="name" id="Name"  placeholder="write name" required> </p>
    <p>Address: <textarea  name="address" id="adress" col="50" row="50" placeholder="write your address"></textarea></p>
    
    <p>Phone Number: <input type="number" name="number" id="number" placeholder="enter phonenumber"></p>
    
    <h2><b>Waste Type</b></h2>
    <p>Wastetype
        <select name="waste" id="card_type">
        <option vlaue="foodwsate">---select type of waste</option>
        <option value="other">Solid WASTE</option>
        <option value="liquid">Liquid Waste</option>
        
        </select>
    </p>
 
    <input type="submit" name="submit"  value="SUBMIT">
    </form>
    </div><br><br><br>
    <?php
        include 'footer.php';
        ?>
</body>
</html>


<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['number'];
    
    $waste=$_POST['waste'];

    
    
    $query = "INSERT INTO user(name,contact,address,waste) values('$name', '$contact', '$address','$waste')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        header("location:index3.php");
    }
    else{
        echo "Please enter valid data";
        header("location:register1.php");
    }
    
    

    

}

?>