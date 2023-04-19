<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
    <title>Register Page</title>
</head>

<body>    
    <div class="login-card-container">
        <div class="login-card">
            <!-- <div class="login-card-logo">
                <img src="./images/logo.jpeg" alt="logo">
            </div> -->
            <div class="login-card-header">
                <h1>Register</h1>
                <div>SignUp for a free account</div>
            </div>
            <form action="Demo.php" method="post" class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">account_circle</span>
                    <input type="text" name="firstname" placeholder="Enter Firstname">
                </div>

                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">account_circle</span>
                    <input type="text" name="lastname" placeholder="Enter Lastname">
                </div>

                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" name="email" placeholder="Email Address">
                </div>

                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password" placeholder="Create Password">
                </div>

                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="cpassword" placeholder="Confirm Password">
                </div>
                <div class="form-item-other">
                </div>
                <button type="submit">Register</button>
            </form>
            <div class="login-card-footer">
            </div>
        </div>
    </div>

</body>

</html>