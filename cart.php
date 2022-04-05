<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php include('includes/header.php'); ?>
        <?php $page = null; include('includes/navigation.php'); ?>

        
        <h1>Shopping Cart</h1>

        <table width='80%' border=1 >

            <tr>
                <th>Subject</th> <th>Message</th> <th>Type</th> <th>Posted Date</th> <th> Action </th>
            </tr>
            <?php  
                while($row = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$row['subject']."</td>";
                    echo "<td>".$row['message']."</td>";
                    echo "<td>".$row['type']."</td>"; 
                    echo "<td>".$row['posted']."</td>";		
                    echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td></tr>";        
                }
            ?>
        </table>

        <?php include('includes/footer.php'); ?>
    </body>
</html>