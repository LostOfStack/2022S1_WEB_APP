<?php
// Include config file
require_once "config.php";
session_start(); 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = $phone = $gender = "";
$username_err = $password_err = $confirm_password_err = $email_err = $phone_err = $gender_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate email
    if(empty($_POST["email"])){
        $email_err = "Please enter your email.";     
    } else{
        $email = $_POST["email"];
    }

    // Validate phone number
    if(empty($_POST["phoneNo"])){
        $phone_err = "Please enter your phone number.";     
    } else{
        $phone = $_POST["phoneNo"];
    }

    // Validate gender
    if(empty($_POST["gender"])){
        $gender_err = "Please choose your gender.";     
    } else{
        $gender = $_POST["gender"];
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($phone_err) && empty($gender_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, email, phoneNo, gender) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_email, $param_phone, $param_gender);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
            $param_phone = $phone;
            $param_gender = $gender;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
    <title>Sign Up</title>
    
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
        input[type=text], input[type=password], input[type=tel], input[type=email], select {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 80%;
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
    <?php include('includes/header.php'); ?>
    <div class="wrapper">
        <h1>Sign Up</h1><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label><b>Username</b></label><br>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>"><br>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div><br>    
            <div class="form-group">
                <label><b>Password</b></label><br>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>"><br>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div><br>
            <div class="form-group">
                <label><b>Confirm Password</b></label><br>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>"><br>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div><br>
            <div class="form-group">
                <label><b>Email</b></label><br>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" placeholder="email@example.com"><br>
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div><br>
            <div class="form-group">
                <label><b>Phone Number</b></label><br>
                <input type="tel" name="phoneNo" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>" placeholder="012-3456789" 
                pattern="[0-9]{3}-[0-9]{8}||[0-9]{3}-[0-9]{7}"><br>
                <span class="invalid-feedback"><?php echo $phone_err; ?></span>
            </div><br>
            <div class="form-group">
                <label><b>Gender</b></label><br>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="others" name="gender" value="others">
                <label for="others">Others</label>
                <br><span class="invalid-feedback"><?php echo $gender_err; ?></span>
            </div><br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
    <style>
        
    </style>
    <?php include('includes/footer.php'); ?>
</body>
</html>