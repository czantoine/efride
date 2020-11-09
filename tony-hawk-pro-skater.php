<!DOCTYPE html>
<html lang="fr" >

<?php include ("head.php"); ?>

<link rel="stylesheet" href="/css/stylepro.css">

<head>
	<META HTTP-EQUIV="Refresh" CONTENT="20; URL=https://efride.fr/tony-hawk-pro-skater.php">
</head>

<body>

    <?php include ("menu.php"); ?>

    <center>
 	<br><br>

 	<img  src="img/tony.png" width="50%" height="50%">
    
    <h2>Best score : </h2>
    <table id="classement">	
	</table>
	
	<hr>

	<table id="som" >	
	</table>

	<hr>

	<h3>PRICE : </h3>

	
	<img class="box" width="30%" height="30%" src="img/shop/deckserie2.png" style="transform:rotate(90deg);">
	<img class="box" width="30%" height="30%" src="img/shop/casquetteefride.png">
	<img class="box" width="30%" height="30%" src="img/shop/space-edition.png" style="transform:rotate(90deg);">
	
	<hr>

	<h3>Tableau des joueurs : </h3>
    <table id="tablescore" >	
	</table>
    <center>
    <br/><br/><br/><br/>            

    <?php include ("footer.php"); ?>

    <script  src="pro.js"></script>
    <script  src="cmpt.js"></script>
    <script  src="player.js"></script>

</body>
</html>
