<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chevalier d'Or</title>
  <link rel="icon" href="img/logo.ico">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php include 'header.php'; ?>
  <div class="head-card">

  </div>
  <div class="container">
    <?php
    $json = file_get_contents('json/saints.json');
    $cards = json_decode($json, true);

    if ($cards) {
      foreach ($cards as $card) {
        echo '<div class="card">';
        echo '<a href="card.php?id=' . $card['id'] . '">';
        echo '<img src="' . $card['image'] . '" alt="' . $card['name'] . '">';
        echo '<p>' . $card['name'] . '</p>';
        echo '</a>';
        echo '</div>';
        error_log('Link generated: card.php?id=' . $card['id']);
      }
    } else {
      echo '<p>Aucune carte trouvée.</p>';
    }
    ?>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>