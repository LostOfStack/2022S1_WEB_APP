<?php

include('includes/header.php');
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($con);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{
            width: 30%; 
            padding: 20px;
            margin-top: 150px;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            position: static;
            border-style: solid;
            border-color: black;
            border-width: 1px;
            border-radius: 30px;
            background-color: white;
            text-align: center;
        }
        input[type=text], input[type=password], select {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
        }
        .invalid-feedback{
            color:tomato;
        }
    </style>
</head>
<body>
    
    <div class="wrapper">
        <h1>Reset Password</h1>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New Password</label><br>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>"><br>
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div><br><br>
            <div class="form-group">
                <label>Confirm Password</label><br>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"><br>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div><br><br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"><br>
                <a class="btn btn-link ml-2" href="profile.php">Cancel</a>
            </div>
        </form>
    </div>    

    <?php include('includes/footer.php'); ?>
</body>
</html>