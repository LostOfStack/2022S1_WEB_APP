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
        <!--real content/body start here-->
        

        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>

