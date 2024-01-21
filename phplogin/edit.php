<?php
require_once("dbcon.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM hargarumah WHERE id = $id");

$resultData = mysqli_fetch_assoc($result);

$HARGA = $resultData['HARGA'];
$LT = $resultData['LT'];
$LB = $resultData['LB'];
$GRS = $resultData['GRS'];
$KOTA = $resultData['KOTA'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="welcome.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="harga" value="<?php echo $HARGA; ?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="lt" value="<?php echo $LT; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="lb" value="<?php echo $LB; ?>"></td>
			</tr>
            <tr> 
				<td>Email</td>
				<td><input type="text" name="grs" value="<?php echo $GRS; ?>"></td>
			</tr>
            <tr> 
				<td>Email</td>
				<td><input type="text" name="kota" value="<?php echo $KOTA; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
