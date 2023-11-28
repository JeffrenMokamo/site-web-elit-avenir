<?php 

    include('connexion-bdd.php');

    $donnes_ang = $connect_bdd->query('SELECT * FROM anglais');

    $donnes_info = $connect_bdd->query('SELECT * FROM informatique');

    $donnes_auto = $connect_bdd->query('SELECT * FROM autoecole');

    $donnes_msg = $connect_bdd->query('SELECT * FROM msg');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" rel="shortcut icon" href="images/logo-elit.png">
    <title>ELite-Avenir/Accueil-Admin</title>
    <link rel="stylesheet" href="css/elit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<div class="min-h-full ">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="images/logo-elit.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="d-flex ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="text-white rounded-md px-3 py-2 text-md font-medium" aria-current="page">Elite-Avenir</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="d-flex mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
      <a style="margin-left: 120px;"  href="index.php" class="bg-info text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Retourner à l'accueil</a>
    </div>
  </header>
</div>

    <div class="w-100 tables">
        <div class="menu">
                <ul class="nav">
                    <li data-anim="1" class="nav-item formLinks " >Formations Anglais</li>
                    <li data-anim="2"  class="nav-item formLinks " >Formations informatique</li>
                    <li data-anim="3" class="nav-item formLinks " >Formations Auto-école</li>
                    <li data-anim="4" class="nav-item formLinks " >Voir les messages</li>
                </ul>
        </div>

        <div class="table-english container tabpers" data-anim="1">
            <h1 class="text-3xl font-bold">Tableau des personnes inscrites pour la formation d'anglais</h1>
            <table class="table table-dark table-striped-columns table-bordered table-success">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Postnom</th>
                        <th>Prenom</th>
                        <th>Nationalité</th>
                        <th>Téléphone</th>
                        <th>Lieu de naissance</th>
                        <th>date de naissance</th>
                        <th>Sexe</th>
                        <th>Etat-civil</th>
                        <th>Confirmation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($reponses=$donnes_ang->fetch()){ ?>
                        <tr>
                            <td><?php echo $reponses['id']; ?></td>
                            <td><?php echo $reponses['mail']; ?></td>
                            <td><?php echo $reponses['nom']; ?></td>
                            <td><?php echo $reponses['postnom']; ?></td>
                            <td><?php echo $reponses['prenom']; ?></td>
                            <td><?php echo $reponses['nationalite']; ?></td>
                            <td><?php echo $reponses['numtel']; ?></td>
                            <td><?php echo $reponses['lieuNaiss']; ?></td>
                            <td><?php echo $reponses['dateNaiss']; ?></td>
                            <td><?php echo $reponses['sexe']; ?></td>
                            <td><?php echo $reponses['etatcivil']; ?></td>
                            <td><?php echo $reponses['confirm']; ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

        <div class="table-info container tabpers" data-anim="2">
            <h1 class="text-3xl font-bold">Tableau des personnes inscrites pour la formation informatique</h1>
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Postnom</th>
                        <th>Prenom</th>
                        <th>Nationalité</th>
                        <th>Téléphone</th>
                        <th>Lieu de naissance</th>
                        <th>date de naissance</th>
                        <th>Sexe</th>
                        <th>Etat-civil</th>
                        <th>Confirmation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($reponses=$donnes_info->fetch()){ ?>
                        <tr>
                            <td><?php echo $reponses['id']; ?></td>
                            <td><?php echo $reponses['mail']; ?></td>
                            <td><?php echo $reponses['nom']; ?></td>
                            <td><?php echo $reponses['postnom']; ?></td>
                            <td><?php echo $reponses['prenom']; ?></td>
                            <td><?php echo $reponses['nationalite']; ?></td>
                            <td><?php echo $reponses['numtel']; ?></td>
                            <td><?php echo $reponses['lieuNaiss']; ?></td>
                            <td><?php echo $reponses['dateNaiss']; ?></td>
                            <td><?php echo $reponses['sexe']; ?></td>
                            <td><?php echo $reponses['etatcivil']; ?></td>
                            <td><?php echo $reponses['confirm']; ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

        <div class="table-auto container tabpers" data-anim="3">
            <h1 class="text-3xl font-bold">Tableau des personnes inscrites pour la formation auto-école</h1>
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Postnom</th>
                        <th>Prenom</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Nationalité</th>
                        <th>Urgence</th>
                        <th>Lieu Naissance</th>
                        <th>Date Naissance</th>
                        <th>Sexe</th>
                        <th>Etat-civil</th>
                        <th>Déjà conduit</th>
                        <th>Boîte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($reponses=$donnes_auto->fetch()){ ?>
                        <tr>
                            <td><?php echo $reponses['id']; ?></td>
                            <td><?php echo $reponses['mail']; ?></td>
                            <td><?php echo $reponses['nom']; ?></td>
                            <td><?php echo $reponses['postnom']; ?></td>
                            <td><?php echo $reponses['prenom']; ?></td>
                            <td><?php echo $reponses['numtel']; ?></td>
                            <td><?php echo $reponses['adresse']; ?></td>
                            <td><?php echo $reponses['nationalite']; ?></td>
                            <td><?php echo $reponses['telurgence']; ?></td>
                            <td><?php echo $reponses['lieuNaiss']; ?></td>
                            <td><?php echo $reponses['dateNaiss']; ?></td>
                            <td><?php echo $reponses['sexe']; ?></td>
                            <td><?php echo $reponses['etatcivil']; ?></td>
                            <td><?php echo $reponses['conduire']; ?></td>
                            <td><?php echo $reponses['maitrise']; ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>

        <div class="container table-msg tabpers" data-anim="4">
            <h1 class="text-3xl font-bold">Tableau des messages</h1>
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Mail</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($reponses = $donnes_msg->fetch()) {?>
                    <tr>
                        <td><?php echo $reponses['id']; ?></td>
                        <td><?php echo $reponses['nom']; ?></td>
                        <td><?php echo $reponses['mail']; ?></td>
                        <td><?php echo $reponses['msg']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="javascript/elit-avenir.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>