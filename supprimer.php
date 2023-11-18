
<?php
include 'database.php';


$getid = $_GET['deleteid'];

$sel = "DELETE FROM `enseignant` WHERE `id_ensei` = '$getid'"; 
$qry = mysqli_query($connect, $sel);

if($qry) {
	header("location: index.php");
}


?>
