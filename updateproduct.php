<?php 
require 'config.php';
$sql = "SELECT * FROM product ORDER BY id ASC";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="/2022S1_WEB_APP/Style.css">
        <title>Update product</title>

        <style>
            table{
                margin-left:auto;
                margin-right:auto;
                text-align:center;
                border-width:5px;
                border-color:rgb(240, 30, 30);
                width:80%;
                min-width:1000px;
                border-bottom-style: solid;
            }
            caption{
                margin:0px;
                padding:10px;
                font-style:italic;
            }
            tr:nth-child(1), tr:nth-child(2){width:90px;}
            tr:nth-child(3){width:240px;}
            tr:nth-child(odd){background-color:rgb(240, 240, 240);}
            tr:nth-child(even){background-color:rgb(100, 100, 100); color:white;}
            th{
                margin:0px;
                padding:10px;
                color:rgb(255, 255, 255);
                background-color:rgb(240, 30, 30);
            }
            td{
                margin:0px;
                padding:10px;
            }

            td a{
                color:white;
            }
        </style>
    </head>
    <body>
        <header class="container">
                <div class="crop">
                    <img src="/2022S1_WEB_APP/image/Hardwareology.png" alt="Hardwareology">
                </div>
                <div class="logout">
                    <a href = "/2022S1_WEB_APP/logout.php">Log out</a>
                </div>
                <div class="profile">
                    <a href = "/2022S1_WEB_APP/profile.php"><img src="/2022S1_WEB_APP/image/profileIcon.png" alt="Profile"></a>
                </div>
        </header>

        <div class="main">
            <h1>Update product</h1>
            <table style="border:solid;">
                <tr>
                    <th>Product Type</th><th>Brand</th><th>Name</th><th>Price</th><th>Description</th><th>Quantity</th><th>Image directory</th><th>Function</th>
                </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['ptype']."</td>";
                    echo "<td>".$row['brand']."</td>";
                    echo "<td>".$row['pname']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['pdescription']."</td>";
                    echo "<td>".$row['quantity']."</td>";
                    echo "<td>".$row['img_directory']."</td>";
                    echo "<td style=\"background-color:DarkBlue\";><a href='editproduct.php?id=".$row['id']."'>Edit</a> | <a href='deleteproduct.php?id=".$row['id']."'>Delete</a></td></tr>";
                }
            ?>
            </table>
        </div>
        <?php include('includes/footer.php'); ?>
    </body>
</html>