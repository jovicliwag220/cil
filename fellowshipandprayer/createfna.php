<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$width = $icon = $title = $asterisk = $what = "";
$width_err = $icon_err = $title_err = $asterisk_err = $what_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
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
    
    // Validate asterisk
    $input_asterisk = trim($_POST["asterisk"]);
    if(empty($input_asterisk)){
        $asterisk_err = "Please enter an asterisk.";     
    } else{
        $asterisk = $input_asterisk;
    }
    
    // Validate what
    $input_what = trim($_POST["what"]);
    if(empty($input_what)){
        $what_err = "Please enter an what.";     
    } else{
        $what = $input_what;
    }
    
    // Check input errors before inserting in database
    if(empty($width_err) && empty($icon_err) && empty($title_err) && empty($asterisk_err) && empty($what_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO fna (width, icon, title, asterisk, what) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_width, $param_icon, $param_title, $param_asterisk, $param_what);
            
            // Set parameters
            $param_width = $width;
            $param_icon = $icon;
            $param_title = $title;
            $param_asterisk = $asterisk;
            $param_what = $what;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Garamond" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Gotu" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/8ffa12d84c.js" crossorigin="anonymous"></script>    
  <link rel="stylesheet" href="style2.css">
    <style type="text/css">
        .wrapper{
            width: 100%;
            margin: 0 auto;
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

                        <!-- With Hyperlink? -->
                        <div class="form-group <?php echo (!empty($asterisk_err)) ? 'has-error' : ''; ?>">

                        <label>With Link</label>
                        <select class="form-control" name="asterisk" value="<?php echo $asterisk; ?>">
                        <option value=" ">No</option>
                        <option value="<span class='glyphicon glyphicon-asterisk logo-xsmall'></span>">Yes</option>
                        </select>
                        <!-- <input type="text" name="asterisk" class="form-control" value="<?php echo $asterisk; ?>" > -->
                        <span class="help-block"><?php echo $asterisk_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($what_err)) ? 'has-error' : ''; ?>">
                            <label>What</label>
                            <input type="text" name="what" class="form-control" value="<?php echo $what; ?>">
                            <span class="help-block"><?php echo $what_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="indexfna.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>

            </div>        
        </div>
    </div>
    <div>
    
    </div>
</body>
</html>