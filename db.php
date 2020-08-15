<?php 
$query = "select * from places";
$result = mysql_query($query);
?>
<!DOCTYPE html>
<html>
    <title>Agent Availability</title>
    <body>
        <table align="center" border="1px" style="width:300px; line-height:30px;">
            <tr>
                <th colspan="4"><h2>Available Dates</h2></th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Availablity</th>
                <th>Time</th>
                <th>Location</th>
            </tr>
            <?php 
                while($rows=mysql_fetch_assoc($result)){ ?>
                    <tr>
                        <td><? php echo $rows['Name']; ?></td>
                        <td><? php echo $rows['Availablity']; ?></td>
                        <td><? php echo $rows['Time']; ?></td>
                        <td><? php echo $rows['Location']; ?></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>