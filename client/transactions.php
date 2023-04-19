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
            width: 800px;
            margin: 0 auto;
        }

    </style>
</head>

<body>
      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
              <form action="" method="post" name="form" enctype="multipart/form-data">

                <h2 class="mt-5">Recent Transactions</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Product Type</th>
      <th scope="col">Currency</th>
      <th scope="col">Investment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
                     <?php 
                        $result=mysqli_query($con,"select name, producttype, currency, investment from myinvestments")or die ("query 2 incorrect.......");

                        while(list($user_name, $user_producttype, $user_currency, $user_investment)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$user_name</td><td>$user_producttype</td><td>$user_currency</td><td>$user_investment</td>";
                        }
                        mysqli_close($con);
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