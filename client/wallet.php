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
    <link rel="stylesheet" href="./Wallet.css">
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
                <a href="./investments.html">
                    <span class="material-symbols-sharp">monetization_on</span>
                    <h4>Investments</h4>
                </a>
                <a href="./services.php">
                    <span class="material-symbols-sharp">shield</span>
                    <h4>Services</h4>
                </a>
                <a href="./wallet.php" class="active">
                    <span class="material-symbols-sharp">account_balance_wallet</span>
                    <h4>Wallet</h4>
                </a>
                <a href="./transactions.php">
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

        <section class="middle">
            <div class="header">
                <h1>Cards</h1>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="./images/BTC.png">
                            <h2>BTC</h2>
                        </div>
                        <img src="./images/visa.png" class="right">
                    </div>
                    <div class="middle">
                        <h1>$827,199</h1>
                        <div class="chip">
                            <img src="./images/card chip.png">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>PANTHALA RAJAN</h5>
                        </div>
                        <div class="right">
                          <div class="expiry">
                            <small>Expiry</small>
                            <h5>08/23</h5>
                          </div>
                          <div class="cvv">
                            <small>CVV</small>
                            <h5>123</h5>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="./images/ETH.png">
                            <h2>ETH</h2>
                        </div>
                        <img src="./images/master card.png" class="right">
                    </div>
                    <div class="middle">
                        <h1>$95,627</h1>
                        <div class="chip">
                            <img src="./images/card chip.png">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>PANTHALA RAJAN</h5>
                        </div>
                        <div class="right">
                          <div class="expiry">
                            <small>Expiry</small>
                            <h5>08/23</h5>
                          </div>
                          <div class="cvv">
                            <small>CVV</small>
                            <h5>123</h5>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="./images/BTC.png">
                            <h2>ETH</h2>
                        </div>
                        <img src="./images/visa.png" class="right">
                    </div>
                    <div class="middle">
                        <h1>$78,127</h1>
                        <div class="chip">
                            <img src="./images/card chip.png">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>PANTHALA RAJAN</h5>
                        </div>
                        <div class="right">
                          <div class="expiry">
                            <small>Expiry</small>
                            <h5>08/23</h5>
                          </div>
                          <div class="cvv">
                            <small>CVV</small>
                            <h5>123</h5>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="monthly-report">
                <div class="report">
                    <h3>Income</h3>
                    <div>
                        <details>
                            <h1>$27,012</h1>
                            <h6 class="success">+2.7%</h6>
                        </details>
                        <p class="text-muted">Compared to 25,278
                        last month</p>
                    </div>
                </div>

                <div class="report">
                    <h3>Turnover</h3>
                    <div>
                        <details>
                            <h1>$127,812</h1>
                            <h6 class="success">-7.8%</h6>
                        </details>
                        <p class="text-muted">Compared to 136,278
                        last month</p>
                    </div>
                </div>

            </div> -->

            <!-- <canvas id="chart"></canvas> -->

        </section>

        <!-- <section class="right">
            <div class="investments">
                <div class="header">
                    <h2>Investments</h2>
                    <a href="#">More <span class="material-symbols-sharp">chevron_right</span></a>
                </div>

                <div class="investment">
                    <img src="./images/uniliver.png">
                    <h4>Uniliver</h4>
                    <div class="date-time">
                        <p>12 Nov, 2022</p>
                        <small class="text-muted">9:12pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$20,033</h4>
                        <small class="danger">-4.27%</small>
                    </div>
                </div>

                <div class="investment">
                    <img src="./images/tesla.png">
                    <h4>Tesla</h4>
                    <div class="date-time">
                        <p>12 Nov, 2022</p>
                        <small class="text-muted">9:12pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$20,033</h4>
                        <small class="success">+12.57%</small>
                    </div>
                </div>

                <div class="investment">
                    <img src="./images/monster.png">
                    <h4>Monster</h4>
                    <div class="date-time">
                        <p>12 Nov, 2022</p>
                        <small class="text-muted">9:12pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$20,033</h4>
                        <small class="success">+6.18%</small>
                    </div>
                </div>

                <div class="investment">
                    <img src="./images/mcdonalds.png">
                    <h4>McDonalds</h4>
                    <div class="date-time">
                        <p>12 Nov, 2022</p>
                        <small class="text-muted">9:12pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$20,033</h4>
                        <small class="danger">-9.15%</small>
                    </div>
                </div>
            </div> -->

            <!-- <div class="recent-transactions">
                <div class="header">
                    <h2>Recent Transactions</h2>
                    <a href="#">More <span class="material-symbols-sharp">chevron_right</span></a>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-purple-light">
                            <span class="material-symbols-sharp purple">headphones</span>
                        </div>
                        <div class="details">
                            <h4>Music</h4>
                            <p>12.10.2022</p>
                        </div>
                        <div class="card-details">
                            <div class="card bg-danger">
                                <img src="./images/visa.png">
                            </div>
                            <div class="details">
                                <p>*2728</p>
                                <small class="text-muted">Credit Card</small>
                            </div>
                        </div>
                        <h4>$20</h4>
                    </div>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-purple-light">
                            <span class="material-symbols-sharp purple">shopping_bag</span>
                        </div>
                        <div class="details">
                            <h4>Shopping</h4>
                            <p>18.10.2022</p>
                        </div>
                        <div class="card-details">
                            <div class="card bg-primary">
                                <img src="./images/visa.png">
                            </div>
                            <div class="details">
                                <p>*2728</p>
                                <small class="text-muted">Credit Card</small>
                            </div>
                        </div>
                        <h4>$70</h4>
                    </div>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-success-light">
                            <span class="material-symbols-sharp success">restaurant</span>
                        </div>
                        <div class="details">
                            <h4>Resturant</h4>
                            <p>20.10.2022</p>
                        </div>
                        <div class="card-details">
                            <div class="card bg-dark">
                                <img src="./images/master card.png">
                            </div>
                            <div class="details">
                                <p>*2728</p>
                                <small class="text-muted">Credit Card</small>
                            </div>
                        </div>
                        <h4>$50</h4>
                    </div>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-danger-light">
                            <span class="material-symbols-sharp danger">medication</span>
                        </div>
                        <div class="details">
                            <h4>Pharmacy</h4>
                            <p>27.10.2022</p>
                        </div>
                        <div class="card-details">
                            <div class="card bg-danger">
                                <img src="./images/visa.png">
                            </div>
                            <div class="details">
                                <p>*2728</p>
                                <small class="text-muted">Credit Card</small>
                            </div>
                        </div>
                        <h4>$27</h4>
                    </div>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-danger-light">
                            <span class="material-symbols-sharp danger">sports_esports</span>
                        </div>
                        <div class="details">
                            <h4>Games</h4>
                            <p>28.10.2022</p>
                        </div>
                        <div class="card-details">
                            <div class="card bg-dark">
                                <img src="./images/master card.png">
                            </div>
                            <div class="details">
                                <p>*2728</p>
                                <small class="text-muted">Credit Card</small>
                            </div>
                        </div>
                        <h4>$18</h4>
                    </div>
                </div> -->

            </div>

        </section>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./main.js"></script>

</body>
</htmI>
