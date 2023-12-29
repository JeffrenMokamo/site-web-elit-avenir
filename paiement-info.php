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