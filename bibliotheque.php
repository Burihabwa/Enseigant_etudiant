<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bibliotheque</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
  session_start();
?>
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
          <a class="nav-link active" aria-current="page" href="">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bibliotheque.php">Bibliothèque</a>
        </li>
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
      <div class="d-flex mmm">
        <img src="imag/panier.png" height='50px' width='50px' alt="">
        <div class="hh">
        <label class="kkk">1</label>
        </div>
        
      </div>
    </div>
  </div>
</nav>

    <div class="container">
    
    <div class="card-group">

        <div class="card p-2">
            <img src="imag/livre/livre1.jpeg" height='350px' width='70px' class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn  nnn">Acheter</a>
            </div>
        </div>
        <div class="card p-2">
            <img src="imag/livre/livre2.jpeg" height='350px' width='70px' class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card p-2">
            <img src="imag/livre/livre3.jpeg" height='350px' width='70px' class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <a href="#" class="btn btn-primary">Acheter</a>
            </div>
        </div>
        </div>
        <div class="card-group mt-5">

        <div class="card p-2">
            <img src="imag/livre/livre4.jpeg" height='350px' width='70px' class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card p-2">
            <img src="imag/livre/livre5.jpeg" height='350px' width='70px' class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Acheter</a>
            </div>
        </div>
        <div class="card p-2">
            <img src="imag/livre/livre6.jpeg" height='350px' width='70px' class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <a href="#" class="btn btn-primary">Acheter</a>
            </div>
        </div>
        </div>
    </div>

    



    <?php include('enbas.php')?>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>