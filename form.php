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
        }
        .container{
            background-color:white;
            padding: 5px 20px 15px 20px;
            border: 1px solid hotpink;
            border-radius: 4px;
        }
        
        input("")


    </style>
</head>
<body>
    <div class="container">
    <form action="">
    <h1>Registration form</h1>
    <h2>Basic Information</h2>
    <p>Name: <input type="text" name="name" id="Name"  placeholder="write name" required> </p>
    <p>Address: <textarea  name="address" id="adress" col="50" row="50" placeholder="write your address"></textarea></p>
    <p>Email: <input type="email" name="Email" id="email" placeholder="'write your email"></p>
    <p>Phone Number: <input type="number" name="number" id="number" placeholder="enter phonenumber"></p>
    <p>Pincode: <input type="number" name="pin" id="pinnumber" placeholder="enter pincode"></p>
    <h2><b>Waste Type</b></h2>
    <p>Wastetype
        <select name="card_type" id="card_type">
        <option vlaue="">---select type of waste</option>
        <option value="visa">Solid WASTE</option>
        <option value="mastercard">Liquid Waste</option>
        <option value="rupay">Others</option>
        </select>
    </p>
 
    <input type="submit"  value="SUBMIT">
    </form>
    </div>
</body>
</html>