<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/elit.css">
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Elit Avenir/contact</title>
</head>
<body>
    
<?php 
    include('menu.php');
?>
    <div style="background-image:url('images/Contact_us_relaunch_banner.jpg');" class="acc-cont mb-3 text-center">
        <h1 class="text-4xl text-white font-semibold p-5">Contact</h1>
        <i class="text-white text-2xl p-2 mb-4 cursor-pointer bi bi-facebook"></i>
        <i class="text-white text-2xl p-2 mb-4 cursor-pointer bi bi-linkedin"></i>
        <i class="text-white text-2xl p-2 mb-4 cursor-pointer bi bi-whatsapp"></i>
        <i class="text-white text-2xl p-2 mb-4 cursor-pointer bi bi-instagram"></i>
        <h3 class="text-2xl text-white mt-3"><i class="bi bi-geo-alt-fill"></i>Nouvelle galerie présidentielle, <strong>Niveau 21, appartement 21</strong></h3>
    </div>
    <div class="container">
        <form action="sendMail.php" method="post">
            <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <label for="nom">Nom</label>
                    <input name="nom" type="text" id="nom" class="form-control" required placeholder="Votre nom">
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="mail">Mail</label>
                    <input name="mail" type="text" id="mail" class="form-control" required placeholder="Votre mail">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 mb-3">
                    <label for="suj">Sujet</label>
                    <input name="sujet" type="text" id="suj" class="form-control" required placeholder="Sujet">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 mb-3">
                    <label for="msg">Message</label>
                    <textarea name="msg" id="msg" required cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <button class="btn btn-primary mb-4 col-md-5">Envoyer</button>
        </form>
    </div>

    <?php 
    
        include('footer.php');

    ?>
    <script src="javascript/elit-avenir.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>