<?php 
    // Initialize the session
    session_start();
    include_once("config.php"); 

    // Check if form is submitted for  update, then redirect to homepage after update
    if(isset($_POST['update']))
    {	
        $id = $_POST['id'];
        
        $email = $_POST['email'];
        $phone = $_POST['phoneNo'];
        $gender = $_POST['gender'];
            
        // update users data
        $result = mysqli_query($con, "UPDATE users SET email='$email',phoneNo='$phone', gender='$gender' WHERE id=$id");
        
        // Redirect to homepage to display updated users in list
        header("Location: index.php");
    }

    $id = $_SESSION['id'];
    $result = mysqli_query($con, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

	$username = $row['username'];
	$email = $row['email'];
	$phone = $row['phoneNo'];
	$gender = $row['gender'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <?php include('includes/header.php'); ?>
        <?php $page = null; include('includes/navigation.php'); ?>
        <style>
            #reset{
                width:100%;
                height:35px;
            }

            #reset a:link, #reset a:visited {
                background-color: black;
                box-shadow: 0 5px 0 darkred;
                text-transform: uppercase;
                position: static;
                border-width:2px;
                border-color: white;
                border-style: solid;
                border-radius: 10px;
                color: white;
                padding: 14px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

            #reset a:hover, #reset a:active {
                background-color: rgb(150,150,255);
                color: black;
            }

            #reset a:active {
            box-shadow: none;
            top: 5px;
            }

            input[type=email], input[type=tel], select {
            width: 50%;
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
        </style>
    </head>
    <body>
        
        <div class="profile01">
            <h1>Profile</h1>
            <img src="/2022S1_WEB_APP/image/profile.jpg" style="border-radius: 25%; width: 150px; height: 150px">
            <form  name="update_users" method="post" action="profile.php" >
                <br>
                <label for="username"><b>Username</b></label><br>
                <p><?php echo $username;?></p>
                <div id="reset"><a href="reset-password.php">Reset Your Password</a></div><br><br>
                <label for="email"><b>Email</b></label><br>
                <input type="email" id="email" name="email" value="<?php echo $email;?>" required><br><br>
                <label for="phoneNo"><b>Phone Number</b></label><br>
                <input type="tel" id="phoneNo" name="phoneNo" value="<?php echo $phone;?>" placeholder="012-3456789" 
                pattern="[0-9]{3}-[0-9]{8}||[0-9]{3}-[0-9]{7}" required><br><br>
                <label><b>Gender</b></label><br>
                <input type="radio" id="male" name="gender" value="male" <?php if($gender == 'male') echo "checked";?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" <?php if($gender == 'female') echo "checked";?>>
                <label for="female">Female</label>
                <input type="radio" id="others" name="gender" value="others" <?php if($gender == 'others') echo "checked";?>>
                <label for="others">Others</label><br><br>
                <input type="hidden" name="id" value=<?php echo $_SESSION['id'];?>>
                <input type="submit" name="update" value="Update">
                
            </form> 
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>