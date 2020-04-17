<!-- CONTROLLER -->

<?php
session_start();
require_once('../system/config.php');
require_once('../system/data.php');
$alleauftraege = alleauftraege();
shuffle($alleauftraege);


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

  <!-- Karten  -->
  <div class="card">
    <div class="card-body">

      <?php $karten = datebankhole() ?>
      <h3> <?php echo $karten['auftrag'] ?></h3>

    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-2">
      <!-- leerer Raum am linken Rande -->
    </div>
    <div class="col-8">



      <!-- Buttons -->

      <a >
        <button id="next" type="button" class="btn btn-success btn-lg btn-block"><h1>Next</h1></button>
      </a>

      <a  href="<?php echo $base_url; ?>/subsite/spielregeln.php">
        <button type="button" class="btn btn-danger btn-lg btn-block"><h2>Spielregeln</h2></button>
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


<p id="auftrag">HALLOTOBI</p>







<?php include_once('../templates/footer.php'); ?>

<script>
var alleauftraege =<?php echo json_encode($alleauftraege );?>;
var auftrag = alleauftraege['0'];
console.log(auftrag);
var karte = auftrag['auftrag'];
document.getElementById("auftrag").innerHTML = karte;
var counter = 0;
document.querySelector("#next").addEventListener("click", function(){
  counter = counter+1;
  if (counter>=alleauftraege.length){
    document.getElementById("auftrag").innerHTML = "Ende, ihr seid betrunken.";
  }

  else {
    var auftrag = alleauftraege[counter];
    console.log(auftrag);
    var karte = auftrag['auftrag'];
    document.getElementById("auftrag").innerHTML = karte;
}

});
</script>


</body>


</html>
