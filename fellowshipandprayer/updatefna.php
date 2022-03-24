<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$width = $icon = $title = $what = "";
$width_err = $icon_err = $title_err = $what_err = "";
 
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
    
    // Validate icon
    $input_icon = trim($_POST["icon"]);
    if(empty($input_icon)){
        $icon_err = "Please enter an icon.";     
    } else{
        $icon = $input_icon;
    }
    
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter an title.";     
    } else{
        $title = $input_title;
    }
    
    // Validate what
    $input_what = trim($_POST["what"]);
    if(empty($input_what)){
        $what_err = "Please enter an what.";     
    } else{
        $what = $input_what;
    }
    
    // Check input errors before inserting in database
    if(empty($width_err) && empty($icon_err) && empty($title_err) && empty($what_err)){
        // Prepare an update statement
        $sql = "UPDATE fna SET width=?, icon=?, title=?, what=? WHERE id_fna=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_width, $param_icon, $param_title, $param_what, $param_id);
            
            // Set parameters
            $param_width = $width;
            $param_icon = $icon;
            $param_title = $title;
            $param_what = $what;
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
        $sql = "SELECT * FROM fna WHERE id_fna = ?";
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
                    $icon = $row["icon"];
                    $title = $row["title"];
                    $what = $row["what"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: errorfna.php");
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
        header("location: errorfna.php");
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
                        <div class="form-group <?php echo (!empty($icon_err)) ? 'has-error' : ''; ?>">
                            <label>Icon</label>
                            <textarea name="icon" class="form-control"><?php echo $icon; ?></textarea>
                            <span class="help-block"><?php echo $icon_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($what_err)) ? 'has-error' : ''; ?>">
                            <label>What</label>
                            <input type="text" name="what" class="form-control" value="<?php echo $what; ?>">
                            <span class="help-block"><?php echo $what_err;?></span>
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