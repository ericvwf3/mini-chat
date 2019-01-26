<!-- 

    PENSEZ A RENSEIGNER LE NOM DE VOTRE BASE DE DONNÉE DANS LE PDO ligne 58, DBNAME=VOTRE_BASE 

-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
            integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Mini-chat</title>
</head>
<body>
    <div class="container"> 

        <h1>Mini-chat</h1>

        <!-- Formulaire -->
        <form action="minichat_post.php" method="post">
            
            <div class="form-group">
                <label  for="pseudo">Pseudo</label>
                <input  class="form-control" type="text" name="pseudo" id="pseudo" 
                        value="<?php
                                    //Récupération du pseudo dans le cookie sinon champ vide
                                    if (isset($_COOKIE['pseudo']))
                                    {
                                        echo $_COOKIE['pseudo'];
                                    }
                                    else {
                                        echo '';
                                    }
                                ?>" required/>                
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" rows="5" name="message" id="message" required/></textarea>
            
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>

        </form>

        <hr>

        <!-- Messages -->
        <div>
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

                //Requête de récupération des 10 derniers messages
                $reponse = $bdd->query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0, 10');

                //Affichage des 10 derniers messages avec sécurisation faille XSS (htmlspecialchars)
                while ($donnees = $reponse->fetch())
                {
                    $dateFr = date("d-M-Y" . " à " . "H:i:s", strtotime($donnees['date']));
                    echo $dateFr . ' : <strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</br>';
                }

                $reponse->closeCursor();
            ?>      
        </div>
    </div>
</body>
</html>