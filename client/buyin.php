<?php
// Include config file
include "db.php";
 
// Define variables and initialize with empty values
$name = $riskrating = $producttype = $instrument = $sector = $region = $country = $currency = $content = $investment = "";
$name_err = $riskrating_err = $producttype_err = $instrument_err = $sector_err = $region_err = $country_err = $currency_err = $content_err = $investment_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    // Validate investment
    $input_investment = trim($_POST["investment"]);
    if(empty($input_investment)){
        $investment_err = "Please enter an investment.";     
    } else{
        $investment = $input_investment;
    }
    
    // Check input errors before inserting in database
    if(empty($investment_err)){
        // Prepare an update statement
        $sql = "INSERT INTO myinvestments SET investment=?";
 
        if($stmt = $con->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $investment);
            $sql1 = "SELECT name, riskrating, producttype, instrument, sector, region, country, currency, content FROM investment where id = $id";
            $stmt = $con->prepare($sql1);
            // $stmt->bind_param('i', $_POST["id"]);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($name, $riskrating, $producttype, $instrument, $sector, $region, $country, $currency, $content);

            // Set parameters
            $name = $name;
            $riskrating = $riskrating;
            $producttype = $producttype;
            $instrument = $instrument;
            $sector = $sector;
            $region = $region;
            $country = $country;
            $currency = $currency;
            $content = $content;
            $investment = $investment;
            $id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
                    // Get URL parameter
                    $id =  trim($_GET["id"]);
                }
                // Records updated successfully. Redirect to landing page
                header("location: dashboard.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $con->close();
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT investment FROM investment WHERE id = ?";
        if($stmt = $con->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                $result = $stmt->get_result();
                
                if($result->num_rows == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    // $name = $row["name"];
                    // $riskrating = $row["riskrating"];
                    // $producttype = $row["producttype"]; 
                    // $instrument = $row["instrument"]; 
                    // $sector = $row["sector"]; 
                    // $region = $row["region"];   
                    // $country = $row["country"];
                    // $currency = $row["currency"];
                    // $content = $row["content"];
                    $investment = $row["investment"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: dashboard.php");
                    exit();
                }
        
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
        
        // Close connection
        $con->close();
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Investment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        input[type=submit] {
          background-color: #45a049;
          color: white;
          margin: 4px 0;
          padding: 7px 12px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        } 

        input[type=submit]:hover {
         background-color: #4CAF50;
       }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Enter Investment Amount</h2>
                    <!-- <p>Please edit the input values and submit to approve the idea.</p> -->
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Investment</label>
                            <input type="text" name="investment" class="form-control <?php echo (!empty($investment_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $investment; ?>">
                            <span class="invalid-feedback"><?php echo $investment_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Buy">
                        <a href="investment.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>