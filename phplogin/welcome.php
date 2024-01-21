<?php

require_once('dbcon.php');
$query = "select * from tablename";
$result = mysqli_query($dbcon,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcomestyle.css"
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Database Harga Rumah</h2>
                    </div>
                    <div class="card-body">
                        <table class="content-table">
                            <thead>
                            <tr>
                                <td>Harga</td>
                                <td>Luas Tanah</td>
                                <td>Luas Bangunan</td>
                                <td>Garansi</td>
                                <td>Kota</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            </thead>
                            
                            <tbody>
                            <tr>
                            <?php

                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <td><?php echo $row['HARGA'];?></td>
                                <td align="center"><?php echo $row['LT'];?></td>
                                <td align="center"><?php echo $row['LB'];?></td>
                                <td align="center"><?php echo $row['GRS'];?></td>
                                <td><?php echo $row['KOTA'];?></td>
                                <td><button type="submit" class="btn" name="edit" href="edit.php?id=$res[id]">Edit</button></td>
                                <td><button type="submit" class="btn" name="edit" href="delete.php?id=$res[id]"
                                    onClick="return confirm('Are you sure you want to delete?')">Delete</button></td>
                            </tr>
                            <?php
                            }
                            ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>