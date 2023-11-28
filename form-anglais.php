<?php 

    include('connexion-bdd.php');

    if(isset($_POST['form-ang']) && isset($_POST['sexe-ang'])){
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


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
        <title>Elit-Avenir/formulaire anglais</title>
        <link rel="stylesheet" href="css/elit.css">
        <link rel="stylesheet" href="dist/output.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>


        <?php 
            
            include('menu.php');

        ?>

        <!-- Product info -->
        <div class="english-form mx-auto max-w-2xl px-4 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-semibold tracking-tight text-gray-900 mb-4 sm:text-3xl">ENGLISH CLASS TRAINING</h1>
                <p class="text-1xl">Booster votre anglais avec une formation sur mesure. Apprendre facilement et rapidement !</p>
            </div>

        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
            <p class="text-3xl tracking-tight text-gray-900 mb-3">400$ <br> <span class="text-xl">Les 4 Levels</span></p>

            <img class="rounded mb-3" src="images/How-to-Foster-A-Team-Environment-and-Good-Communication-While-Working-Remotely--600x315-cropped.webp" alt="">
            <div class="">
                <h3 class="text-1xl font-medium text-gray-900">Contact</h3>
                <div class="mt-4">
                    <p class="text-sm"><i style="color:green;" class="col-md-3 bi bi-whatsapp"></i> : <strong>081 79 17 467</strong></p>
                    <p class="text-sm"><i style="color:dodgerblue;" class="bi bi-geo-alt-fill"></i> : <strong>Nouvelle galerie présidentielle, Niveau 21, appartement 21</strong></p>
                </div>
            </div>
        </div>

        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
            

            <div class="mt-10">
            <h3 class="text-1xl font-medium text-gray-900">Levels</h3>

            <div class="mt-4">
                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                <li class="text-gray-800"><span class="text-gray-600">Level 1 :</span class="font-bold"> 100$</li>
                <li class="text-gray-800"><span class="text-gray-600">Level 2 :</span class="font-bold"> 100$</li>
                <li class="text-gray-800"><span class="text-gray-600">Level 3 :</span class="font-bold"> 100$</li>
                <li class="text-gray-800"><span class="text-gray-600">Level 4 :</span class="font-bold"> 100$</li>
                </ul>
            </div>
            </div>

            <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Details</h2>

            <div class="mt-4 space-y-6">
                <p class="text-1xl text-gray-600"><strong>Les brevets et syllabus ne sont pas inclus.</strong><br> Les frais supplémentaires feront objet de 2<sup style="color:black;">ème</sup> tranche</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>


    <div class="container p-20">
        <form action="" method="POST" class="form">
            <legend>Inscription formation anglais</legend>
            <p class="text text-danger">* Indique une question obligatoire</p><br>
            <div class="row">
                <div class="form-group col-md-7 mb-3">
                    <label for="mail">Adresse mail<sup>*</sup></label>
                    <input name="mail-ang" placeholder="example@gmail.com" required type="mail" class="form-control" id="mail">
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="nom">Nom<sup>*</sup></label>
                    <input name="nom-ang" placeholder="exmaple : 'Mokamo'" required type="text" class="form-control" id="nom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="pnom">Postnom<sup>*</sup></label>
                    <input name="post-ang" placeholder="ndombe" type="text" required class="form-control" id="pnom">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="prnom">Prenom<sup>*</sup></label>
                    <input name="pren-ang" placeholder="jeffren" type="text" required class="form-control" id="prnom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label for="nationalite">Nationalité<sup>*</sup></label>
                    <input name="natio-ang" placeholder="Nationalité" type="text" required class="form-control" id="nationalite">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="ntel">Numéro téléphone WhatsApp<sup>*</sup></label>
                    <input name="ntel-ang" placeholder="0829734722" required type="tel" required class="form-control" id="ntel">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="nationalité">Lieu de Naissance<sup>*</sup></label>
                    <input name="lieu-ang" placeholder="Kinshasa" type="text" required class="form-control" id="nationalité">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="date">Date de naissance<sup>*</sup></label>
                    <input name="d-ang" type="date" class="form-control" required id="date">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label>Sexe<sup>*</sup></label>
                    <div>
                        <input type="radio" name="sexe-ang" value="Masculin"><label for="h"> Masculin</label>
                        <input type="radio" name="sexe-ang" value="Feminin"><label for="f"> Feminin</label>
                    </div>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>Ett-civil<sup>*</sup></label>
                    <div>
                        <input type="radio" name="etat-civ-ang" value="Marié" required id="h"><label for="m"> Marié</label>
                        <input type="radio" name="etat-civ-ang" value="Célibataire" required id="f"><label for="c"> Célibataire</label>
                    </div>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>Avez-vous déjà effectué une formation en anglais ?</label>
                    <div>
                        <input type="radio" name="formation-ang" value="Oui" required id="n"><label for="o"> Oui</label>
                        <input type="radio" name="formation-ang" value="Non" required id="n"><label for="n"> Non</label>
                    </div>
                </div>
            </div>
            <button name="form-ang" class="btn btn-primary col-md-4">S'inscrire</button>
        </form>
    </div>

    <?php 
    
        include('footer.php');

    ?>

</body>
</html>