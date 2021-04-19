<?php
 session_start();
$name='';

  $conn = new mysqli("localhost", "root", '', "chachnaq") or die(masqli_error($conn)) ;
  if (isset($_POST['submit'])){
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $mail =$_POST['mail'];
    $mdp =$_POST['passeword'];
    $conn -> query( "INSERT INTO clients VALUES (NULL, '$nom' ,'$prenom' , '$mail' , '$mdp')");
  }
  
  if (isset($_GET['supp'])){
    $id =$_GET['supp'];
    
    $conn -> query( "DELETE FROM clients WHERE idclient=$id") or die(masqli_error($conn));
    $_SESSION['message'] = 'le supression a ete effectuer avec succer ';
    $_SESSION['msg_type'] = 'danger';

    header(location : admin1.php);
  }
   

   if ( isset($_GET['edit'])){
    $id =$_GET['edit'];
    $update = false;
    $resultat = $conn -> query( "SELECT FROM clients WHERE idclient=$id") or die(masqli_error($conn));
    if (count($resultat)== 1 ) {
        $row =$resultat ->fetch_array();
        $name = $row['nom'];
        $pnom = $row['prenom'];
    }
   }
   ?>