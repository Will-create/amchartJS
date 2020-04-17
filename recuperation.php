<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=cnib', 'root', '');
}catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// On ajoute une entrée dans la table jeux_video
$reponse=$req=$bdd -> prepare('INSERT INTO carte 
 VALUES ( :snom ,:sprenom,:sne_le, :sne_a, :ssexe, :staille, :sprofession, :sdate_delivre, :sdate_expire, :snum_cnib,NULL)');

// $req->execute (array( $_POST['nomf'],$_POST['prenomf'],$_POST['date_ne '],$_POST[' lieu_ne '],$_POST[' sexe '],$_POST[' taillef '],$_POST[' professionf '],$_POST['  date_delivref '],$_POST['  date_expiref '],$_POST[' numero_cnib ']));

$reponse->bindValue(':sprenom', $_POST['prenomf'],PDO::PARAM_STR);
$reponse->bindValue(':sne_le ', $_POST[' date_ne '],PDO::PARAM_STR);
$reponse->bindValue(':sne_a', $_POST[' lieu_ne '],PDO::PARAM_STR);
$reponse->bindValue(':ssexe', $_POST['sexef  '],PDO::PARAM_STR);

$reponse->bindValue(':staille', $_POST[' taillef '],PDO::PARAM_STR);
$reponse->bindValue(':sprofession', $_POST[' professionf '],PDO::PARAM_STR);
$reponse->bindValue(':sdate_delivre', $_POST['  date_delivref '],PDO::PARAM_STR);
$reponse->bindValue(':sdate_expire', $_POST[' date_expiref '],PDO::PARAM_STR);
$reponse->bindValue(':snum_cnib', $_POST[' numero_cnib '],PDO::PARAM_STR);
$reponse->bindValue(':snom', $_POST['nomf'],PDO::PARAM_STR);

//execution
$insertIsOk=$reponse->execute();
if($insertIsOk){
    $message=" ENREGISTREMENT REUSSI";
}else{ $message="ECHEC D";}
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>ENREGISTREMENT </h1>
        <p><?php echo $message;?></p>
    </body>
    </html>