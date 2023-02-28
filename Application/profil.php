<?php 
if(isset($_POST["update"])){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $con = mysqli_connect('localhost', 'root', '', 'annonces');
    $id_annonce = $_POST['idAnnonce'];
    echo $id_annonce;
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $adresse = $_POST['adresse'];
    $superficie = $_POST['superficie'];
    $categorie = $_POST['categorie'];
    $type_annonce = $_POST['type_annonce'];
    $prix = $_POST['prix'];
    $ville = $_POST['ville'];
    $sql = "UPDATE annonce SET titre='$titre', description='$description', adresse='$adresse', superficie='$superficie', categorie='$categorie', type_annonce='$type_annonce', prix='$prix', date_modification=NOW(), ville='$ville' WHERE id_annonce='$id_annonce'";    
    if(mysqli_query($con,$sql)){
      header("refresh:0");
    }
}

if(isset($_POST["delete"])){
    $idDelet=$_POST["idDelet"];
    $con = mysqli_connect('localhost', 'root', '', 'annonces');
    $sql="DELETE FROM images WHERE id_annonce = '$idDelet'";
    if(mysqli_query( $con,$sql)){
        $query="DELETE FROM  annonce WHERE id_annonce = '$idDelet'";
        if(mysqli_query( $con,$query)){
           header("refresh:0");
        
        }
    }


}






?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
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

                <div class="clear"> </div>
                <!----End-social-icons----->
            </div>
            <!----End-top-header----->
            <!---start-top-nav---->
            <div class="">
                <div class="top-nav-left">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="login.php">My Acccount</a></li>
                        <li><a href="add.php">ajouter</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
        <!---End-top-nav---->
    </div>
    <!----End-header----->
    </div>
    <!----End-wrap----->

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
                    session_start();
                    $idClient=$_SESSION['id_client'];
         			 $con = mysqli_connect('localhost', 'root', '', 'annonces');
         			 $result = mysqli_query($con, "SELECT * FROM `annonce` WHERE id_client= '$idClient'");
         			 while ($row = mysqli_fetch_assoc($result)) {
          				?>
            <div>

            </div>
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

                        <!-- modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modifier">
                            MODIFIER
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#suprimmer">
                            SUPRIMMER
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="suprimmer" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Supression D'annonce </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h3> Vous êtes sérieux?!!🙄</h3>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-footer">
                                            <input type="hidden" name="idDelet" value="<?php echo $row['id_annonce']; ?>">
                                            <button type="submit" name="delete">DIHA F RASSEK😒</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modifier" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">

                                                        <label class="form-label" for="form3Example1m">Annonce
                                                            Title</label>
                                                        <input type="text" id="form3Example1m"
                                                            class="form-control form-control-lg" name="titre"
                                                            value="<?php echo $row['titre']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1n">Annonce Area
                                                            (m²)</label>
                                                        <input type="text" id="form3Example1n"
                                                            class="form-control form-control-lg" name="superficie"
                                                            value="<?php echo $row['superficie']; ?>" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1m1">Annonce
                                                            Address</label>
                                                        <input type="text" id="form3Example1m1"
                                                            class="form-control form-control-lg" name="adresse"
                                                            value="<?php echo $row['adresse']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Example1n1">Annonce
                                                            Price</label>
                                                        <input type="text" id="form3Example1n1"
                                                            class="form-control form-control-lg" name="prix"
                                                            value="<?php echo $row['prix']; ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="categorie">
                                                        <option selected value="<?php echo $row['categorie']; ?>">
                                                            <?php echo $row['categorie']; ?></option>
                                                        <option value="Buy">Buy</option>
                                                        <option value="Rent">Rent</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="type_annonce">
                                                        <option selected value="<?php echo $row['type_annonce']; ?>">
                                                            <?php echo $row['type_annonce']; ?></option>
                                                        <option value="House">House</option>
                                                        <option value="Villa">Villa</option>
                                                        <option value="Bureau">Bureau</option>
                                                        <option value="Land">Land</option>
                                                        <option value="Appartement">Appartement</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m1">Annonce
                                                        Description</label>
                                                    <input style="height: 15vh;" type="text" id="form3Example1m1"
                                                        class="form-control form-control-lg" name="description"
                                                        value="<?php echo $row['description']; ?>" />
                                                </div>
                                            </div>

                                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                                <div class="row">
                                                    <div class="col- mb-4">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="ville">
                                                            <option selected value="<?php echo $row['ville']; ?>">
                                                                <?php echo $row['ville']; ?></option>
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
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end pt-3" style="margin-top:10%;">
                                                <input type="hidden" id="idEDit" name="idAnnonce"
                                                    value="<?php echo $row['id_annonce']; ?>">
                                                <button type="submit" name="update" class="modbuttons"
                                                    style="width: 100%;">EDIT ANNONCE</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="btnmod">

                        </div>

                    </div>
                </div>
            </div>
            <?php
            
          }