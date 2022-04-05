<!DOCTYPE html>
<html>
    <head>
    <title>Home</title>
    </head>
    <body>
        <?php include('includes/guest header.php'); ?>

        <?php


        // Create database connection using config file
        require_once("config.php");

        // Define variables and initialize with empty values
        $username = $password = "";

        //Task 2 Q1 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // Fetch data from the form
            $username = $_POST['email'];
            $password = md5($_POST['password']);
            
            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
            
            $sql = "SELECT * FROM user WHERE email = '".$username."' AND password = '".$password."'";
            
            $result = mysqli_query($mysqli, $sql);	
            $rowcount = mysqli_num_rows($result);
            mysqli_free_result($result);	
            

            if($rowcount == 1) {  //if result matches exactly 1 record (1 user)

                //redirect to the landing page after login 
                header("Location:index.php"); //you are logged in successfully

            } else {
                //Invalid Username or Password!	
                header("Location:login.php?message=loginfail");		
            }
                
        }
        else {
            include("loginform.php");
            if(isset($_GET['message']) && $_GET['message'] == "loginfail")
            {
                echo "<script>alert('Wrong Username or Password!');</script>";
            }
        }

        ?>

        <?php include('includes/footer.php'); ?>
    </body>

    
</html>