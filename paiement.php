<?php 

    include('connexion-bdd.php');

        if($_POST['mail-ang'] != ''){

            try {
                $mail = $_POST['mail-ang'];
                $nom = $_POST['nom-ang'];
                $post = $_POST['post-ang'];
                $prenom = $_POST['pren-ang'];
                $nationalite = $_POST['natio-ang'];
                $numwhat = $_POST['ntel-ang'];
                $lieu = $_POST['lieu-ang'];
                $dnaiss = $_POST['d-ang'];
                $sexe = $_POST['sexe-ang'];
                $etat = $_POST['etat-civ-ang'];
                $formation = $_POST['formation-ang'];
                $insert = $connect_bdd->prepare('INSERT INTO anglais(mail,nom,postnom,prenom,nationalite,numtel,lieuNaiss,dateNaiss,sexe,etatcivil,confirm) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
    
                $res = $insert->execute(array($mail, $nom, $post, $prenom, $nationalite, $numwhat, $lieu, $dnaiss, $sexe, $etat, $formation));
    
                echo '<script>alert(\'Enregistrement réussi ! Vous aurez un message de confirmation\');</script>';
            } catch (Eception $e) {
                echo '<script>alert(\'Echec d\'enregistrement\'); </script>';
            }

        }

?>

<?php

    include('connexion-bdd.php');

    if($_POST['mail-auto'] != ''){

        try {
            $mail = $_POST['mail-auto'];
            $nom = $_POST['nom-auto'];
            $post = $_POST['pnom-auto'];
            $prenom = $_POST['prnom-auto'];
            $tel = $_POST['tel'];
            $adr = $_POST['adr'];
            $nationalite = $_POST['natio-auto'];
            $conturg = $_POST['c-urgence'];
            $lieu = $_POST['lieu'];
            $dnaiss = $_POST['dnaiss'];
            $sexe = $_POST['sexe'];
            $etat = $_POST['etat-civ'];
            $cond = $_POST['conduire'];
            $maitrise = $_POST['maitrise'];
            $insert = $connect_bdd->prepare('INSERT INTO autoecole(mail, nom, postnom, prenom,numtel,adresse, nationalite,telurgence, lieuNaiss, dateNaiss,sexe,etatcivil,conduire, maitrise) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

            $res = $insert->execute(array($mail, $nom, $post, $prenom, $tel,$adr, $nationalite, $conturg, $lieu, $dnaiss, $sexe, $etat, $cond, $maitrise));

            echo '<script>alert(\'Enregistrement réussi ! Vous aurez un message de confirmation\');</script>';
        } catch (Eception $e) {
            echo '<script>alert(\'Echec d\'enregistrement\'); </script>';
        }

    }
        
    
?>

<?php

    include('connexion-bdd.php');

    if($_POST['mail'] != ''){

        try {
            $mail = $_POST['mail'];
            $nom = $_POST['nom'];
            $post = $_POST['post'];
            $prenom = $_POST['prenom'];
            $nationalite = $_POST['nationalite'];
            $numwhat = $_POST['numwhat'];
            $lieu = $_POST['lieu'];
            $dnaiss = $_POST['dnaiss'];
            $sexe = $_POST['sexe-info'];
            $etat = $_POST['etat-civ-info'];
            $formation = $_POST['formation'];
            $insert = $connect_bdd->prepare('INSERT INTO informatique(mail, nom, postnom, prenom, nationalite, numtel, lieuNaiss, dateNaiss,sexe,etatcivil,confirm) VALUES(?,?,?,?,?,?,?,?,?,?,?)');

            $res = $insert->execute(array($mail, $nom, $post, $prenom, $nationalite, $numwhat, $lieu, $dnaiss, $sexe, $etat, $formation));

            echo '<script>alert(\'Enregistrement réussi ! Vous aurez un message pour la confirmation\');</script>';
        } catch (Eception $e) {
            echo '<script>alert(\'Echec d\'enregistrement\'); </script>';
        }
    }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <!-- <link rel="stylesheet" href="dist/output.css"> -->
    <link rel="stylesheet" href="css/elit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Elit-paiement</title>
</head>
<body>
    
    


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="javascript/elit-avenir.js"></script>
</body>
</html>