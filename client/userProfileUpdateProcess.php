<?php
session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){

        include "db.php";

         $userNewFirstName  =    $_POST['updateUserFirstName'];
         $userNewLastName  =    $_POST['updateUserLastName'];
         $userNewEmail =    $_POST['userEmail'];
         $userNewPassword =    $_POST['userPassword'];

        if(!empty($userNewFirstName) && !empty($userNewLastName) && !empty($userNewEmail) && !empty($userNewPassword)){

                        $loggedInUser = $_SESSION['email'];
                        
                        $sql = "UPDATE client SET firstname = '$userNewFirstName', lastname = '$userNewLastName', email ='$userNewEmail', password ='$userNewPassword' WHERE email = '$loggedInUser'";

                        $results = mysqli_query($con,$sql);

                        $_SESSION['status']= "Details Updated Successfully";
                        header('Location: dashboard.php?success=userUpdated');
                    exit;
                    }

}

?>