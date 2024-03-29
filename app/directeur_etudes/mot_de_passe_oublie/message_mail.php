
<?php 
$url = $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] . CHEMIN_PROJET . 'directeur_etudes/mot_de_passe_oublie/confirmation/{id_utilisateur}/{token}';

$url = str_replace('{id_utilisateur}', $id_utilisateur, $url);

$url = str_replace('{token}', $token, $url);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email de Educ-Action</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            border: 1px solid #DDDDDD;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #DDDDDD;
        }
        h1 {
            font-size: 30px;
            margin: 0;
            color: #444444;
        }
        p {
            font-size: 16px;
            margin-top: 10px;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        .button{
            padding: 5px 15px;
            background-color: #1E90FF;
            color: #f6f9ff;
            border: 1px solid #FFFFFF;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        .button:hover {
            background-color: #f6f9ff;
            color: #1E90FF;
            border: 1px solid #1E90FF;
        }
    
    </style>
</head>
<body>
    <div class="container">
        <h1>CHANGEMENT DE MOT DE PASSE</h1>
        <p>Merci de nous avoir contacté.</p>
        <p>Merci de cliquer sur le bouton afin de changer votre mot de passe.</p>
        <p>Cordialement,</p>
        <p>L'équipe d'Educ-Action</p>
        <a type="button" class="button" href="<?=$url?>">Valider</a>
    </div>
</body>
</html>
