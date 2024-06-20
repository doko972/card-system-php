<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification du statut MySQL</title>
</head>

<body>
    <h3>Statut du serveur MySQL</h3>
    <div>
        <?php

        include "config.php";

        $conn = new mysqli($DBHost, $DBUser, $DBPassword, $DBName);

        if ($conn->connect_error) {
            echo "<p style='color: red;'>Serveur hors ligne: " . $conn->connect_error . "</p>";
        } else {
            echo "<p style='color: green;'>Serveur en ligne</p>";
        }

        $conn->close();
        ?>

    </div>
</body>

</html>