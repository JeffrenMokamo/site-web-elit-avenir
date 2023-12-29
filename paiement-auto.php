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