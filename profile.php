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
        <?php include('includes/header.php'); ?>
        <?php $page = null; include('includes/navigation.php'); ?>
    </head>
    <body>
        <div class="profile01">
            <h1>Profile</h1>
            <img src="/2022S1_WEB_APP/image/profile.jpg" style="border-radius: 25%; width: 150px; height: 150px">
            <form  name="update_users" method="post" action="profile.php" >
                <br>
                <label for="username"><b>Username</b></label><br>
                <p><?php echo $username;?></p>
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