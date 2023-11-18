<?php
   include("database.php");
   try {
    

    if(isset($_POST['modifier'])) {

      $matricule = $_POST['matricule'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $adresse = $_POST['adresse'];
      $niveau = $_POST['niveau'];
      $id = $_POST['id'];
        /*
        echo "$firstname nom <br/>";
        echo "$lastname prenon <br/>";
        echo "$email email <br/>";
        echo "$id id <br/>";*/
        
           $image = $_FILES["file"];
          $imagefilename = $image['name'];
           print_r($imagefilename);
           $imagefileerror = $image['error'];
           print_r($imagefileerror);
           echo "<br>";
           $imagefiletemp = $image['tmp_name'];
          print_r($imagefiletemp);
           echo "<br>";
  
           $filename_separate = explode('.', $imagefilename);
            print_r($filename_separate);
           echo "<br>";
           $file_extension = strtolower(end($filename_separate));
           print_r($file_extension);
           echo "<br>";
           $extension = array('jpeg', 'jpg', 'png');
  if(!empty($nom) && !empty($prenom) && !empty($adresse) ) {
           if (in_array($file_extension, $extension)) {
              $upload_image = 'imag/' . $imagefilename;
              move_uploaded_file($imagefiletemp, $upload_image);
             $seleditt= "UPDATE `enseignant` SET `nom`='$nom',`prenom`='$prenom',`adresse`='$adresse',`profil`='$upload_image' WHERE `id_ensei`='$id'";
              
              $qry = mysqli_query($connect,$seleditt);
              
              if($qry) {
                  header("location: affichageEnsei.php");
              }
           }else
        
           $seleditt= "UPDATE `enseignant` SET `nom`='$nom',`prenom`='$prenom',`adresse`='$adresse' WHERE `id_ensei`='$id'";
           $qry = mysqli_query($connect,$seleditt);
          
          if($qry) {
              header("location: affichageEnsei.php");
          }
        
      }else {

         header("location: affichageEnsei.php");
         ?>

            <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
            <div class="toast-header">
               <img src="..." class="rounded me-2" alt="...">
               <strong class="me-auto">Bootstrap</strong>
               <small>11 mins ago</small>
               <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
               Hello, world! This is a toast message.
            </div>
            </div>
         <?php
      }
      }
  
   } catch (\Throwable $thjj) {
    //throw $th;
    echo $thjj;
   }
    
?>