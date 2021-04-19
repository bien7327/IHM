<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css/admin.css">
    <link type="text/css" rel="stylesheet" href="./css/header.css">

    <title>Espace Admin</title>
</head>

<body>

    <div class="pages">
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

        <div class="admin">
            <div class="side_menu">
                <div class="c_side">

                    <div class="client">Client</div>
                    <div class="produit">Produit</div>
                    <div class="categorie">Categorie</div>
                    <div class="administration">Administration</div>

                </div>
            </div>
            <div class="espace3">
                <?php  if (isset($_SESSION['message'])) : ?>
                <div class="alert alert-<?=$_SESSION['msg_type'];?>" > 
                 <?php 
                 echo $_SESSION['message'];
                 unset($_SESSION['message']);?>

</div>
<?php endif ?>                
            <div class="titre">
                    <?php
          $conn = new mysqli("localhost", "root", '', "chachnaq") or die(masqli_error($conn)) ;
          $result =   $conn -> query( "SELECT * FROM clients")or die(masqli_error($conn)) ;
           
          
          
          
          
          ?>
                    <h1>Admin</h1>
                </div>
                <div class="tableux">
                    <table class="tcategorie">

                        <tread>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>adresse mail</th>
                        </tread>

                        <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['nom'] ; ?></td>
                            <td><?php echo $row['prenom'] ;?></td>
                            <td><?php echo $row['mail'] ;?></td>
                            <td><a href="admin1.php?edit=<?php echo $row['idclient'] ;?>">  <input type="submit" id='submit' value='edit' > </a> </td>
                            <td><a href="process.php?supp=<?php echo $row['idclient'] ;?>">  <input type="submit" id='submit' value='supp' ></a> </td>
                        </tr>
                    
                        <?php endwhile ;?>
                        
                        
                        





                        <!--
                        <tbody>
                            <tr>
                                <td>ID categorie </td>
                                <td> Nom categorie</td>
                                <td>Nombre de produit</td>
                                <td> Modifier</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>-->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>