<?php 

    include('connexion-bdd.php');

    if(isset($_POST['form-auto'])){
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <title>Elit-Avenir/formulaire auto-ecole</title>
    <link rel="stylesheet" href="css/elit.css">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php 
        
        include('menu.php');

    ?>

    <div class="english-form mx-auto max-w-2xl px-4 pt-5 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-semibold tracking-tight text-gray-900 mb-4 sm:text-3xl">FORMATION AUTO ECOLE</h1>
                <p class="text-1xl">Apprendre à conduire, c'est apprendre à se deplacer sans difficulté, sans déranger les autres.</p>
            </div>

        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
           <video class="h-90" src="images/vid-auto.mp4" autoplay type="video/mp4" loop muted></video>
        </div>

        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">     
            <div class="">
                <h3 class="text-1xl font-semibold text-gray-900">Jours de la formation</h3>

                <div class="mt-4 mb-3">
                    <p class="text-sm"><strong>4 fois par semaine</strong><br>Lundi, mercredi, vendredi et dimanche pour les longues distances.</p>
                </div>
            </div>

            <div class="">
                <h3 class="text-1xl font-semibold text-gray-900">Heures de la formation</h3>

                <div class="mt-4 mb-3">
                    <p class="text-sm"><strong>Lundi :</strong>De 16h à 18h</p>
                    <p class="text-sm"><strong>Mercredi :</strong>De 16h à 18h</p>
                    <p class="text-sm"><strong>Vendredi :</strong>De 16h à 18h</p>
                    <p class="text-sm"><strong>Dimanche :</strong>De 14h à 16h</p>
                </div>
            </div>
            <div class="">
                <h3 class="text-1xl font-semibold text-gray-900">Inscriptions</h3>
                <div class="mt-4 mb-3">
                    <p class="text-sm"><strong>Nous avons deux types d'inscriptions :</strong><br>En ligne et en présentiel.</p>
                    <p class="text-sm">En présentiel : Nouvelle galerie présidentielle, <strong>Niveau 21, appartement 21</strong></p>
                </div>
            </div>
            <div class="">
                <h3 class="text-1xl font-medium text-gray-900">Lieu de la formation</h3>
                <div class="mt-4 mb-3">
                    <p class="text-sm">Les formations se dérouleront à la place des évolués.</p>
                </div>
            </div>

            <div class="">
                <h3 class="text-1xl font-medium text-gray-900">Contact</h3>
                <div class="mt-4">
                    <p class="text-sm"><i style="color:green;" class="col-md-3 bi bi-whatsapp"></i> : <strong>081 79 17 467</strong></p>
                    <p class="text-sm"><i style="color:dodgerblue;" class="bi bi-geo-alt-fill"></i> : <strong>Nouvelle galerie présidentielle, Niveau 21, appartement 21</strong></p>
                </div>
            </div>
            
        </div>
        </div>
    </div>
    </div>

    <div class="container p-20">
        <form action="" method="POST" class="form">
            <legend>Inscription formation Auto-Ecole</legend>
            <p class="text text-danger">* Indique une question obligatoire</p><br>
            <div class="row">
                <div class="form-group col-md-7 mb-3">
                    <label for="mail">Adresse mail<sup>*</sup></label>
                    <input required name="mail-auto" placeholder="example@gmail.com" required type="mail" class="form-control" id="mail">
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="nom">Nom<sup>*</sup></label>
                    <input required name="nom-auto" placeholder="exmaple : 'Mokamo'" required type="text" class="form-control" id="nom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="pnom">Postnom<sup>*</sup></label>
                    <input required name="pnom-auto" placeholder="ndombe" type="text" required class="form-control" id="pnom">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="prnom">Prenom<sup>*</sup></label>
                    <input required name="prnom-auto" placeholder="jeffren" type="text" required class="form-control" id="prnom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5 mb-3">
                    <label for="numtel">Numéro téléphone<sup>*</sup></label>
                    <input name="tel" placeholder="0828003397" type="text" required class="form-control" id="numtel">
                </div>
                <div class="form-group col-md-7 mb-3">
                    <label for="adredom">Adresse domicile<sup>*</sup></label>
                    <input name="adr" placeholder="1 Niwa Pigeon C/Ngaliema" required type="text" class="form-control" id="adredom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label for="nationalite">Nationalité<sup>*</sup></label>
                    <input required name="natio-auto" placeholder="Nationalité" type="text" class="form-control" id="nationalite">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="telurg">Contact en cas d'urgence<sup>*</sup></label>
                    <input name="c-urgence" placeholder="0829734722" required type="tel" class="form-control" id="telurg">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="nationalité">Lieu de Naissance<sup>*</sup></label>
                    <input name="lieu" placeholder="Kinshasa" type="text" required class="form-control" id="nationalité">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="date">Date de naissance<sup>*</sup></label>
                    <input name="dnaiss" type="date" class="form-control" required id="date">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label>Sexe<sup>*</sup></label>
                    <div>
                        <input type="radio" name="sexe" value="Masculin" required id="h"><label for="h"> Masculin</label>
                        <input type="radio" name="sexe" value="Feminin" required id="f"><label for="f"> Feminin</label>
                    </div>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label>Etat-civil<sup>*</sup></label>
                    <div>
                        <input type="radio" name="etat-civ" value="Marié" required id="h"><label for="m"> Marié</label>
                        <input type="radio" name="etat-civ" value="Célibataire" required id="f"><label for="c"> Célibataire</label>
                    </div>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label>Avez-vous déjà conduit ?<sup>*</sup></label>
                    <div>
                        <input type="radio" name="conduire" value="Oui" required id="o"><label for="o"> Oui</label>
                        <input type="radio" name="conduire" value="Non" required id="n"><label for="n"> Non</label>
                    </div>
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label>Vous voulez maîtriser ?<sup>*</sup></label>
                    <div>
                        <input type="radio" name="maitrise" value="Manuel" required id="o"><label for="o">Boîte Manuel</label>
                        <input type="radio" name="maitrise" value="Automatique" required id="n"><label for="n">Boîte Automatique</label>
                    </div>
                </div>
            </div>
            <button name="form-auto" class="btn btn-primary col-md-3">S'inscrire</button>
        </form>
    </div>

    <?php 
    
        include('footer.php');

    ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="javascript/elit-avenir.js"></script>
</body>
</html>