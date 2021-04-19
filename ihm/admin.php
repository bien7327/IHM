<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chachnaq";

 
  $conn = new mysqli("localhost", "root", '', "chachnaq") or die(masqli_error($conn)) ;
  if (isset($_POST['submit'])){
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $mail =$_POST['mail'];
    $mdp =$_POST['passeword'];
    $conn -> query( "INSERT INTO clients VALUES (NULL, '$nom' ,'$prenom' , '$mail' , '$mdp')");
  }
  
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link type="text/css" rel="stylesheet" href="./css/inscription.css">
    <link type="text/css" rel="stylesheet" href="./css/header.css">

</head>

<body>
    <div class="page">


        <div class="heder">


            <div class="logo">

            </div>
            <div class="nav_bar">
                <ul class="nav3">0</ul>
                <ul class="nav0">1</ul>
                <ul class="nav1">2</ul>
                <ul class="nav2">3</ul>

            </div>
            <div class="co_insc">
            </div>
        </div>
        <div class="body">

        <?php
          $conn = new mysqli("localhost", "root", '', "chachnaq") or die(masqli_error($conn)) ;
          $result =   $conn -> query( "SELECT * FROM clients")or die(masqli_error($conn)) ;
           print_r($result->fetch_assoc());
           print_r($result->fetch_assoc());
           print_r($result->fetch_assoc());
          
          
          
          
          ?>
            <div class="formulaire">
                <form method="POST">
                    <div class="np">
                        <div class="nom">

                            <input type="text" name="nom" id="nom" size="30" placeholder="Nom" minlength="5">
                        </div>

                        <div class="p_nom">

                            <input type="text" name="prenom" id="prenom" size="27" placeholder="Prenom">
                        </div>
                    </div>
                    <div class="date">
                        <label class="d_naiss" for="start">Date de naissance</label>
                        <input class="in_d_naiss" type="date" id="start" name="trip-start" value="2003-01-01" max="2004-12-31" min="1950-01-01">
                    </div>
                    <div class="mail">

                        <input  type="Email" name="mail" id="mail" placeholder="E-mail">
                    </div>
                    <div class="bt">
                        <input type="submit" name="submit" value="S'inscrire">
                    </div>



                    <div class="mp">
                        <input type="password" name="passeword" name="ps" id="p" placeholder="Mot de passe">
                        <input type="password"  name="passewordconf" id="p" placeholder="confirmer">
                    </div>


                </form>

            </div>
        </div>

    </div>
</body>

</html>