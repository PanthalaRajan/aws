<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: loggin.php');
	exit;
}
?>
<!DOCTYPE html> 
<htmI lang="en">
<head> 
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Dashboard.css">
</head>

<body>
  <nav>
        <div class="container">
            <img src="./images/logo 1.png" class="logo">
         <div class="profile-area">
            <div class="profile">
                <!-- <div class="profile-photo">
                    <img src="./images/profile.jpg">
                </div> -->
                <h4>
                    Welcome Back! <?php echo($_SESSION['email']); 
                    ?>
                </h4>
            </div>
        </div>
      </div>
    </nav>

    <main>
        <aside>
            <button id="close-btn">
                <span class="material-symbols-sharp">close</span>
            </button>

            <div class="sidebar">
                <a href="./dashboard.php">
                    <span class="material-symbols-sharp">home</span>
                    <h4>Home</h4>
                </a>
                <a href="./userProfile.php">
                    <span class="material-symbols-sharp">person</span>
                    <h4>User Profile</h4>
                </a>
                <a href="./investments.php">
                    <span class="material-symbols-sharp">monetization_on</span>
                    <h4>Investments</h4>
                </a>
                <a href="./services.php">
                    <span class="material-symbols-sharp">shield</span>
                    <h4>Services</h4>
                </a>
                <a href="./note.php">
                    <span class="material-symbols-sharp">notifications_active</span>
                    <h4>Notifications</h4>
                </a>
                <a href="./logout.php">
                <span class="material-symbols-sharp">logout</span>
                    <h4>Logout</h4>
                </a>
            </div>

        </aside>
</body>
</html>
    