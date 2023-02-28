<!DOCTYPE HTML>
<html>

<head>
    <title>Accent Home a Real Estate Category Website Template | Home :: W3layouts</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/camera.min.js"></script>
    <script type="text/javascript">
    jQuery(function() {
        jQuery('#camera_wrap_1').camera({
            height: '500px',
            pagination: false,
        });
    });
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1200);
        });
    });
    </script>
</head>

<body>
    <!----start-wrap----->
    <div class="wrap">
        <!----start-header----->
        <div class="header" id="top">
            <!----top-header----->
            <div class="top-header">
                <!----start-logo----->
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" title="logo" /></a>
                </div>
                <!----End-logo----->
                <!----start-social-icons----->
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
                        <li><a href="#"><img src="images/twitter.png" title="twitter" /></a></li>
                        <li><a href="#"><img src="images/google.png" title="google pluse" /></a></li>
                    </ul>
                </div>
                <div class="clear"> </div>
                <!----End-social-icons----->
            </div>
            <!----End-top-header----->
            <!---start-top-nav---->
            <div class="top-nav">
                <div class="top-nav-left">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="top-nav-right">

                </div>
                <div class="clear"> </div>
            </div>
            <!---End-top-nav---->
        </div>
        <!----End-header----->
    </div>
    <!----End-wrap----->
    <!--start-image-slider---->

    <!--End-image-slider---->
    <!---start-content---->
    <div class="content">

        <div class="mid-grid">
            <div class="wrap">
                <h1>Filtre Result</h1>
            </div>
        </div>
        <div class="bottom-grids">
            <div class="wrap">
                <div class="bottom-grid1">

                </div>

                <!--gallery -->
                <script src="js/jquery.chocolat.js"></script>
                <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
                <!--light-box-files -->
                <script type="text/javascript">
                $(function() {
                    $('.gallery a').Chocolat();
                });
                </script>

            </div>
            <div class="card-deck" style="display:flex;flex-wrap:wrap;">
                <!-- SEARCH-->
                <?php
					 if(isset($_POST['recherche'])){
						$con = mysqli_connect('localhost', 'root', '', 'annonces');
						$Max_Prix = $_POST['maxPric'];
						$Min_Prix = $_POST['min'];
						$Types_Annonces = $_POST['type_annonces'];
						$Categories = $_POST['categories'];
						$Villes = $_POST['villes'];
						$Date_Publication = $_POST['Date_publication'];	
						$result ="";

						if($Max_Prix!="" && $Min_Prix!=""){
                           $query="SELECT * FROM `annonce` WHERE prix BETWEEN $Min_Prix and $Max_Prix";
						   $result= mysqli_query($con,$query);

						}
						elseif($Max_Prix!="" && $Min_Prix!="" && $Types_Annonces!=""){
						$query="SELECT * FROM `annonce` WHERE prix BETWEEN $Min_Prix and $Max_Prix and type_annonce = $Types_Annonces ";
						$result= mysqli_query($con,$query);
						}
						elseif($Max_Prix!="" && $Min_Prix!="" && $Types_Annonces!="" && $Categories!=""){
						$query="SELECT * FROM `annonce` WHERE prix BETWEEN $Min_Prix and $Max_Prix and type_annonce = $Types_Annonces and categorie = $Categories ";
						$result= mysqli_query($con,$query);
						}
						elseif($Max_Prix!="" && $Min_Prix!="" && $Types_Annonces!="" && $Categories!="" && $Villes!=""){
						$query="SELECT * FROM `annonce` WHERE prix BETWEEN $Min_Prix and $Max_Prix and type_annonce = $Types_Annonces and categorie = $Categories and ville = $Villes ";
						$result= mysqli_query($con,$query);
						}
						elseif($Max_Prix!="" && $Min_Prix!="" && $Types_Annonces!="" && $Categories!="" && $Villes!="" && $Date_Publication!="" ){
						$query="SELECT * FROM `annonce` WHERE prix BETWEEN $Min_Prix and $Max_Prix and type_annonce = $Types_Annonces and categorie = $Categories and ville = $Villes and date_publication = $Date_Publication ";
						$result= mysqli_query($con,$query);
						}
						while($row=mysqli_fetch_assoc($result)){
							?>
                <div class="card" id="cards">
                    <div id="modal">
                        <div>
                            <img class="card-text" src="<?php echo $row['image']; ?>">
                        </div>
                        <div id="infoModal">
                            <h5 class="modal-title" id="exampleModalLabel"><span>Titre :</span>
                                <?php echo $row['titre']; ?></h5><br>
                            <p class="card-text"><span>Catégorie :</span> <?php echo $row['categorie']; ?></p>
                            <p class="card-text"><span>Prix :</span> <?php echo $row['prix']; ?> <span>DH</span></p>
                            <p class="card-text"><span>Supérficie :</span> <?php echo $row['superficie']; ?></p>
                            <p class="card-text"><span>Type d'annonce :</span> <?php echo $row['type_annonce']; ?></p>
                            <p class="card-text"><span>Adresse :</span> <?php echo $row['adresse']; ?></p>

                            <div class="btnmod">

                            </div>

                        </div>
                    </div>
                </div>
                <?php

						}

					



		 }
         			