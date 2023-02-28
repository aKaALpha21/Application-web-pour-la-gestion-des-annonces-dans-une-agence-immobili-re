<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
                <div class="buttons">
                    <button type="button" class="btn btn-secondary btn-lg"><a href="signup.php" class="btn btn-secondary">s'inscrire</a></button>
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
                        <li><a href="login.php">My Acccount</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="top-nav-right">
                    <form class="form-inline" action="search.php" method="post" style="display: flex;">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="number" class="form-control" name="maxPric" placeholder="Max-prix"
                                style="width:10vw;">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="number" class="form-control" name="min" placeholder="Min-prix"
                                style="width:10vw;">
                        </div>
                        <div class="form-group mx-sm-3 mb-3">
                            <select class="form-select" aria-label="Default select example" name="type_annonces">
                                <option selected>Type annonce</option>
                                <option value="Buy">Buy</option>
                                <option value="Rent">Rent</option>
                            </select>
                        </div>
                        <div class="form-group mx-sm-3 mb-3">
                            <select class="form-select" aria-label="Default select example" name="categories">
                                <option selected>Category</option>
                                <option value="House">House</option>
                                <option value="Villa">Villa</option>
                                <option value="Bureau">Bureau</option>
                                <option value="Land">Land</option>
                                <option value="Appartement">Appartement</option>
                            </select>
                        </div>
                        <div class="form-group mx-sm-3 mb-3">
                            <select class="form-select" aria-label="Default select example" name="villes">
                                <option selected>City</option>
                                <option value="Tangier">Tangier</option>
                                <option value="Casablanca">Casablanca</option>
                                <option value="Marrakesh">Marrakesh</option>
                                <option value="Agadir">Agadir</option>
                                <option value="Rabat">Rabat</option>
                                <option value="Tetouan">Tetouan</option>
                                <option value="Essaouira">Essaouira</option>
                                <option value="Al Hoceima">Al Hoceima</option>
                            </select>
                        </div>
                        <div class="form-group mx-sm-3 mb-3">
                            <select class="form-select" aria-label="Default select example" name="Date_publication">
                                <option selected>TRI</option>
                                <option value="Date_publication">Date publication</option>
                            </select>
                        </div>

                        <button type="submit" name="recherche" class="btn btn-primary mb-2"
                            style="background-color: #DFF3FC;border:1px solid #000;color:#000;margin-top:-1%;"
                            id="btn">SEARCH</button>
                    </form>
                </div>
                <div class="clear"> </div>
            </div>
            <!---End-top-nav---->
        </div>
        <!----End-header----->
    </div>
    <!----End-wrap----->
    <!--start-image-slider---->
    <div class="slider">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-src="images/slider3.jpg"> </div>
            <div data-src="images/slider2.jpg"> </div>
            <div data-src="images/slider1.jpg"> </div>
            <div data-src="images/slider2.jpg"> </div>
        </div>
        <div class="clear"> </div>
    </div>
    <!--End-image-slider---->
    <!---start-content---->
    <div class="content">
        <div class="top-grids">
            <div class="wrap">
                <div class="top-grid">
                    <a href="#"><img src="images/icon1.png" title="icon-name"></a>
                    <h3>Sales</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. </p>
                    <a class="button" href="#">Read More</a>
                </div>
                <div class="top-grid">
                    <a href="#"><img src="images/icon2.png" title="icon-name"></a>
                    <h3>Developments</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. </p>
                    <a class="button" href="#">Read More</a>
                </div>
                <div class="top-grid last-topgrid">
                    <a href="#"><img src="images/icon3.png" title="icon-name"></a>
                    <h3>Location</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. </p>
                    <a class="button" href="#">Read More</a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="mid-grid">
            <div class="wrap">
                <h1>Welcome to our site!</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
                <p>" consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat "</p>
                <a class="button1" href="#">Read More</a>
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
                <!-- cards -->
                <?php
         			 $con = mysqli_connect('localhost', 'root', '', 'annonces');
         			 $result = mysqli_query($con, 'SELECT * FROM `annonce`');
         			 while ($row = mysqli_fetch_assoc($result)) {
          				?>
                <div>

                </div>
                <div class="card" id="cards">
                    <div id="modal">
                        <div>
                        <?php
                                $result2 = mysqli_query($con, 'SELECT * FROM `images`');
                                while ($row2 = mysqli_fetch_assoc($result2)) {?>
                                <img class="card-text" src="<?php echo $row2['image_path'];?>">
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
				