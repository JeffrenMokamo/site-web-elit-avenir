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


?>
