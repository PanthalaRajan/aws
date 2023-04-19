<?php
include "db.php";
include "sidenav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="./styless.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        .wrapper{
            width: 900px;
            margin: 0 auto;
        }

    </style>
</head>

<body>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">

             <?php
             if(isset($_SESSION['status']))
             {
              echo $_SESSION['status'];
              unset($_SESSION['status']);
             }
             ?>

              <form action="" method="post" name="form" enctype="multipart/form-data">
                <h2 class="mt-5">My Investments</h2>
 <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Risk Rating</th>
      <th scope="col">Product Type</th>
      <th scope="col">Instrument</th>
      <th scope="col">Sector</th>
      <th scope="col">Region</th>
      <th scope="col">Country</th>
      <th scope="col">Currency</th>
      <th scope="col">Description</th>
      <th scope="col">Investment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
                <?php 
                   $result=mysqli_query($con,"select name, riskrating, producttype, instrument, sector, region, country, currency, content, investment from myinvestments")or die ("query 1 incorrect.....");

                 while(list($name,$riskrating,$producttype,$instrument,$sector,$region,$country,$currency,$content,$investment)=mysqli_fetch_array($result))
                 {	
                 echo "<tr><td>$name</td><td>$riskrating</td><td>$producttype</td><td>$instrument</td><td>$sector</td><td>$region</td><td>$country</td><td>$currency</td><td>$content</td><td>$investment</td>
                 </tr>";
                 }
                ?>
    </tr>
  </tbody>
 </table>    
              </form> 

              <form action="" method="post" name="form" enctype="multipart/form-data">
                <h2 class="mt-5">My Services</h2>
 <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Product Type</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
                <?php 
                   $result=mysqli_query($con,"select name, producttype, contents from myservices")or die ("query 1 incorrect.....");

                 while(list($name,$producttype,$contents)=mysqli_fetch_array($result))
                 {	
                 echo "<tr><td>$name</td><td>$producttype</td><td>$contents</td>
                 </tr>";
                 }
                ?>
    </tr>
  </tbody>
 </table>    
              </form>

            </div>
        </div>  
        </div>
      </div>
</body>
</html>


