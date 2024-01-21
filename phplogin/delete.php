<?php
require_once('dbcon.php');

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM tablename WHERE id = $id");

header("Location:welcome.php");
