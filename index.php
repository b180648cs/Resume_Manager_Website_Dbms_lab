<?php
 if(isset($_POST['name']))
 {
 $connect=mysqli_connect('localhost','root','','resume');
  $insert=false;
 //check connection
  if(mysqli_connect_errno($connect))
  {
     echo 'Failed to connect to database: '.mysqli_connect_error();
 }
 else
     //echo 'Connected Successfully!!';

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $date=$_POST['date'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];
    $hosteller = $_POST['hosteller'];
    $ref=$_POST['ref'];
    $sgpa1=$_POST['sgpa1'];
    $sgpa2=$_POST['sgpa2'];
    $sgpa3=$_POST['sgpa3'];
    $sgpa4=$_POST['sgpa4'];
    $sgpa5=$_POST['sgpa5'];
    $sgpa6=$_POST['sgpa6'];
    $sgpa7=$_POST['sgpa7'];
    $sgpa8=$_POST['sgpa8'];
    $cgpa=$_POST['cgpa'];
    $address=$_POST['address'];
    $sql = "INSERT INTO `resume`.`resume_table` (`name`, `roll`, `date`, `address`, `mob`, `email`, `hobby`,`hosteller`,`ref`,`sgpa1`,`sgpa2`,`sgpa3`,`sgpa4`,`sgpa5`,`sgpa6`,`sgpa7`,`sgpa8`,`cgpa`)     
    VALUES ('$name', '$roll', '$date', '$address', '$mobile', '$email','$hobby','$hosteller','$ref','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$cgpa' );";
    // echo $sql;

    // Execute the query
    if($connect->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $result='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Form</strong> Suceesfully submitted.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
        echo "ERROR: $sql <br> $connect->error";
    }

    // Close the database connection
    $connect->close();
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
    <title>Hello, world!</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Resume Manager Nitc</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home.html">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="search.php">Search Resume<span class="sr-only">(current)</span></a>
          </li>
         
         
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1000x300/?resume,water" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>WELCOME TO NITC RESUME MANAGER</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1000x300/?resume,science" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Create Best Resume.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1000x300/?resume,technology" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Find Nitcs Best Resumes.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div class="box" style="width: 80%;  margin: auto;" >
      <h3 style="font-style: italic;color: blueviolet;">Create a resume</h3>
      <form action="index.php" method="post">
        <input type="text" id="name" name="name" placeholder="Enter your name" />
        <input type="text" id="roll" name="roll" placeholder="Enter your Roll number" />
        <input type="date" id="date"  name="date" placeholder="Choose date" />
        <input type="text" id="address" name="address" placeholder="Give your address" />
        <input type="number" id="mobile" name="mobile" placeholder="Enter your Mobile no" />
        <input type="text" id="email"  name="email" placeholder="Enter your email" />
        <input type="text" id="hobby" name="hobby" placeholder="Enter your hobby" />
        <input type="text" id="hosteller" name="hosteller" placeholder="Are you hosteller" />
        <input type="text" id="ref"  name="ref" placeholder="Enter yours references" />
        <input type="number" id="sgpa1" step="0.01" name="sgpa1"placeholder="Enter your sgpa1" />
        <input type="number" id="sgpa2" name="sgpa2" step="0.01" placeholder="Enter your sgpa2" />
        <input type="number" id="sgpa3" name="sgpa3"  step="0.01" placeholder="Enter your sgpa3" />
        <input type="number" id="sgpa4" name="sgpa4"step="0.01" placeholder="Enter your sgpa4" />
        <input type="number" id="sgpa5" name="sgpa5" step="0.01" placeholder="Enter your sgpa5" />
        <input type="number" id="sgpa6" name="sgpa6" step="0.01" placeholder="Enter your sgpa6" />
        <input type="number" id="sgpa7"  name="sgpa7" step="0.01" placeholder="Enter your sgpa7" />
        <input type="number" id="sgpa8"  name="sgpa8" step="0.01" placeholder="Enter your sgpa8" />
        <input type="number" id="cgpa"  name="cgpa" step="0.01" placeholder="Enter your cgpa" />
        <input type="submit" value="submit"/>
        <input type="submit" value="reset"/>
        <input type="submit" value="update" />

      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
