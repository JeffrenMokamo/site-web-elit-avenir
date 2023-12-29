<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elit-Avenir :: A propos</title>
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <link rel="stylesheet" href="css/elit.css">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php 
        include('menu.php');
    ?>

<div class="fixed top-0 bg-white nav-bar flex w-full items-center">
      <label for="menu-bottom"><i class="bi bi-list"></i></label>
      <input type="checkbox" id="menu-bottom">
      <div class="logo">
          <a href="index.html" class="flex items-center">
              <img src="images/logo-elit.png" alt="" class="w-12">
              <h2 class="font-semibold">ELITE AVENIR</h2>
          </a>
      </div>

      <nav>
          <ul class="relative">
              <li><a href="index.html" class="links-nav-ba active-l">Accueil</a></li>
              <li><a href="about.html" class="links-nav-ba">Apropos</a></li>
              <li><a href="javascript:void(0)">Nos formations +</a>
                  <ul class="absolute">
                      <li class="flex items-center">
                          <i class="bi bi-person-raised-hand"></i>
                          <a desabled href="form-anglais.html" class="links-nav-ba">Anglais</a>
                      </li>
                      <li class="flex items-center">
                          <i class="bi bi-laptop"></i>
                          <a href="form-informatique.html" class="links-nav-ba">Informatique</a>
                      </li>
                      <li class="flex items-center">
                          <i class="bi bi-car-front-fill"></i>
                          <a href="form-auto-ecole.html" class="links-nav-ba">Auto-école</a>
                      </li>
                      <li class="flex items-center">
                      <i class="bi bi-backpack-fill"></i>
                          <a href="form-eleves.html" class="links-nav-ba">Pour élèves</a>
                      </li>
                  </ul>
              </li>
          </ul>
      </nav>
      <button class=""><a href="contact.html">Contact</button></a>
  </div>

    <div style="background-image: url('images/blababla.avif');" class="acc-about-elit w-100">
        <h1 class="w-100 h-100 d-flex align-items-center justify-content-center">A propos</h1>
    </div>
    <div class="container txt-about rounded mb-4">
      <h1 style="margin-bottom: 30px;">Qui sommes-nous ?</h1>
      <p>Élite Avenir est une structure à finalité sociale vue l’apport qu’elle veut à cette dernière. Apprendre la connaissance et le savoir à la population ou aux membres de la société est ce dans quoi veut œuvrer Élite Avenir. Ce souci est justifié du fait que dans la société, congolaise en particulier, tout le monde n’a pas les moyens ou les possibilités de s’offrir les études supérieures ou universitaires. Grâce à des formations d’ordre professionnel, Élite Avenir permet aux démunis et à toutes les catégories ou souches sociales d’acquérir des connaissances qui les rendront éligibles au marché du travail partout dans le monde.</p>
    </div>

    <div class="container mb-5">

      <h1 class="text-3xl font-bold mb-4">Membres de l'équipe</h1>
      <p class="text-2xl text-gray-800 font-semibold mb-5 col-md-5">Une grande vision sans les gens formidables n'a pas d'importance, travaillons ensemble</p>
      <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-10">
          <div class="text-center">
             <img src="images/obed.jpg" alt="" class="rounded mb-3 w-full h-85">
             <span class="mb-3 text-xl mb-5 font-semibold text-gray-700">Butsila Mbungu obed</span>
             <p class="text-gray-400">PDG</p>
              <div class="">
                <i class="bi bi-twitter text-gray-400"></i><i class="bi bi-facebook ml-3 text-gray-400"></i><i class="bi bi-instagram ml-3 text-gray-400"></i>
              </div>              
          </div> 
          <div class="text-center">
             <img src="images/ketsia.jpg" alt="" class="rounded mb-3 w-full h-85">
             <span class="mb-3 text-xl mb-5 font-semibold text-gray-700">Ketsia Kamin</span>
             <p class="text-gray-400">Directrice Ressources Humaines</p>
              <div class="">
                <i class="bi bi-twitter text-gray-400"></i><i class="bi bi-facebook ml-3 text-gray-400"></i><i class="bi bi-instagram ml-3 text-gray-400"></i>
              </div>              
          </div>
          <div class="text-center">
            <img src="images/joel.jpg" alt="" class="rounded mb-3 w-full h-85">
            <span class="mb-3 text-xl mb-5 font-semibold text-gray-700 ">Kalala Joel</span>
            <p class="text-gray-400">DG et Responsable Administratif</p>
            <div class="">
              <i class="bi bi-twitter text-gray-400"></i><i class="bi bi-facebook ml-3 text-gray-400"></i><i class="bi bi-instagram ml-3 text-gray-400"></i>
            </div>
          </div>
          <div class="text-center">
            <img src="images/exauce.jpg" alt="" class="rounded mb-3 w-full h-85">
            <span class="mb-3 text-xl mb-5 font-semibold text-gray-700">Ekala Exaucé</span>
            <p class="text-gray-400">Directeur Commercial</p>
              <div class="">
                <i class="bi bi-twitter text-gray-400"></i><i class="bi bi-facebook ml-3 text-gray-400"></i><i class="bi bi-instagram ml-3 text-gray-400"></i>
              </div>
          </div>
          <div class="text-center">
            <img src="images/eliel.jpg" alt="" class="rounded mb-3 w-full h-85">
            <span class="mb-3 text-xl mb-5 font-semibold text-gray-700">Mwamba nyangama Eliel</span>
            <p class="text-gray-400">Responsable Informatique et Marketing</p>
              <div class="">
                <i class="bi bi-twitter text-gray-400"></i><i class="bi bi-facebook ml-3 text-gray-400"></i><i class="bi bi-instagram ml-3 text-gray-400"></i>
              </div>
          </div>
          <div class="text-center">
            <img src="images/nicolas.jpg" alt="" class="rounded mb-3 w-full h-85 h-55">
            <span class="mb-3 text-xl mb-5 font-semibold text-gray-700 ">Nicolas</span>
            <p class="text-gray-400">Directeur Technique</p>
            <div class="">
              <i class="bi bi-twitter text-gray-400"></i><i class="bi bi-facebook ml-3 text-gray-400"></i><i class="bi bi-instagram ml-3 text-gray-400"></i>
            </div>
          </div>

      </div>

    </div>


    <?php 
        include('footer.php');
    ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="javascript/elit-avenir.js"></script>
</body>
</html>