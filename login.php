<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to home page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
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
    <title>Login</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{
            width: 100%; 
            padding: 20px;
            margin-top: 150px;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            position: static;
            /* border-style: solid;
            border-color: black;
            border-width: 1px;
            border-radius: 30px;
            background-color: white; */
            text-align: center;
        }
/* 
        .form-group{
            margin-bottom:1rem;
            display:-ms-flexbox;
            display:flex;
            -ms-flex:0 0 auto;
            flex:0 0 auto;
            -ms-flex-flow:row wrap;
            flex-flow:row wrap;
            -ms-flex-align:center;
            align-items:center;
            margin-bottom:0;
        }
        label{display:inline-block;margin-bottom:.5rem}
        input{
            margin:0;
            font-family:inherit;
            font-size:inherit;
            line-height:inherit;
            overflow:visible;
        }
        .form-control{
            display:block;
            width:100%;
            height:calc(1.5em + .75rem + 2px);
            padding:.375rem .75rem;
            font-size:1rem;
            font-weight:400;
            line-height:1.5;
            color:#495057;
            background-color:#fff;
            background-clip:padding-box;
            border:1px solid #ced4da;
            border-radius:.25rem;
            transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
        @media (prefers-reduced-motion:reduce){.form-control{transition:none}}
        .form-control::-ms-expand{background-color:transparent;border:0}
        .form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057}
        .form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}
        .form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}
        .form-control::-moz-placeholder{color:#6c757d;opacity:1}
        .form-control:-ms-input-placeholder{color:#6c757d;opacity:1}
        .form-control::-ms-input-placeholder{color:#6c757d;opacity:1}
        .form-control::placeholder{color:#6c757d;opacity:1}
        .form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}input[type=date]
        .form-control,input[type=datetime-local]
        .form-control,input[type=month]
        .form-control,input[type=time]
        .form-control{-webkit-appearance:none;-moz-appearance:none;appearance:none}
        select.form-control:focus::-ms-value{color:#495057;background-color:#fff}
        .invalid-feedback{
            display:none;
            width:100%;
            margin-top:.25rem;
            font-size:80%;
            color:#dc3545
        }
        .invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#dc3545}
        .invalid-tooltip{position:absolute;top:100%;left:0;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}
        .is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}
        .form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}
            .form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}
            .was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}
            .custom-select.is-invalid,.was-validated .custom-select:invalid{border-color:#dc3545;padding-right:calc(.75em + 2.3125rem);background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)}
            .custom-select.is-invalid:focus,.was-validated .custom-select:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}
            .form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}
            .form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}
        .btn-primary{
            color:#fff;
            background-color:#007bff;
            border-color:#007bff
        }
        .btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}
        .btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#0069d9;border-color:#0062cc;box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}
        .btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}
        .btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0062cc;border-color:#005cbf}
        .btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)} */
    </style>
</head>
<body>
    <?php include('includes/guest header.php'); ?>
    <div class="wrapper">
        <h2>Login</h2><br>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
    </div>

    <style>
        
    </style>
    <?php include('includes/footer.php'); ?>
    
</body>
</html>