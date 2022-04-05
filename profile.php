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
            <form action="/action_page.php">
                <br>
                <label for="name">Username</label><br>
                <input type="text" id="name" name="name" value="Green monster" required><br><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" value="greenmonster@gmail.com" required><br><br>
                <label for="phone">Phone Number</label><br>
                <input type="tel" id="phone" name="phone" value="012-3456789" placeholder="012-3456789" 
                pattern="[0-9]{3}-[0-9]{8}||[0-9]{3}-[0-9]{7}" required><br><br>
                <label>Gender</label><br>
                <input type="radio" id="male" name="fav_language" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="fav_language" value="female">
                <label for="female">Female</label>
                <input type="radio" id="others" name="fav_language" value="others">
                <label for="others">Others</label><br><br>
                <input type="submit" value="Update">
                
            </form> 
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>