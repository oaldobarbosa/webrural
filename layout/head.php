<?php

if ($pagina == "index") {
  echo ' 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/scripts.js"></script>
  ';

} else {
  echo '
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/scripts.js"></script>
  ';

  echo '
    <link rel="stylesheet" href="../css/' . $pagina . '.css">
  ';
}



?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/scripts.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
<!-- font awsame -->
<script src="https://kit.fontawesome.com/b4a99a93aa.js" crossorigin="anonymous"></script>

<!-- progressbar -->
<script src="js/progressbar.min.js"></script>

<!-- parallax -->
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<!-- fonte google -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">