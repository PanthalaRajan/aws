<!-- <?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/Demodb.php";
    
    $sql = sprintf("SELECT * FROM client
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);
    
    $client = $result->fetch_assoc();

    
    
    if ($client) {
        
        if (password_verify($_POST["password"], $client["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $client["id"];
            
            header("Location: dashboard.php");
            exit;
        }
    }
 
    
    $is_invalid = true;
}
?> -->

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="Login.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
    <title>Login Page</title>
</head>
<body>
    
    <div class="login-card-container">
        <div class="login-card">
            <!-- <div class="login-card-logo">
                <img src="" alt="logo">
            </div> -->
            <div class="login-card-header">
                <h1>Welcome Back</h1>
                <div>Please login with your username and password</div>
            </div>

            <!-- <?php if ($is_invalid): ?>
                <em>Invalid login</em>
            <?php endif; ?> -->

            <form method="post" class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">account_circle</span>
                    <input type="text" id="email" name="email" placeholder="Enter Username"
                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" check>
                        <label for="rememberMeCheckbox">Remember me</label>
                    </div>
                    <a href="#">Forgot your password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="login-card-footer">
                Don't have an account? <a href="./Register.html">SignUp now.</a>
            </div>
        </div>
    </div>

</body>

</html>