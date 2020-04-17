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



<!-- Spielregel -->
      <div class="card">
        <div class="card-body">


          <h3>Zuerst einmal muss jeder Alkohol in der Hand haben. Die Fahrer alkoholfreie Getränke. Das Handy wird rechtsherumgegeben. Der Auftrag zählt immer für denjenigen, der das Handy in der Hand hat ausser es steht ausdrücklich: "An alle".</h3>



        </div>
      </div>

<!-- Buttons-->

<div class="container">
<div class="row">
  <div class="col-2">
    <!-- leerer Raum am linken Rande -->
  </div>
  <div class="col-8">



    <!-- Buttons -->


    <a  href="<?php echo $base_url; ?>/subsite/spielen.php">
      <button type="button" class="btn btn-success btn-lg btn-block"><h1>GO</h1></button>
    </a>

    <a href="https://698387-16.web1.fh-htwchur.ch">
      <button type="button" class="btn btn-secondary btn-block"><h2>Home</h2></button>
    </a>


  </div>
  <div class="col-2">
    <!-- leerer Raum am rechten Rande -->
  </div>
</div>
</div>




<?php include_once('../templates/footer.php'); ?>

</body>


</html>
