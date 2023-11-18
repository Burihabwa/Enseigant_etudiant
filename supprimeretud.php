
<?php
include 'database.php';


$getid = $_GET['deleteid'];
$unive = $_GET['unive'];

echo $unive;
echo $getid;

$sel = "DELETE FROM `etudiant` WHERE `id_etu` = '$getid'"; 
$qry = mysqli_query($connect, $sel);

if($qry) {
	if($unive == "ub"){
        header("location: affichageEtud.php?unive=ub");
    }else if ($unive == "ult") {
        header("location: affichageEtud.php?unive=ult");
    }else if ($unive == "ugl") {
        header("location: affichageEtud.php?unive=ugl");
    }else if ($unive == "ulb") {
        header("location: affichageEtud.php?unive=ulb");
    }else if ($unive == "biu") {
        header("location: affichageEtud.php?unive=bui");
    }

}
?>