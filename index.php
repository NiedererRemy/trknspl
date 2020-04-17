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


    <!-- Startknopf -->



      <div class="container">
        <div class="row">
          <div class="col-2">
            <!-- leerer platz links -->
          </div>
          <div class="col-8">
            <a  href="<?php echo $base_url; ?>/subsite/spielen.php">
              <button type="button" class="btn btn-success btn-lg btn-block"><h1>GO</h1></button>
            </a>
          </div>
          <div class="col-2">
            <!-- leerer platz rechts -->
          </div>
        </div>
      </div>

      <!-- Spielregel Knopf -->

      <div class="container">
        <div class="row">
          <div class="col-2">
            <!-- Content -->
          </div>
          <div class="col-8">
            <a href="<?php echo $base_url; ?>/subsite/spielregeln.php">
              <button type="button" class="btn btn-danger btn-md btn-block"><h2>Spielregeln</h2></button>
            </a>
          </div>
          <div class="col-2">
            <!-- Content -->
          </div>
        </div>
      </div>




  </div>

<?php include_once('templates/footer.php'); ?>

</body>
</html>
