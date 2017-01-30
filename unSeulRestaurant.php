<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="fr">
 <head> <!-- t�te de page -->


     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--concerne IE-->
     <meta name="viewport" content="width=device-width, initial-scale=1"> <!--concerne portable-->

     <title> Restaurant </title>

     <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
     <link href="bootstrap3/css/personalisation_aprecus.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="full-slider/css/full-slider.css" rel="stylesheet">

 </head>
 <body>
<div class="page">
 <div class="container"><!-- au dessus du menu -->
     <div class=" navbar-left inline-form"> <!--�l�ment � gauche--> <a class="logo_wrapper" href="#"><span class="logo"><img src="image/Logo-Restline.png" width="300" height="150"></span></a></div>
     <div class="navbar-right inline-form">
         <p>
             <a href="https://fr.linkedin.com/" ><i class="fa fa-linkedin-square fa-3x" href="#"></i></a>
             <a href="http://facebook.com" ><i class="fa fa-facebook-square fa-3x"></i></a>
             <a href="https://twitter.com/" ><i class="fa fa-twitter-square fa-3x"></i></a>

         </p>
     </div>
 </div>

 <!-- Menu -->

 <nav class="navbar navbar-primary">
     <div class="container-fluid">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>

             </button>
             <ul class="nav navbar-nav"> <!--met sur une ligne-->
                 <li> <a href="index.php"> Accueil </a> </li>
                 <li> <a href="Quisommenous.php"> Qui sommes-nous? </a> </li>
                 <li> <a href="Reservation.php"> Reservation</a></li>
             </ul>


         </div>
     </div>

 </nav><br />
 <!-- affichage un seul restaurant par son id -->
 <?php
include("MVC_PHP/Controleur/Controleur_site.php");
$Controleur = new affichageResto("localhost", "restline", "root", "");

 if(isset($_GET['idResto']))
 {
    $idResto = $_GET['idResto'];
    $resultats = $Controleur-> Affichageunrestaurant($idResto);
    include("MVC_PHP/Vues/Vues_affichage_un_restaurant.php");
 }
?>
<hr>

 <!-- Footer -->
 <footer>
     <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
             <p>Copyright &copy; Your Website 2014</p>
         </div>
     </div>
 </footer>

</div>

 </body>
 </html>
