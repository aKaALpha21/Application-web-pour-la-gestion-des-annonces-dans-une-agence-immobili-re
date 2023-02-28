<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'annonce</title>
</head>
<body>
    <?php
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "annonces";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
// Récupération de l'annonce sélectionnée

    $id = $_GET['id'];
    echo $id;
    $sql = "SELECT * FROM annonce WHERE id_annonce = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Affichage des détails de l'annonce
        while($row = $result->fetch_assoc()) {
            echo "<h1>" . $row['titre'] . "</h1>";
             echo "<p>Prix : " . $row['prix'] . " €</p>";
            echo "<p>" . $row['description'] . "</p>";
            echo "<p>Catégorie : " . $row['categorie'] . "</p>";
            echo "<p>Type : " . $row['type_annonce'] . "</p>";
            echo "<p>Adresse : " . $row['adresse'] . "</p>";
              echo "<p>ville : " . $row['ville'] . "</p>";
               echo "<p> :modifications_date " . $row['modifications_date'] . "</p>";
           

            // Affichage de la galerie d'images
            $sql_images = "SELECT * FROM images WHERE id_annonces = $id";
            $result_images = $conn->query($sql_images);

            if ($result_images->num_rows > 0) {
                echo "<h2>Galerie d'images</h2>";
                while($row_images = $result_images->fetch_assoc()) {
                    echo "<img src='" . $row_images['url'] . "' alt='" . $row_images['description'] . "' width='400'>";
                }
            }
        }
    } else {
        echo "Aucune annonce trouvée.";
    }
    $conn->close();
?>

</script> 
</body>
</html>	