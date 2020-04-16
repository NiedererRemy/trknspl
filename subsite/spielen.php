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
  <title>Trinkspiel</title>

  <!-- Bootstrap & CSS Verlinkung -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="../styles.css" rel="stylesheet" type="text/css">
</head>
<body>

  <div class="box_mitte">
    <div class="mitte">
      <div class="card">
        <div class="card-body">

          <?php $karten = datebankhole() ?>
          <h3> <?php echo $karten['auftrag'] ?></h3>



        </div>
      </div>
      <!-- Aufgabe -->


<div class="align-self-stretch">
      <!-- Button Next -->
      <a href="https://698387-16.web1.fh-htwchur.ch/subsite/spielen.php">
      <button type="button" class="btn btn-danger"><p>Neeext</p></button></br></br>
      </a>
      <!-- Zurück zur Startseite -->
      <a href="https://698387-16.web1.fh-htwchur.ch/">
        <button type="button" class="btn btn-secondary"><p>Genug</p></button>
      </a>

      </div>
    </div>
  </div>



<?php include_once('../templates/footer.php'); ?>

</body>


</html>
