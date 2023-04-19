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
            width: 1300px;
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

                <h2 class="mt-5">Investments</h2>
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Investment Name</th>
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
                        $result=mysqli_query($con,"select * from investment")or die ("query 2 incorrect.......");

                        while(list($id, $name, $riskrating, $producttype, $instrument, $sector, $region, $country,  $currency, $content, $investment)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$name</td><td>$riskrating</td><td>$producttype</td><td>$instrument</td><td>$sector</td><td>$region</td><td>$country</td><td>$currency</td><td>$content</td><td>$investment</td>";

                        echo"<td>
                        <a href='buy.php?id=$id&action=insert' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm'>
                                <span class='material-icons-sharp'>shopping_bag</span></a>
                        </td></tr>";
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