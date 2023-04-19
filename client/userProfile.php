<?php
    include "db.php";
    include "sidenav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="./styless.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <style>
        .row{
            width: 700px;
            margin-top: 1.5rem;
        }

    </style>
</head>
<body>
    <!-- <header>
        <?php
            include('../includes/navigation.php');
        ?>
    </header> -->

    <div align="center">
       <hr>
            <h2>Update User Information</h2>
       <hr>
        <div class="row">
            <div class="col-md-6 offset-3">
                <!-- <?php
                if($_GET['success']){
                    if($_GET['success'] == 'userUpdated'){
                        ?>
                        <small class="alert alert-success"> User updated Successfully</small>
                        <hr>
                        <?php
                    }
                }


                if(isset($_GET['error'])){

                    if($_GET['error'] == 'emptyNameAndEmail'){
                        ?>
                        <small class="alert alert-danger"> Name and email is required</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileType'){
                        ?>
                        <small class="alert alert-danger"> Invalid file type, Only Images allowed.</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileSize'){
                        ?>
                        <small class="alert alert-danger"> Maximum 5mb Image size allowed.</small>
                        <hr>
                        <?php
                    }
                }
                ?> -->
                <form action="userProfileUpdateProcess.php"
                      method="POST"
                      enctype="multipart/form-data"
                >
                    <?php
                        $currentUser = $_SESSION['email'];
                        $sql = "SELECT * FROM client WHERE email ='$currentUser'";

                        $gotResuslts = mysqli_query($con,$sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                    //print_r($row['firstname']);
                                    ?>
                                        <div class="form-group">
                                            <input type="text" name="updateUserFirstName" class="form-control" value="<?php echo $row['firstname']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="updateUserLastName" class="form-control" value="<?php echo $row['lastname']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="userEmail" class="form-control" value="<?php echo $row['email']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="userPassword" class="form-control" value="<?php echo $row['password']; ?>">
                                        </div>

                                        <!-- <div class="form-group">
                                            <input type="file" name="userImage" class="form-control">
                                        </div> -->

                                        <div class="form-group">
                                            <input type="submit" name="update"  class="btn btn-info" value="Update">
                                            <a href="dashboard.php" class="btn btn-secondary ml-2">Cancel</a>
                                        </div>
                                    <?php
                                }
                            }
                        }


                    ?>
                
                </form>
            </div>
            
        </div>


    </div>
    
</body>
</html>