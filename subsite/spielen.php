<!-- CONTROLLER -->
<?php
session_start();
require_once('../system/config.php');
require_once('../system/data.php');

?>

<!-- VIEW -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Immer mit Vorsicht geniessen</title>

  <!-- Bootstrap & CSS Verlinkung -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="../styles.css" rel="stylesheet" type="text/css">
</head>
<body>

  <div class="box_mitte">
    <div class="mitte">

      <!-- Aufgabe -->
      <h1>Berühre mit deinem Knie die Stirn und trinke 2 Schlücke.</h1></br>


      <!-- Button Next -->
      <button type="button" class="btn btn-secondary">Neeext</button></br></br>

      <!-- Zurück zur Startseite -->
      <a href="https://www.w3schools.com">
        <button type="button" class="btn btn-danger">Ich habe genug getrunken</button>
      </a>
    </div>
  </div>



<?php include_once('../templates/footer.php'); ?>

</body>
</html>
