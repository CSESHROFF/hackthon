<?php
error_reporting(0);
include "connect.php";


if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from admin where name='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location:../dashboard.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
    <head>
        <title>Create simple login page with PHP and MySQL</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    </head>
    <?php
    include 'nav.php';
    ?>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_pwd" placeholder="phone"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
    
</html>

