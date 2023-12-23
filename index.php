<?php 

  include('connexion-bdd.php');

  if(isset($_POST['btn-message'])){

    try {
      $nom = $_POST['nom-msg'];
      $mail = $_POST['mail-msg'];
      $msg = $_POST['message'];

      $insert = $connect_bdd->prepare('INSERT INTO msg(nom,mail,msg) VALUES(?,?,?)');
      $res = $insert->execute(array($nom, $mail, $msg));

      echo '<script>alert(\'Votre message a été envoyé avec succès !\');</script>';
    }
    catch (Execption $e) {
      echo 'Erreur de connexion';
    }
  }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elit-Avenir</title>
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <!-- <link rel="stylesheet" href="dist/output.css"> -->
    <link rel="stylesheet" href="css/elit.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <?php 
    include('menu.php');
  ?>
        <div style="background-image: url('images/bourse.jpg');" class="elit-avenir-acc d-flex position-relative">
            <div class="text-acc-elit-avenir col-md-7 d-flex">
              <div class="pt-40 pl-5" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h1 class="text-5xl text-white font-semibold mb-5">Bienvenue !</h1>
                <h2 class="col-md-10 text-5xl text-white font-semibold">La meilleure manière de predire l'avenir est de le créer</h2>
                <p class="col-md-10"></p> 
              </div>
            </div>
            <div class="forms">
              <div class="rounded w-100 h-100 bg-info flex items-center justify-center flex-col">
                <p class="text-2xl mb-3">Élite Avenir est une structure à finalité sociale vue l’apport qu’elle veut à cette dernière.</p>
                <p class="text-1xl">Élite avenir est une société basée à Kinshasa, spécialisé dans plusieurs domaines d’activités. Notamment les formations professionnel, le Marketing et divers activités.</p>
              </div>
            </div>
        </div>

        <div class="about-elit w-100">
          <div class="text-center w-100">
            <h1>Notre histoire</h1>
            <p class="w-100 col-md-2 text-center">fondé en 2022 par le visionnaire Butsila Mbungu Obed, Elite Avenir est un centre de formation qui a connu une croissance rapide entre 2022 et 2023. En deux ans le centre de formation a formé différents candidats dans plusieurs domaine notamment, en anglais , informatique, gestion de projet , entrepreneuriat ,projet d’immigration et entrepreneuriat. Depuis lors elite avenir ne cesse de prouver son efficacité au peuple congolais.</p>
          </div>

          <div class="row">
            <div class="img-about-elit h-100 col-md-6">
              <img class="rounded col-md-12" src="images/etudiant-africain-2.webp" alt="">
            </div>
            <div class="txt-about-elit col-md-6 d-flex flex-col">
              <h1>A propos</h1>
              <p class="col-md-10">Élite Avenir est une structure à finalité sociale vue l’apport qu’elle veut à cette dernière. Apprendre la connaissance et le savoir à la population ou aux membres de la société est ce dans quoi veut œuvrer Élite Avenir. Ce souci est justifié du fait que dans la société, congolaise en particulier, tout le monde n’a pas les moyens ou les possibilités de s’offrir les études supérieures ou universitaires. Grâce à des formations d’ordre professionnel, Élite Avenir permet aux démunis et à toutes les catégories ou souches sociales d’acquérir des connaissances qui les rendront éligibles au marché du travail partout dans le monde.</p>
              <button class="btn btn-primary col-md-4">En savoir plus</button>
            </div>
          </div>
        </div>

        <div class="nos-formations col-md-12 container">
          <div class="titre">
            <h1>Nos formations</h1>
          </div>
          <div class="row">
            <div class="col-md-4 anglais" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <h1 class="text-2xl font-semibold text-gray-500 mb-3">Anglais</h1> 
              <hr class="mb-3 col-md-7"> 
             <img src="images/english.jpg" alt="" class="col-md-12">    
              <p class="col-md-12">Booster votre anglais avec une formation sur mesure. Apprendre facilement et rapidement !</p>
              <a href="form-anglais.php"><button class="btn btn-primary col-md-5">S'inscrire</button></a>
            </div>
            <div class="col-md-4 auto-école">
              <h1 class="text-2xl font-semibold text-gray-500 mb-3">Auto-Ecole</h1>
              <hr class="mb-3 col-md-7">
              <img src="images/autoe.webp" alt="" class="col-md-12">
              <p class="col-md-12">Apprendre à conduire, c'est apprendre à se deplacer sans difficulté, sans déranger les autres.</p>
              <a href="form-auto-ecole.php"><button class="btn btn-primary col-md-5">S'inscrire</button></a>
            </div>
            <div class="col-md-4 informatique" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <h1 class="text-2xl font-semibold text-gray-500 mb-3">Informatique</h1>
              <hr class="mb-3 col-md-7">
              <img class="col-md-12" src="images/informatique.jpeg" alt="">
              
              <p class="col-md-12">De nos jours, une personne sans connaissances en informatique est une personne morte.</p>
              <a href="form-informatique.php"></a><button class="btn btn-primary col-md-5">S'inscrire</button></a>
            </div>
          </div>
        </div>

        <div class="py-24 sm:py-32 nos-parts">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <h2 class="text-center font-bold leading-8 text-gray-900 txt-part">Nos Partenaires</h2>
              <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none md:grid-cols-6">
                  <img class="col-span-2 max-h-15 w-full object-contain lg:col-span-1 rounded-full" src="images/WhatsApp Image 2023-10-31 à 16.18.49_7bf6e107.jpg" alt="Transistor" width="158" height="48">
                  <img class="col-span-2 max-h-15 w-full object-contain lg:col-span-1 rounded-full" src="images/WhatsApp Image 2023-10-31 à 16.18.50_2c84e732.jpg" alt="Reform" width="158" height="48">
                  <img class="col-span-2 max-h-15 w-full object-contain lg:col-span-1 rounded-full" src="images/STS.png" alt="Tuple" width="158" height="48">
                  <img class="col-span-2 max-h-15 w-full object-contain sm:col-start-2 lg:col-span-1 rounded-full" src="images/jeune.png" alt="SavvyCal" width="158" height="48">
                  <img class="col-span-2 col-start-2 max-h-15 w-full object-contain sm:col-start-auto lg:col-span-1 rounded-full" src="images/WhatsApp Image 2023-10-31 à 16.18.51_b3cd5374.jpg" alt="Statamic" width="158" height="48">
                  <img class="col-span-2 col-start-2 max-h-15 w-full object-contain sm:col-start-auto lg:col-span-1 rounded-full" src="images/WhatsApp Image 2023-10-31 à 16.18.52_ea561346.jpg" alt="Statamic" width="158" height="48">
              </div>
            </div>
        </div>

        <div style="background-image: url('images/about1.jpg')" class="comment relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        
          <div class="mx-auto max-w-7xl px-6 lg:px-8 w-100 h-100">
            <div class="mx-auto max-w-2xl lg:mx-0">
              <h2 style="margin-bottom:20px;" class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Laisser nous un message </h2>
              <form action="" method="POST">
                <input name="nom-msg" type="text" class="form-control txt-msg" placeholder="Votre nom" name="nom">
                <input name="mail-msg" type="mail" class="form-control txt-msg" placeholder="Votre mail" name="mail">
                <textarea name="message" id="message" cols="30" rows="6" placeholder="message" class="form-control txt-msg"></textarea>
                <button name="btn-message" class="btn btn-primary col-md-6">Envoyer</button>
              </form>
            </div>
          </div>
        </div>

        <div class="remises-brevets container">
          <h1>Rémise des brevets</h1>
          <div class="row">
            <div class="col-md-6" data-aos="fade-up"data-aos-anchor-placement="bottom-bottom">
              <img src="images/form.jpg" alt="" class="rounded">
            </div>
            <div class="col-md-6" data-aos="zoom-out-left">
              <img src="images/WhatsApp Image 2023-10-31 à 16.12.25_6c3b16e6.jpg" alt="" class="rounded">
            </div>
            <div class="col-md-6" data-aos="fade-up"data-aos-anchor-placement="bottom-bottom">
              <img src="images/WhatsApp Image 2023-10-31 à 16.12.26_0480d542.jpg" alt="" class="rounded">
            </div>
            <div class="col-md-6">
              <img src="images/WhatsApp Image 2023-10-31 à 16.12.29_92441311.jpg" alt="" class="rounded">
            </div>
          </div>
        </div>

      <?php 
        include('footer.php');
      ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="javascript/elit-avenir.js"></script>
</body>
</html>