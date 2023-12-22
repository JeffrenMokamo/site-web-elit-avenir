<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/elit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    
    <div class="fixed top-0 bg-white nav-bar flex w-full items-center">
        <label for="menu-bottom"><i class="bi bi-list"></i></label>
        <input type="checkbox" id="menu-bottom">
        <div class="logo">
            <a href="index.php" class="flex items-center">
                <img src="images/logo-elit.png" alt="" class="w-12">
                <h2 class="font-semibold">ELITE AVENIR</h2>
            </a>
        </div>

        <nav>
            <ul class="relative">
                <li><a href="index.php" class="links-nav-ba active-l">Accueil</a></li>
                <li><a href="about.php" class="links-nav-ba">Apropos</a></li>
                <li><a href="javascript:void(0)">Nos formations +</a>
                    <ul class="absolute">
                        <li class="flex items-center">
                            <i class="bi bi-person-raised-hand"></i>
                            <a desabled href="form-anglais.php" class="links-nav-ba">Anglais</a>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-laptop"></i>
                            <a href="form-informatique.php" class="links-nav-ba">Informatique</a>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-car-front-fill"></i>
                            <a href="form-auto-ecole.php" class="links-nav-ba">Auto-école</a>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-car-front-fill"></i>
                            <a href="form-eleves.php" class="links-nav-ba">Pour élèves</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <button class=""><a href="contact.php">Contact</button></a>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>