<!-- CONTROLLER -->
<?php
session_start();
require_once('system/config.php');
require_once('system/data.php');

?>

<!-- VIEW -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Trinkspiel</title>

  <!-- Bootstrap & CSS Verlinkung -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>

    <h1>MMP TRINK-SPIEL</h1>
      <a class="box_mitte" href="<?php echo $base_url; ?>/subsite/spielen.php">
        <button type="button" class="btn btn-danger btn-lg btn-block"><p>Spielen</p></button>
      </a>

  </div>

<?php include_once('templates/footer.php'); ?>

</body>
</html>
