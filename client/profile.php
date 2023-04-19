<?php
session_start();
include "db.php";
$user_id=$_REQUEST['user_id'];

$result=mysqli_query($con,"select id, firstname, lastname, password_hash from client where id='$user_id'")or die ("query 1 incorrect.......");

list($firstname, $lastname, $password_hash)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password_hash=$_POST['password_hash'];

mysqli_query($con,"update `client` set firstname='$firstname', lastname='$lastname', $password_hash='$password_hash' where id='$user_id'")or die("Query 2 is inncorrect..........");

header("location: profile.php");
mysqli_close($con);
}
//include "sidenav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Details</title>
    <link rel="stylesheet" href="./styless.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

      <div class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 ">
             <h2 class="mt-5">Update Details</Details></h2>
              <form action="profile.php" name="form" method="post" enctype="multipart/form-data">
               <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>" />
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" id="firstname" name="firstname"  class="form-control" value="<?php echo $firstname; ?>" >
                      </div>
                    
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" id="lastname" name="lastname"  class="form-control" value="<?php echo $lastname; ?>" >
                      </div>

                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" id="password_hash" name="password_hash"  class="form-control" value="<?php echo $password_hash; ?>" >
                      </div>

                      <input type="submit" id="btn_save" name="btn_save" class="btn btn-primary" value="Update">
              </form> 
            </div>
        </div>  
        </div>
      </div>
</body>
</html>      