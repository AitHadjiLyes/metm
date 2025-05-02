<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <?php include __DIR__ . '/meta.php'; ?>
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <link rel="icon" type="image/png" href="/assets/images/METM.png" sizes="32x32">

    <!-- CSS principal -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Script principal -->
    <script type="module" src="/js/main.js"></script>
    <script src="/js/main-simple.js"></script>

    <!-- Additional mobile optimization -->
    <meta name="theme-color" content="#1e40af">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <style>
    /* Styles critiques pour le header */
    header {
      height: auto;
      padding: 0.5rem 0;
    }
    .logo-img {
      max-height: 60px;
      width: auto;
    }
    #menu-toggle {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 30px;
      height: 21px;
      background: transparent;
      border: none;
      cursor: pointer;
      padding: 0;
      z-index: 10;
    }
    #menu-toggle span {
      display: block;
      width: 100%;
      height: 3px;
      background-color: white;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    .navbar-link {
      color: white;
      font-weight: 500;
    }
    .navbar-link:hover {
      color: var(--color-accent, #f59e0b);
    }
    #mobile-menu {
      z-index: 1000;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }
  </style>
</head>

<body>
<!-- filepath: /home/ashentrail/Documents/stage/b2bV2/includes/header.php -->
<header class="bg-custom-primary text-white fixed top-0 left-0 w-full z-50 shadow-md">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
       

        <!-- Logo -->
        <div class="flex items-center">
            <a href="/index.php" class="hover:text-accent transition">
                <img src="/assets/images/logov2.png" alt="Logo <?php echo SITE_NAME; ?>" class="logo-img" loading="eager" />
            </a>
        </div>

        <!-- Menu principal -->
        <nav id="menu" class="hidden md:flex relative">
            <ul class="flex space-x-8 items-center">
                <li><a href="/index.php" class="navbar-link">Accueil</a></li>
                <li class="relative group">
                    <button class="navbar-link flex items-center space-x-1 focus:outline-none">
                        <span>Solutions Entreprises</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <ul class="absolute z-50 left-0 top-full mt-2 bg-custom-primary text-white rounded-lg shadow-lg transition-all duration-300 min-w-[250px] divide-y divide-white/20 opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                        <li><a href="/solutions-pme.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">PME</a></li>
                        <li><a href="/solutions-education.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Écoles et Universités</a></li>
                        <li><a href="/solutions-collectivites.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Collectivités</a></li>
                        <li><a href="/blanchiment-donnees.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Blanchiment de Données</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <button class="navbar-link flex items-center space-x-1 focus:outline-none">
                        <span>Nos Offres Packagées</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <ul class="absolute z-50 left-0 top-full mt-2 bg-custom-primary text-white rounded-lg shadow-lg transition-all duration-300 min-w-[250px] divide-y divide-white/20 opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                        <li><a href="/pack-startup.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Pack Start-up</a></li>
                        <li><a href="/pack-education.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Pack Éducation</a></li>
                        <li><a href="/pack-entreprise.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Pack Entreprise</a></li>
                        <li><a href="/pack-sur-mesure.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Pack Sur-mesure</a></li>
                    </ul>
                </li>
                <li class="relative group">
                    <button class="navbar-link flex items-center space-x-1 focus:outline-none">
                        <span>Processus d'Achat</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <ul class="absolute z-50 left-0 top-full mt-2 bg-custom-primary text-white rounded-lg shadow-lg transition-all duration-300 min-w-[250px] divide-y divide-white/20 opacity-0 invisible group-hover:opacity-100 group-hover:visible">
                        <li><a href="/comment-commander.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Comment commander ?</a></li>
                        <li><a href="/livraison-deploiement.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Livraison et Déploiement</a></li>
                        <li><a href="/garantie-support.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Garantie et Support</a></li>
                    </ul>
                </li>
                <li><a href="/about.php" class="navbar-link">À propos</a></li>
                <li><a href="/contact.php" class="navbar-link">Contact</a></li>
                <li><a href="/formulaire-pro.php" class="btn-accent px-5 py-2 rounded-full font-semibold">Demander un devis</a></li>

            </ul>
        </nav>
        <!-- Bouton du menu hamburger pour mobile -->
<div class="flex items-center md:hidden">
    <button id="menu-toggle" class="text-white focus:outline-none">
        <span class="block w-6 h-0.5 bg-white mb-1"></span>
        <span class="block w-6 h-0.5 bg-white mb-1"></span>
        <span class="block w-6 h-0.5 bg-white"></span>
    </button>
</div>

<!-- Menu mobile -->
<nav id="mobile-menu" class="fixed top-0 left-0 w-64 h-full bg-custom-primary text-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50">
    <ul class="p-6 space-y-4">
        <li><a href="/index.php" class="block text-lg font-medium hover:text-accent">Accueil</a></li>
        <li>
            <button class="mobile-submenu-toggle w-full text-left text-lg font-medium hover:text-accent flex items-center justify-between">
                <span>Solutions Entreprises</span>
                <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <ul class="mobile-submenu hidden pl-4 mt-2 space-y-2">
                <li><a href="/solutions-pme.php" class="block text-base font-medium hover:text-accent">Solutions PME</a></li>
                <li><a href="/solutions-education.php" class="block text-base font-medium hover:text-accent">Écoles et Universités</a></li>
                <li><a href="/solutions-collectivites.php" class="block text-base font-medium hover:text-accent">Collectivités</a></li>
                <li><a href="/blanchiment-donnees.php" class="block text-base font-medium hover:text-accent">Blanchiment de Données</a></li>
            </ul>
        </li>
        <li>
            <button class="mobile-submenu-toggle w-full text-left text-lg font-medium hover:text-accent flex items-center justify-between">
                <span>Nos Offres Packagées</span>
                <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <ul class="mobile-submenu hidden pl-4 mt-2 space-y-2">
                <li><a href="/pack-startup.php" class="block text-base font-medium hover:text-accent">Pack Start-up</a></li>
                <li><a href="/pack-education.php" class="block text-base font-medium hover:text-accent">Pack Éducation</a></li>
                <li><a href="/pack-entreprise.php" class="block text-base font-medium hover:text-accent">Pack Entreprise</a></li>
                <li><a href="/pack-sur-mesure.php" class="block text-base font-medium hover:text-accent">Pack Sur-mesure</a></li>
            </ul>
        </li>
        <li>
            <button class="mobile-submenu-toggle w-full text-left text-lg font-medium hover:text-accent flex items-center justify-between">
                <span>Processus d'Achat</span>
                <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <ul class="mobile-submenu hidden pl-4 mt-2 space-y-2">
                <li><a href="/comment-commander.php" class="block text-base font-medium hover:text-accent">Comment commander ?</a></li>
                <li><a href="/livraison-deploiement.php" class="block text-base font-medium hover:text-accent">Livraison et Déploiement</a></li>
                <li><a href="/garantie-support.php" class="block text-base font-medium hover:text-accent">Garantie et Support</a></li>
            </ul>
        </li>
        <li><a href="/contact.php" class="block text-lg font-medium hover:text-accent">Contact</a></li>
    </ul>
</nav>
    </div>
</header>

<!-- Ajout d'un espace pour compenser le header fixe -->
<div style="height: 70px;"></div>
