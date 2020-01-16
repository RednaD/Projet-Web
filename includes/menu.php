<ul id="menu">
<?php
if (!empty($_SESSION['pseudo']))
{
	echo'<a href="#">Connecté en tant que: '.$_SESSION['pseudo'].'| </a>
	<a href="index.php?page=deconnexion.php" id="e">Deconnexion </a>';
}
else
{
	echo '<a href="index.php?page=includes/authentification.php">Connexion</a>';
}
?>
<a href="index.php">Accueil</a>
<a href="index.php?page=apropos.php">A propos<a>
</ul>