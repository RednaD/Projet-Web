<!DOCTYPE html>
<html>
	<?php require('includes/connexion.php')?>
    <head>
	<title>Nyati</title>
	<link href="style.css" rel="stylesheet" media="all" type="text/css"> 
	</head>

    <header id="header">
		<?php require('includes/entete.php'); ?>
	</header>
	
	
	
	<body>
	<br>
	<div>
		<?php require('includes/menu.php'); ?>
	</div>
	<br>
	<div id="main">
			<?php 
				$nomPage = 'includes/accueil.php'; /*page par défaut*/
				if(isset($_GET['page'])) 
				{
					if(file_exists(addslashes($_GET['page'])) && 
					addslashes($_GET['page']) != 'index.php')
						{$nomPage = addslashes($_GET['page']);}
				}
				include($nomPage); 
			?>
	</div>
	<br>
	<footer id="footer">
			<?php require('includes/piedpage.php'); ?>
	</footer>
	</body>
</html>