<?php
require_once('dbcon.php');

if (isset($_POST['update'])) {
	$HARGA = mysqli_real_escape_string($mysqli, $_POST['HARGA']);
	$LT = mysqli_real_escape_string($mysqli, $_POST['LT']);
	$LB = mysqli_real_escape_string($mysqli, $_POST['LB']);
	$GRS = mysqli_real_escape_string($mysqli, $_POST['GRS']);	
	$KOTA = mysqli_real_escape_string($mysqli, $_POST['KOTA']);	
	
	if (empty($HARGA) || empty($LT) || empty($LB) || empty($GRS) || empty($KOTA)) {
		if (empty($HARGA)) {
			echo "<font color='red'>Harga harus diinput.</font><br/>";
		}
		
        if (empty($LT)) {
			echo "<font color='red'>Luas Tanah harus diinput.</font><br/>";
		}
		
        if (empty($LB)) {
			echo "<font color='red'>Luas Bangunan harus diinput.</font><br/>";
		}

        if (empty($GRS)) {
			echo "<font color='red'>Garansi harus diinput.</font><br/>";
		}

        if (empty($KOTA)) {
			echo "<font color='red'>Kota harus diinput.</font><br/>";
		}
	} else {
		$result = mysqli_query($mysqli, "UPDATE tablename SET `harga` = '$harga', `lt` = '$lt', `lb` = '$lb', `grs` = '$grs', `kota` = '$kota' WHERE `id` = $id");
		
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='welcome.php'>View Result</a>";
	}
}
