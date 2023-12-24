
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <title>Elit-Avenir/formulaire informatique</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="css/elit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php 
        
        include('menu.php');

    ?>

    <div class="english-form mx-auto max-w-2xl px-4 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-semibold tracking-tight text-gray-900 mb-4 sm:text-3xl">FORMATION INFORMATIQUE</h1>
                <p class="text-2xl mb-3">Nouvelle session de formation en informatique générale & bureautique</p>
                <p class="text-1xl">Acquérir des compétences en informatique et en logiciel Microsoft peut améliorer votre productivité, votre créaticité et votre capacité à résoudre des problèmes, bénéfiques pour votre vieprofessionnelle et personnelle. Elite avenir offre une opportunité pour apprendre ces compétences.</p>
            </div>

        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
            <p class="text-3xl tracking-tight text-gray-900 mb-3">50$ <br> <span class="text-xl">Participation <br>Inscription gratuite</span></p>

            <img class="rounded mb-3" src="images/form-info.avif" alt="">
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
            <h3 class="text-1xl font-medium text-gray-900 mb-3">Au programme</h3>
                <div class="flex">
                    <img style="width:80px; height:60px;" class="" src="images/word.jpeg" alt="">
                    <img style="width:80px; height:60px;" class="" src="images/excel.png" alt="">
                    <img style="width:80px; height:60px;" class="" src="images/powerpoint.jpeg" alt="">
                    <img style="width:80px; height:60px;" class="rounded" src="images/infogen.webp" alt="">
                </div>
         
            </div>

            <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Details</h2>

            <div class="mt-4 space-y-6">
                <p class="text-1xl text-gray-600"><strong>Les brevets et syllabus ne sont pas inclus.</strong></p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>


    <div class="container p-20 ">
        <form action="" method="POST" class="form">
            <legend>Inscription formation informatique</legend>
            <p class="text text-danger">* Indique une question obligatoire</p><br>
            <div class="row">
                <div class="form-group col-md-7 mb-3">
                    <label for="mail">Adresse mail<sup>*</sup></label>
                    <input name="mail" placeholder="example@gmail.com" required type="mail" class="form-control" id="mail">
                </div>
                <div class="form-group col-md-5 mb-3">
                    <label for="nom">Nom<sup>*</sup></label>
                    <input name="nom" placeholder="exmaple : 'Mokamo'" required type="text" class="form-control" id="nom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="pnom">Postnom<sup>*</sup></label>
                    <input name="post" placeholder="ndombe" type="text" required class="form-control" id="pnom">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="prnom">Prenom<sup>*</sup></label>
                    <input name="prenom" placeholder="jeffren" type="text" required class="form-control" id="prnom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 mb-3">
                    <label for="nationalite">Nationalité<sup>*</sup></label>
                    <input name="nationalite" placeholder="Nationalité" type="text" required class="form-control" id="nationalite">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="ntel">Numéro téléphone WhatsApp<sup>*</sup></label>
                    <input name="numwhat" placeholder="0829734722" required type="tel" class="form-control" id="ntel">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="nationalité">Lieu de Naissance<sup>*</sup></label>
                    <input name="lieu" placeholder="Kinshasa" type="text" required class="form-control" id="nationalité">
                </div>
                <div class="form-group col-md-3 mb-3">
                    <label for="date">Date de naissance<sup>*</sup></label>
                    <input name="dnaiss" type="date" class="form-control" require id="date">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4 mb-3">
                    <label>Sexe<sup>*</sup></label>
                    <div>
                        <input type="radio" name="sexe-info" value="Masculin" required id="h"><label for="h"> Masculin</label>
                        <input type="radio" name="sexe-info" value="Feminin" required id="f"><label for="f"> Feminin</label>
                    </div>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>Eatt-civil<sup>*</sup></label>
                    <div>
                        <input type="radio" name="etat-civ-info" value="Marié" required id="h"><label for="m"> Marié</label>
                        <input type="radio" name="etat-civ-info" value="Célibataire" required id="f"><label for="c"> Célibataire</label>
                    </div>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>Avez-vous déjà effectué une formation en informatique ?</label>
                    <div>
                        <input type="radio" name="formation" required id="o" value="Oui"><label for="o"> Oui</label>
                        <input type="radio" name="formation" required id="n" value="Non"><label for="n"> Non</label>
                    </div>
                </div>
            </div>
            <button name="form-info" class="btn btn-primary col-md-3">S'inscrire</button>
        </form>
    </div>

    <?php 
    
        include('footer.php');

    ?>
</body>
</html>