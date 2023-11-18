<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>seconnecte</title>
</head>
<body style="background:#E0FFFF">
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
          <a class="nav-link" aria-current="page" href="index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bibliotheque.php">Bibliothèque</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lesmodule.php">Concours</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        if (true) {
          # code... ?>
         
        <li class="nav-item">
          <a class="nav-link active" href="seconnecte.php">Se connecter</a>
        </li>
        <?php
        }else {
          # code... ?>
         <li class="nav-item">
            <?php 

            ?>
             
          <a class="nav-link " href="">Nom & prenom</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#">
            <img style="border-radius: 50%;" src="imag/logo.png" alt="" width="30" height="30">
          </a>
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

<center class = " mt-10">
<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4  needs-validation" action="login.php" method="post" novalidate>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Matricule
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="username" required>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Mot de Passe
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="************" name="password" required>
      <p class="text-red-500 text-xs italic">Veuillez entre le mot de passe.</p>
    </div>
    <input type="hidden" name="action"  value="<?php echo $_GET['action']?>">
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="connecte">
        Connecte
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Mot de passe oublié?
      </a>
    </div>
    <?php
      
    ?>
    
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2023 Acme Corp. All rights reserved.
  </p>
</div>
</center>
<?php include('enbas.php')?>
<script src="js/Scrpt.js"></script>
<script src="js/bootstrap.bundle.js"></script>

</body>
</html>