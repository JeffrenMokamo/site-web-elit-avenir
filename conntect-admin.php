<?php 

  include('connexion-bdd.php');

  if(isset($_POST['btn-connect'])){

    try{
      $identifiant = $_POST['identadmin'];
      $pass = $_POST['password'];

      $donnes = $connect_bdd->query('SELECT * FROM admin');

      while($reponses = $donnes->fetch()){
        if($reponses['identifiant'] === $identifiant && $reponses['pass'] === $pass){
          header('location:accueil-admin.php');
        }
      }
      echo '<script>alert(\'Vous avez insérer un mauvais identifiant ou un mauvais mot de passe\');</script>';
    }
    catch(Exception $e){
      echo "Echec de connexion";
    }
 }

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elit-Avenir/connection</title>
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <link rel="stylesheet" href="css/elit.css">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto w-auto col-md-1" id="img-ins" src="images/logo-elit.png" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Connectez-vous à votre compte</h2>
      </div>
  
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="" method="POST">
            <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Identifiant admin</label>
            <div class="mt-2">
                <input id="ident" name="identadmin" type="text" autocomplete="off" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div> 
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button name="btn-connect" type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Se connecter</button>
        </div>
      </form>
    </div>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="javascript/elit-avenir.js"></script>
</body>
</html>