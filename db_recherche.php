<?php

$link = mysqli_connect("localhost", "root", "", "etud_enseign");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
   
    $sql = "SELECT * FROM enseignant WHERE nom LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        
        $param_term = '%'.$_REQUEST["term"] . '%';
        
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
         
            if(mysqli_num_rows($result) > 0){
              
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    ?>
                    <!-- <script>$('.table').hide()</script> --->
                    <?php
                    $nom = $row["nom"];
                    $prenom = $row["prenom"];
                    $comot= "$nom $prenom";
                    echo "<p>" .$comot. "</p>";
                }
            } else{
                echo "<p>Aucune enregistement </p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>