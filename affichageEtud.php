
<?php
include("database.php");

if(isset($_POST['modifier'])){
   // include("index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/jquery3.5.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("db_recherche.php", {term: inputVal}).done(function(data){
                
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background:#E0FFFF">
          <a class="navbar-brand" href="index.php">
              <img style="display: block;margin-left: auto;margin-right: auto;border-radius: 50%;" src="imag/logo.png" alt="" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="index.php">Acceuil</a>
                </li>
                <li class="nav-item">
          <a class="nav-link" href="bibliotheque.php">Bibliothèque</a>
        </li>
                <li class="nav-item">
                  <a class="nav-link " href="lesmodule.php">Concours</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorie
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="inscrire_etudia.php">Enseignant</a></li>
                    <li><a class="dropdown-item" href="lesuniv.php">Etudiant</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Autre visiteur</a></li>
                  </ul>
                </li>
                
                <?php 

                    session_start();
                    if(isset($_SESSION["enseign"]) && $_SESSION["enseign"] === true){

                      $firstname=$_SESSION["username"];
                      $image = $_SESSION["profil"] ;
                    ?>
                        <li class="nav-item">
                            <?php 

                            ?>
                            
                          <a class="nav-link " href=""><?php echo $firstname ?></a>
                        </li>
                        <li class="nav-item">
                          <a class="navbar-brand" href="#">
                            <img style="border-radius: 50%;" src="<?php echo $image ?>" alt="" width="30" height="30">
                          </a>
                        </li>
                        <li class="nav-item ml-5">
                        <a class="navbar-brand" href="logout.php">
                        <img style="border-radius: 50%;" src="imag/logout.png" alt="Se deconnecter" width="30" height="30">
                          </a>
                        </li>
                    <?php
                    }else {
                      header("location: seconnecte.php?action=1");
                    
                      ?>

                          <li class="nav-item">
                            <a class="nav-link " href="seconnecte.php">Se connecter</a>
                          </li>
                          <?php
                    }

                    ?>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
              </form>
            </div>
          </div>
        </nav>
</header>

<?php

     $unive = $_GET['unive'];
    //echo $unive;
     if($unive == "ub"){
         $sel ="SELECT * FROM `etudiant` WHERE `universite`='ub'";
         //$sel = "SELECT * FROM `enseignant` ";
         ?>
         <center>
        <img src="imag/ub.jpg" alt="log" height="150" width="120">
    </center>
            <h2 class="text-center"> LISTE DES ETUDIANTS INSCRIT A L'UNIVERSITE DU BURUNDI</h2>
         <?php
     }else if ($unive == "ult") {
         $sel ="SELECT * FROM `etudiant` WHERE `universite`='ult'";
         ?>
         <center>
        <img src="imag/Université-du-Lac-Tanganyika-1.jpg" alt="logo" width="150" height="150">
    </center>
         <h1 class="text-center"> LISTE DES ETUDIANTS INSCRIT A L'UNIVERSITE DU LAC TANGANYIKA</h1>

      <?php
         
     }else if ($unive == "ugl") {
         $sel ="SELECT * FROM `etudiant` WHERE `universite`='ugl'";
         ?>
         <div class="container">
         <center>
        <img src="imag/ugl.png" alt="logo" width="100" height="100">
         </center>
         <h2 class="text-center"> LISTE DES ETUDIANTS INSCRIT A L'UNIVERSITE DES GRANDS LACS</h2>
         </div>
      <?php
     }else if ($unive == "ulb") {
         $sel ="SELECT * FROM `etudiant` WHERE `universite`='ulb'";
         ?>
         <h2 class="text-center"> LISTE DES ETUDIANTS INSCRIT A L'UNIVERSITE LUMIERE DE BUJUMBURA</h2>
      <?php
     }else if ($unive == "biu") {
         $sel ="SELECT * FROM `etudiant` WHERE `universite`='biu'";
         ?>
         <center>
        <img src="imag/logo-biu.png" alt="logo" width="120" height="150">
    </center>
         <h2 class="text-center"> LISTE DES ETUDIANTS INSCRIT A BUJUMBURA INTERNATION UNIVERSITE</h2>
      <?php
     }
?>
    <div class="container mt-4">

    <div class="search-box">
        <input class="form-control me-2" style="outline:none" type="text" autocomplete="off" placeholder="Votre recherche ... " />
        <div  class="result"></div>
    </div>
        <table class="table table-hover border-secondary border mt-4" id="table">
                <thead>
                    <tr>

                    <th style="border: 1px solid" scope="col">Numero</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Pmenom</th>
                    <th scope="col">Etablissement</th>
                    <th scope="col">Note</th>
                    <th scope="col">Faculte</th>
                    <th style="border: 1px solid; text-align:center" scope="col">Profil</th>
                    <th scope="col" style='text-align:center' colspan="2" >Modifier</th>
                    </tr>
                </thead>

                <?php

                   
                    
                    $qrydisplay = mysqli_query($connect, $sel);
                    echo "<tbody>";
                    $nurero=0;
                    while($row = mysqli_fetch_array($qrydisplay)){
	                    $id  =  $row['id_etu'];
                        $matricule  =  $row['matricule'];
	                    $firstname  =  $row['nom'];
	                    $lastname  =  $row['prenom'];
	                    $adresse  =  $row['etablisement'];
                        $note  =  $row['note'];
                        $niveau =  $row['faculte'];
                        $image = $row["profil"];
                        $nurero++;
                        
                          //  echo "$image";
	                    echo "<tr><td style='border: 1px solid' scope='row' ><strong>".$nurero."</strong></td><td>"
                        .$firstname."</td><td>".$lastname."</td><td>".$adresse."</td><td>"
                        .$note."</td><td>"
                        .$niveau."</td><td style='border: 1px solid ; text-align:center'><img style='display: block;margin-left: auto;margin-right: auto;border-radius: 50%;' src=".$image." alt='' width='100px' heigth='100px'></td>
                        <td><a href='' data-bs-toggle='modal' data-bs-target='#exampleModal$id' data-bs-whatever='@fat'><i class='fas fa-user-edit'></i></a></td>
                        <td><a href='supprimeretud.php?deleteid=$id&unive=$unive' ><i class='fa fa-500px fas fa-user-times'></i></a></td></tr>";

                        ?>
                    <div class="modal fade" id="exampleModal<?php echo $id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">L'information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="#updateValues"  action="editetud.php" method="POST" enctype="multipart/form-data" >
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nom:</label>
                                <input type="text" class="form-control" id="recipient-name" name="nom" value = "<?php echo $firstname ?>">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Prenom:</label>
                                <input type="text" class="form-control" id="recipient-name" name="prenom" value = "<?php echo $lastname ?>">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Etablisement:</label>
                                <input type="text" class="form-control" id="recipient-name" name="etabli" value = "<?php echo $adresse ?>">
                            </div>
                            <center class="mb-4">
                                <div style=""> 
                                    <img  src="<?php echo $image?>" style='display: block;margin-left: auto;margin-right: auto;border-radius: 50%;' src=".$image." alt='' width='100px' heigth='100px' />
                                </div>   
                            </center>
                            <div class="mb-1">
                            <input  placeholder="Add profile picture" type="file" name="file" class="form-control" aria-label="file example" >
                            <div class="invalid-feedback"> file feedback</div>
                            </div>
                            <!--<label for="f02" class=" btn btn-primary">Image</label>-->
                            <input type="hidden" class="form-control" id="recipient-name" name="id" value = "<?php echo $id ?>">
                            <input type="hidden" class="form-control" id="recipient-name" name="unive" value = "<?php echo $unive ?>">
                            <input type="hidden" class="form-control" id="recipient-name" name="image" value = "<?php echo $image ?>">
                        </div>
                        <div class="modal-footer bg-gradient">
                        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Close
                        </button>
                             <button  type="submit" name="modifier" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Modifier l'information</button>
                        </div>
                    </form>
                        </div>
                    </div>
                    </div>

                <?php } ?>
                    </tbody>
        </table>
        

        <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-outline-secondary" href="imprimer.php">Imprimer</a>
      </div>
    </div>
    
    <script src="js/all.js"></script>
    <script src="js/Scrpt.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>