
<!DOCTYPE html> 

<html lang="en-us"> 
    <head>  
        <meta charset="UTF-8" />  
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>concours</title> 
    </head> 
     <body>
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
                  <a class="nav-link active" href="lesmodule.php">Concours</a>
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
                  header("location: seconnecte.php?action=2");
                 }
                if (true) {
                  # code... ?>
                
                
                
                
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
    <header>   

    
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            
                <a class="nav-link text-primary" id = "navhighscorelink" >High Scores</a>

                <span class="ml-auto" id="timer"></span>
        </nav>
    </header> 
    <main>
          
        <br>
        <br>
        <div class="container">  
            
            <div class="card shadow rounded border-info"> 
               
                <div class="card-body">
                    
                    <h2 class="card-title mb-4 text-info text-center" id="title">Questionnaire du concours</h2>
            
                    <hr class="line">
                    
                    <div class="row">
                        
                        <div class="col-md-1">
                        </div>

                        <div class="col-md-10">
                            
                            <div id="mainContent">
                                
                                <h5 class="text-center">
                                    Essaiyez d'etre spontanné pour repondre au question posé . Le Questionnaire va contennir 10 Questions de choix multiple. 
                                </h5>
                                
                                <div class="text-center">
                                    <button type="submit" id="startQuiz" class="btn bg-primary text-white rounded-pill mb-2">Commencez le concours</button>
                                </div>

                            </div>

                            <div id = "quizContent"></div>
                            <div id = "score"></div>
                            <div id = "highscores"> </div>
                        
                        </div>
                    </div>
                                      
                    <div id="answer">
                         <hr class="line">
                    </div>    

                </div>
            </div>               
        
        </div>
        <br>
 
    </main>
    <?php include('enbas.php')?>
    <script src="js/questionsmaths.js"></script>
    <script src="js/scripmaths.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    </body>
    
</html>