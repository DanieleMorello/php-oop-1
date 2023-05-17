<?php

require __DIR__ . '../../bonus/data/db.php'

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>

<body>

  <?php

  // Itera sui film nell'array e visualizza le informazioni
  foreach ($movies as $movie) : ?>
    <p><?= $movie->getInfo(); ?></p>
  <?php
  endforeach
  ?>

</body>

</html>