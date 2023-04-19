<?php
session_start();
include "db.php";
include "sidenav.php";
?>

<!DOCTYPE html> 
<htmI lang="en">

<body>

    <main>
        

        <section class="right">
                <div class="header">
                    <h2>My Investments & Services</h2>
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
                                        echo "<th>Instrument</th>";
                                        echo "<th>Sector</th>";
                                        echo "<th>Region</th>";
                                        echo "<th>Country</th>";
                                        echo "<th>Currency</th>";
                                        echo "<th>Investment</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['producttype'] . "</td>";
                                        echo "<td>" . $row['instrument'] . "</td>";
                                        echo "<td>" . $row['sector'] . "</td>";
                                        echo "<td>" . $row['region'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
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

        </section>

    </main>

</body>
</html>