<?php

$connect = mysqli_connect("localhost", "root", "");

if ($connect) {
   // echo "<br/> Connected to server";
    try {
        //code... 
        $selectdb = mysqli_select_db($connect,'etud_enseign');
        /*if(!$selectdb){

        }*/
    } catch (\Throwable $th) {
        //throw $th;
       
            $sqlcreatedb = "CREATE DATABASE IF NOT EXISTS `etud_enseign`";
    
            if (mysqli_query($connect, $sqlcreatedb)) {
                echo "<br />Un nouveau base de donnee";
                $selectdb2 = mysqli_select_db($connect, "etud_enseign");
    
                if ($selectdb2) {
                     echo "<br />Created database selected";
                    $sqlcreatetable = "
                    CREATE TABLE `enseignant` (
                        `id_ensei` int NOT NULL AUTO_INCREMENT,
                        `matricule` varchar(20) DEFAULT NULL,
                        `nom` varchar(20) DEFAULT NULL,
                        `prenom` varchar(20) DEFAULT NULL,
                        `niveau` varchar(20) DEFAULT NULL,
                        `adresse` varchar(20) DEFAULT NULL,
                        `profil` varchar(20) DEFAULT NULL,
                        PRIMARY KEY (`id_ensei`)
                      ) ENGINE=InnoDB ;";
                    if (mysqli_query($connect,$sqlcreatetable)) {
                        echo "<br />Nouveau table creer";
                        } else {
                        echo "<br /> Pas de table creer";
                        }
                }
    
            } else {
                echo "<br />pas de base de données creer";
            }	
        
    
    }  
   
}

?>

