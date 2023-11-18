<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
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

<div class="container">

<p class="text-center">
        <img src="imag/ub.jpg" alt="log" height="150" width="120">
    </p>
    <h1 class="text-center">Presentation de l'universite du BURUNDI</h1>
    
    <marquee behavior="" direction="">
       <p>
        <img src="imag/ub1.jpg" alt="ub">
        <img src="imag/ub2.jpeg" alt="ub">
        <img src="imag/ub3.jpeg" alt="ub">
       </p>
    </marquee>
    <h3 class="text-center" >UNIVERSITE DU BURUNDI</h3>
    <p>Créée en 1964, l'Université du Burundi (UB) compte actuellement plus de 7000 étudiants répartis dans
8 Facultés et 4 Instituts. Avec ses e�ectifs des étudiants inscrits mais aussi en termes d'e�ectifs du
personnel et des �lières d'enseignements, elle reste la plus importante institution publique de
l'Enseignement Supérieur du Burundi. Elle ambitionne une formation d'excellence basée sur un
enseignement de qualité, et se veut être une université de référence dans la sous -région.<br><br>
L'Université du Burundi a évolué dans son organisation sous la tutelle du Ministre de l'Enseignement
Supérieur et de la Recherche Scienti�que. Selon les articles respectifs : 5,6,7 et 21 du Décret №
100/279 du 18 Octobre 2012 portant réorganisation et fonctionnement de l'Université du Burundi:<br><br>
<ul>
    <li><p>L'Université du Burundi est organisée en Facultés et Instituts. Les Facultés et les Instituts sont
organisés en départements et en sections. L'Université du Burundi comprend en outre les services
administratifs et techniques, les régies, les centres et organismes de recherches nécessaires à
l'accomplissement de sa mission.</p></li>
<li><p>La gestion quotidienne est assurée par le Recteur assisté par le Vice-Recteur tous nommés par
Décret sur proposition du Ministre ayant en charge l'Enseignement Supérieur dans ses attributions.</p></li>
<li><p>L'Université du Burundi est administrée par un Conseil d'Administration de onze membres.</p></li>
<li><p>Un Secrétaire Général est nommé par décret sur proposition du Ministre de l'Enseignement
Supérieur et de le Recherche Scienti�que; il est chargé de la coordination administrative de
l'Université du Burun</p></li>
</ul>
</p>
</div>

<h2 class="text-center">INSCRIVEZ VOUS</h2>

<center>
        <div class="container">
        <form class="row g-3 needs-validation" action="insertetud.php" method="POST"  novalidate enctype="multipart/form-data" >
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" id="validationCustom01"  required>
    <div class="valid-feedback">
      Bien fait!
    </div>
    <div class="invalid-feedback">
      Veuiller enteer le nom
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" id="validationCustom02"  required>
    <div class="valid-feedback">
      Bien fait!
    </div>
    <div class="invalid-feedback">
      Veuiller entrer le prenom
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Etablissement d'origine</label>
    <input type="text" class="form-control" name="etabli" id="validationCustom02" required>
    <div class="valid-feedback">
      Bien fait!
    </div>
    <div class="invalid-feedback">
      Veuiller entre l'etablicement
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label"> Note obtenu </label>
    <input type="number" class="form-control" name="note" id="validationCustom02"  required>
    <div class="valid-feedback">
      Bien fait!
    </div>
    <div class="invalid-feedback">
      Veuiller entrer votre note
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Faculte disponible</label>
    <select class="form-select" name="faculte" id="validationCustom04" required>
      <option selected disabled value="">selectionner la faculté</option>
        <option value="Informatique">Informatique</option>
        <option value="Electronique">Electronique</option>
        <option value="FSGA">FSGA</option>
        <option value="Droit">Droit</option>
        <option value="FSSP">FSSP</option>
        <option value="Statistique">Statistique</option>
    </select>
    <div class="invalid-feedback">
      Veuiller choisir le la faculté
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Enregistrer votre photo de profil</label>
    <input class="form-control" type="file" name="file" id="formFile validationCustom04">
  
    <div class="invalid-feedback">
    Enregistrer votre Diplome
    </div>
  </div>
  <input type="hidden" class="form-control" name="unive" id="validationCustom02" value="ub"   required>
 
  <div class="row mt-4">
    <div class="d-grid gap-2 col-6 max-auto">
        <button class="btn btn-primary" name="envoye"  type="submit">Envoiyer le formulaire</button>
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-outline-secondary" href="affichageEtud.php?unive=ub">Verifier votre Enregistrement</a>
      </div>
  </div>
  
  <div class="col-12">
    
  </div>
</form>
        </div>
    </center>

    

   <?php include("enbas.php"); ?>
    <script src="js/all.js"></script>
    <script src="js/Scrpt.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>