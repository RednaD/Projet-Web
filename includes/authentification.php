<?php

$titre="Connexion";

echo '<h1>Connexion</h1>';
if (!isset($_POST['pseudo']))
{?>
    <form method="post" action="index.php?page=authentification.php">
    <fieldset>
    <p>
    <label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br>
    <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" /><br>
    </p></fieldset>
    <p><input type="submit" value="Connexion" /></p>
	</form>
<?php
}

$req = 'SELECT pseudo,mdp FROM utilisateur WHERE pseudo = :pseudo' ;
$resultat = mysqli_query($connexion, $req) ;
if($resultat == FALSE) // échec si FALSE
printf("Échec de la requête" ;
else {
	if ($_POST['pseudo'] == pseudo)
}


/*
else
{
    if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
    Vous devez remplir tous les champs</p>
    <p>Cliquez <a href="index.php?page=connexion.php">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
        $query=$connect->prepare('SELECT idu,pseudo,mdp
        FROM utilisateur WHERE pseudo = :pseudo');
        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
    if ($data['mdp'] == md5($_POST['password'])) // Acces OK !
    {
        $_SESSION['pseudo'] = $data['pseudo'];
        $_SESSION['id'] = $data['idu'];
?>
	<h2>Connection réussie<br>3...2...1...</h2> 
<script type="text/javascript"> 
	<!-- 

	var obj = 'window.location.replace("index.php");'; 
	setTimeout(obj,1000); 
	// --> 
</script>
  <?php  }
    else // Acces pas OK !
    {
        $message = '<p>Une erreur s\'est produite 
        pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
        pour revenir à la page précédente
        <br /><br />Cliquez <a href="./index.php">ici</a> 
        pour revenir à la page d accueil</p>';
    }
    $query->CloseCursor();
    }
    echo $message.'</div></body></html>';
}
?>*/