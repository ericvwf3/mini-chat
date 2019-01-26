<!-- 

    PENSEZ A RENSEIGNER LE NOM DE VOTRE BASE DE DONNÉE DANS LE PDO ligne 13, DBNAME=VOTRE_BASE
    VÉRIFIEZ ÉGALEMENT LE NOM DE LA TABLE ligne 27 SI VOUS L'AVEZ MODIFIÉ

-->

<?php

//Connexion db
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=VOTRE_BASE;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//Création du cookie si "pseudo" existe
if (isset($_POST['pseudo']))
{
    setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
}

//Entrée pseudo+message db
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES( :pseudo, :message)');

$req->execute([
    'pseudo'    =>$_POST['pseudo'], 
    'message'   =>$_POST['message'],
]);

//Retour au chat
header('Location: minichat.php');
?>