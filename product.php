<!DOCTYPE html>
<html>
    <head>
        <?php 
        include('includes/header.php');
        $page = $_GET["page"];
        include('includes/navigation.php');

        if ($page=="desktop"){
            echo "<title>Dekstop</title>";
        }
        ?>
        
    </head>
    <body>
        <div class="main">
            <?php
                if($page=="laptop"){
                echo "laptop";
                }
            ?>
            <form action = "config.php" method="POST">
                <div class ="form-group">
                    <input type ="checkbox" name ="brands[]" value ="Acer"> Acer <br>
                    <input type ="checkbox" name ="brands[]" value ="Apple"> Apple<br>
                    <input type ="checkbox" name ="brands[]" value ="Dell"> Dell <br>
                    <input type ="checkbox" name ="brands[]" value ="Samsung"> Samsung <br>
                </div>
                <div class = "form-group"> 
                    <button type="submit" name ="save_multiple_checkbox" class="btn btn-primary"> Save Multiple Checkbox </button>
                </div>
            </form>

            
            
        </div>
        <?php include('includes/footer.php'); ?>
       
    </body>
</html>

