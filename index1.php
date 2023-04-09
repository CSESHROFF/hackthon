
<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Waste management</title>
        <link rel="stylesheet" href="style.css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Waste Manage</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Aim</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Service
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Food Waste</a></li>
                  <li><a class="dropdown-item" href="#">Liquid Waste</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">other</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About us</a>
              </li>
            </ul>
            <nav class="navbar navbar-light bg-light">
              <div class="container">
                <a class="navbar-brand" href="#">
                  <img src="Waste-Management-Logo.png" alt="" width="50" height="35">
                </a>
              </div>
            </nav>
          </div>
        </div>
      </nav>
      <div class="form-box"></div>

      <form action="" method="POST">
        
        <div class="mb-3">
          <label for="formFile" class="form-label">Name</label>
          <input class="form-control" type="text" name="name" id="formFile" required>
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Contact Number</label>
          <input class="form-control" type="number" name="contact" id="formFileMultiple" multiple required>
        </div>
        <div class="mb-3">
          <label for="formFileDisabled" class="form-label">Address</label>
          <input class="form-control" type="text" name="address" id="formFileDisabled"  required>
        </div>
        <div class="mb-3">
          <select class="form-select" name="waste" aria-label="Default select example">
            <option selected value="not selected">Waste Type</option>
            <option value="food_waste">Food Waste</option>
            <option value="Liquid_waste">Liquid Waste</option>
            <option value="other">Other</option>
          </select>
        </div>
        <input type="submit" class="btn btn-primary"  style="margin-left: 50%;" name="submit">
      </form>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>

<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $waste=$_POST['waste'];

    
    
    $query = "INSERT INTO user(name,contact,address,waste) values('$name', '$contact', '$address','$waste')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted";
    }
    else{
        echo "failed";
    }
    
    

    

}

?>