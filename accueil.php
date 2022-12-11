<!DOCTYPE html>

<html lang="en">

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <link rel="icon" type="image/jpeg" href="cosider.jpeg" />

  <title>Cosider Construction</title>
  
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<style>

body  {
  background-image: url("construction.jpg");
  background-color: #ffffff;
  background-repeat: no-repeat;
  background-size: 100% 100%;  
}

</style>

</head>

<body >

<!--Navbar-->

<?php

include('menu.php');

include('connexion_bdd.php');

?>

<div class="container col-md-6" style="background-color:#ffffff; opacity:0.85;">

<br/>
<!-- <p class="h4 mb-4">Affectation à partir de la mainteance</p>  -->

 <div class="modal-header text-center">
     <img src="cosider.jpeg">
</div>
   
     <div class="modal-header text-center">
    
     

       <h5 class="modal-title w-100 font-weight-bold">Gestion du Materiel Informatique de Cosider Construction</h5>    

        <br/>  <br/>  

     </div><br/>  <br/>

  <div class="btn-group-vertical" role="group" aria-label="Vertical button group"  style="margin-left:40px;">
 <button type="button" class="btn red lighten-1" onclick='window.location = "./ajout.php"'> Nouvelle Acquisition</button>
  <button type="button" class="btn red lighten-1" onclick='window.location = "./listemateriel.php"'>Liste Du Materiel</button>
  <button type="button" class="btn red lighten-1" onclick='window.location = "./affectation.php"'>Nouvelle Affectation</button>
  <button type="button" class="btn red lighten-1" onclick='window.location = "./maintenancecopie.php"'>Maintenance</button>
  <button type="button" class="btn red lighten-1" onclick='window.location = "./trans.php"'>Transfert</button>
  <button type="button" class="btn red lighten-1" onclick='window.location = "./reint.php"'>Reintegration</button>
</div>

<div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="margin-left:35px;">
  <button type="button" class="btn grey" onclick='window.location = "./fact_str.php"'>Facturation Structure</button>
  <button type="button" class="btn grey" onclick='window.location = "./fact_globale.php"'>Facturation Globale</button>
  <button type="button" class="btn grey" onclick='window.location = "./priseencharge.php"'>Prise en charge</button>
  <button type="button" class="btn grey" onclick='window.location = "./ajour_priseencharge.php"'>Ajour Prise en charge</button> 
</div>

      <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  
      <br/>  <br/>  <br/>  
</div>

<br/>  



<?php
$conn->close();
?>
   


<!-- Footer -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>

     
</body>

</html>
