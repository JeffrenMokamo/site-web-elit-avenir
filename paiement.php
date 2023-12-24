<?php 

    include('connexion-bdd.php');

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

?>