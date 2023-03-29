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
    <link rel="stylesheet" href="./Transactions.css">
</head>
<body>
    <nav>
        <div class="container">
            <img src="./images/logo.png" class="logo">
         <div class="profile-area">
            <div class="profile">
                <div class="profile-photo">
                    <img src="./images/profile.jpg">
                </div>
                <h5>Panthala Rajan</h5>
                <span class="material-symbols-sharp">expand_more</span>
            </div>
            <button id="menu-btn">
                <span class="material-symbols-sharp">menu</span>
            </button>
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
                    <span class="material-symbols-sharp">dashboard</span>
                    <h4>Dashboard</h4>
                </a>
                <a href="./investments.php">
                    <span class="material-symbols-sharp">monetization_on</span>
                    <h4>Investments</h4>
                </a>
                <a href="./services.php">
                    <span class="material-symbols-sharp">shield</span>
                    <h4>Services</h4>
                </a>
                <a href="./wallet.php">
                    <span class="material-symbols-sharp">account_balance_wallet</span>
                    <h4>Wallet</h4>
                </a>
                <a href="./transactions.php" class="active">
                    <span class="material-symbols-sharp">credit_card</span>
                    <h4>Transactions</h4>
                </a>
                <!-- <a href="./Analytics.html">
                    <span class="material-symbols-sharp">pie_chart</span>
                    <h4>Analytics</h4>
                </a>
                <a href="./Help Center.html">
                    <span class="material-symbols-sharp">help_center</span>
                    <h4>Help Center</h4>
                </a>
                <a href="./Settings.html">
                    <span class="material-symbols-sharp">settings</span>
                    <h4>Settings</h4>
                </a> -->
            </div>

        </aside>

        <section class="right">
                <div class="header">
                    <h2>Recent Transactions</h2>
                </div>
            <div class="investments">
                <div class="investment">
                  <div class="date-time">
                    <div class="bonds">
                      <div class="amount">
                        <?php
                             // Include config file
                             require_once "config.php";
                    
                             // Attempt select query execution
                             $sql = "SELECT * FROM myinvestments";
                             if($result = $mysqli->query($sql)){
                             if($result->num_rows > 0){
                              echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Name</th>";
                                        echo "<th>Product Type</th>";
                                        echo "<th>Currency</th>";
                                        echo "<th>Investment</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['producttype'] . "</td>";
                                        echo "<td>" . $row['currency'] . "</td>";
                                        echo "<td>" . $row['investment'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                              echo "</table>";
                             // Free result set
                             $result->free();
                             } else{
                              echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                              }
                              } else{
                              echo "Oops! Something went wrong. Please try again later.";
                              }
                    
                               // Close connection
                              $mysqli->close();
                        ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </section>

    </main>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./main.js"></script> -->

</body>
</htmI>
