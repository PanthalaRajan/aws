<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $producttype = $instrument = $sector = $region = $country = $currency = $investment = "";
$name_err = $producttype_err = $instrument_err = $sector_err = $region_err = $country_err = $currency_err = $investment_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
    
    // Validate product type
    $input_producttype = trim($_POST["producttype"]);
    if(empty($input_producttype)){
        $producttype_err = "Please enter an product type.";     
    } else{
        $producttype = $input_producttype;
    }

    // Validate instrument
    $input_instrument = trim($_POST["instrument"]);
    if(empty($input_instrument)){
        $instrument_err = "Please enter an instrument.";     
    } else{
        $instrument = $input_instrument;
    }

    // Validate sector
    $input_sector = trim($_POST["sector"]);
    if(empty($input_sector)){
        $sector_err = "Please enter an region.";     
    } else{
        $sector = $input_sector;
    }

    // Validate region
    $input_region = trim($_POST["region"]);
    if(empty($input_region)){
        $region_err = "Please enter an region.";     
    } else{
        $region = $input_region;
    }

    // Validate country
    $input_country = trim($_POST["country"]);
    if(empty($input_country)){
        $country_err = "Please enter the country.";     
    } else{
        $country = $input_country;
    }

    // Validate currency
    $input_currency = trim($_POST["currency"]);
    if(empty($input_currency)){
        $currency_err = "Please enter the currency.";     
    } else{
        $currency = $input_currency;
    }
    
    // Validate investment
    $input_investment = trim($_POST["investment"]);
    if(empty($input_investment)){
        $investment_err = "Please enter the investment amount.";     
    } else{
        $investment = $input_investment;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($producttype_err) && empty($instrument_err) && empty($sector_err) && empty($region_err) && empty($country_err) && empty($currency_err) && empty($investment_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO myinvestments (name, producttype, instrument, sector, region, country, currency, investment) VALUES (?, ?, ?, ?, ?, ?,?,?)";
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssssss", $name, $producttype, $instrument, $sector, $region, $country, $currency, $investment);
            
            // Set parameters
            $name = $name;
            $producttype = $producttype;
            $instrument = $instrument;
            $sector = $sector;
            $region = $region;
            $country = $country;
            $currency = $currency;
            $investment = $investment;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: Dashboard.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <div class="col-md-12">
                    <h2 class="mt-5">Buy Investment</h2>
                    <p>Please fill this form and submit to buy the investment.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Product Type</label>
                            <textarea name="producttype" class="form-control <?php echo (!empty($producttype_err)) ? 'is-invalid' : ''; ?>"><?php echo $producttype; ?></textarea>
                            <span class="invalid-feedback"><?php echo $producttype_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Instrument</label>
                            <textarea name="instrument" class="form-control <?php echo (!empty($instrument_err)) ? 'is-invalid' : ''; ?>"><?php echo $instrument; ?></textarea>
                            <span class="invalid-feedback"><?php echo $instrument_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Sector</label>
                            <textarea name="sector" class="form-control <?php echo (!empty($sector_err)) ? 'is-invalid' : ''; ?>"><?php echo $sector; ?></textarea>
                            <span class="invalid-feedback"><?php echo $sector_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Region</label>
                            <textarea name="region" class="form-control <?php echo (!empty($region_err)) ? 'is-invalid' : ''; ?>"><?php echo $region; ?></textarea>
                            <span class="invalid-feedback"><?php echo $region_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control <?php echo (!empty($country_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $country; ?>">
                            <span class="invalid-feedback"><?php echo $country_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Currency</label>
                            <input type="text" name="currency" class="form-control <?php echo (!empty($currency_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $currency; ?>">
                            <span class="invalid-feedback"><?php echo $currency_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Investment</label>
                            <input type="text" name="investment" class="form-control <?php echo (!empty($investment_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $investment; ?>">
                            <span class="invalid-feedback"><?php echo $investment_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="investments.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>