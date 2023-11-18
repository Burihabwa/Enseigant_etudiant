<?php
include 'database.php';

try { 
    //code...
     if(isset($_POST['envoye'])) {

      echo "hello";
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $niveau = $_POST['niveau'];
        echo "$firstname nom <br/>";
        echo "$lastname prenon <br/>";
        echo "$email email <br/>";
      
         /*$ajoute= new Connection();
        $connect = $ajoute->connection();
        $ajoute->Ajouter($connect,$firstname,$lastname,$email);*/

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

         if (in_array($file_extension, $extension)) {
            $upload_image = 'imag/' . $imagefilename;
            move_uploaded_file($imagefiletemp, $upload_image);
         

            $sql = "INSERT INTO `enseignant` ( `matricule`,`nom`, `prenom`, `niveau`, `adresse`, `profil`) 
                                                         VALUES ('$matricule','$nom','$prenom','$niveau','$adresse','$upload_image')";
                  $qry = mysqli_query($connect, $sql);
                  if($qry) {
            
                     header("location: index.php");
                  }else{
                     echo "erreur requete";
                  }

      }else{
         echo "erreur file";
      }
   }
   } catch (\Throwable $th) {
    //throw $th;
    echo "ereur catch";
    echo $th;
   }
?>