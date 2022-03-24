<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$width = $pday = $plink = $pname = "";
$width_err = $pday_err = $plink_err = $pname_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate width
    $input_width = trim($_POST["width"]);
    if(empty($input_width)){
        $width_err = "Please enter the width amount.";     
    } elseif(!ctype_digit($input_width)){
        $width_err = "Please enter a positive integer value.";
    } else{
        $width = $input_width;
    }
    
    // Validate pday
    $input_pday = trim($_POST["pday"]);
    if(empty($input_pday)){
        $pday_err = "Please enter an pday.";     
    } else{
        $pday = $input_pday;
    }
    
    // Validate plink
    $input_plink = trim($_POST["plink"]);
    if(empty($input_plink)){
        $plink_err = "Please enter an plink.";     
    } else{
        $plink = $input_plink;
    }
    
    // Validate pname
    $input_pname = trim($_POST["pname"]);
    if(empty($input_pname)){
        $pname_err = "Please enter an pname.";     
    } else{
        $pname = $input_pname;
    }
    
    
    // Check input errors before inserting in database
    if(empty($width_err) && empty($pday_err) && empty($plink_err) && empty($plink_err)){
        // Prepare an update statement
        $sql = "UPDATE fnap SET width=?, pday=?, plink=?, pname=? WHERE id_fnap=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_width, $param_pday, $param_plink, $param_pname, $param_id);
            
            // Set parameters
            $param_width = $width;
            $param_pday = $pday;
            $param_plink = $plink;
            $param_pname = $pname;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: indexfna.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM fnap WHERE id_fnap = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $width = $row["width"];
                    $pday = $row["pday"];
                    $plink = $row["plink"];
                    $pname = $row["pname"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: errorfnap.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: errorfnap.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($width_err)) ? 'has-error' : ''; ?>">
                            <label>Width</label>
                            <input type="text" name="width" class="form-control" value="<?php echo $width; ?>">
                            <span class="help-block"><?php echo $width_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($pday_err)) ? 'has-error' : ''; ?>">
                            <label>Day</label>
                            <input name="pday" class="form-control" value="<?php echo $pday; ?>">
                            <span class="help-block"><?php echo $pday_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($plink_err)) ? 'has-error' : ''; ?>">
                            <label>Prayer Item Link</label>
                            <input type="text" name="plink" class="form-control" value="<?php echo $plink; ?>">
                            <span class="help-block"><?php echo $plink_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($pname_err)) ? 'has-error' : ''; ?>">
                            <label>Button Name</label>
                            <input type="text" name="pname" class="form-control" value="<?php echo $pname; ?>">
                            <span class="help-block"><?php echo $pname_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="indexfna.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>