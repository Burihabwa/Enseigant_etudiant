<?php
include 'database.php';

try { 
    //code...
     if(isset($_POST['envoye'])) {

      echo "hello";
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $etabli = $_POST['etabli'];
        $note = $_POST['note'];
        $faculte = $_POST['faculte'];
        $unive = $_POST['unive'];
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
         

            $sql = "INSERT INTO `etudiant`(`nom`, `prenom`, `etablisement`, `note`, `faculte`, `profil`, `universite`)
                                                         VALUES ('$nom','$prenom','$etabli','$note','$faculte','$upload_image','$unive')";
                  $qry = mysqli_query($connect, $sql);
                  if($qry) {
            
                    if($unive == "ub"){
                        header("location: affichageEtud.php?unive=ub");
                    }else if ($unive == "utl") {
                        header("location: affichageEtud.php?unive=ult");
                    }else if ($unive == "ult") {
                        header("location: affichageEtud.php?unive=ugl");
                    }else if ($unive == "ulb") {
                        header("location: affichageEtud.php?unive=ulb");
                    }else if ($unive == "biu") {
                        header("location: affichageEtud.php?unive=bui");
                    }
                     
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