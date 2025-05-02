<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <?php include __DIR__ . '/meta.php'; ?>
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <link rel="icon" type="image/png" href="../assets/images/METM.png" sizes="32x32">

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
<header class="bg-custom-primary text-white fixed top-0 left-0 w-full z-50 shadow-md">
<div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/index.php" class="hover:text-accent transition">
                <img src="/assets/images/logov2.png" alt="Logo <?php echo SITE_NAME; ?>" class="logo-img" loading="eager" />
            </a>
        </div>

        <!-- Menu Desktop -->
        <nav id="menu" class="hidden md:flex relative">
            <ul class="flex space-x-8 items-center">
                <li><a href="/index.php" class="navbar-link">Accueil</a></li>
                
                <!-- Services avec Sous-menu -->
                <li class="relative group">
                    <button id="services-button" class="navbar-link flex items-center space-x-1 focus:outline-none">
                        <span>Services</span>
                        <i id="chevron" class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <ul id="services-menu" class="absolute z-50 left-0 top-full mt-2 bg-custom-primary text-white rounded-lg shadow-lg transition-all duration-300 min-w-[250px] divide-y divide-white/20 opacity-0 invisible">
                    <li><a href="/blog.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Blog</a></li>
                        <li><a href="/telecharger-plaquette.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Plaquette commerciale</a></li>
                        <li><a href="/formulaire-pro.php" class="navbar-link block text-center py-3 hover:bg-primary-dark">Devis Pro</a></li>
                    </ul>
                </li>

                <li><a href="/contact.php" class="navbar-link">Contact</a></li>
                <li><a href="/formulaire-pro.php" class="btn-accent px-5 py-2 rounded-full font-semibold">Demander un devis</a></li>
            </ul>
        </nav>

        <!-- Menu Mobile -->
        <div class="flex items-center space-x-4 md:hidden">
            <a href="/formulaire-pro.php" class="btn-accent px-4 py-2 rounded-full font-semibold text-sm whitespace-nowrap">Devis</a>
            <button id="menu-toggle" class="text-2xl" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <!-- Menu Mobile (Burger) -->
    <nav id="mobile-menu" class="fixed top-0 left-0 h-full w-64 bg-custom-primary text-white transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
        <div class="p-6 relative">
            <button id="menu-close" class="text-white text-2xl absolute top-4 right-4" aria-label="Fermer le menu">
                <i class="fas fa-times"></i>
            </button>
            <ul class="flex flex-col space-y-6 mt-12">
                <li><a href="/index.php" class="hover:text-accent transition">Accueil</a></li>
                
                <!-- Services Mobile -->
                <li>
                    <button id="services-mobile-button" class="w-full text-left font-bold text-accent flex items-center justify-between">
                        Services
                        <i id="chevron-mobile" class="fas fa-chevron-down text-xs ml-2 transition-transform duration-300"></i>
                    </button>
                    <ul id="services-mobile-menu" class="pl-4 mt-2 space-y-2 hidden">
                        <li><a href="/blog.php" class="block text-base font-medium text-white hover:bg-secondary hover:text-primary-dark px-4 py-2 rounded-md transition">Blog</a></li>
                        <li><a href="/telecharger-plaquette.php" class="block text-base font-medium text-white hover:bg-secondary hover:text-primary-dark px-4 py-2 rounded-md transition">Plaquette commerciale</a></li>
                        <li><a href="/formulaire-pro.php" class="block text-base font-medium text-white hover:bg-secondary hover:text-primary-dark px-4 py-2 rounded-md transition">Devis Pro</a></li>
                    </ul>
                </li>

                <li><a href="/contact.php" class="hover:text-accent transition">Contact</a></li>
                <li><a href="/formulaire-pro.php" class="btn-accent px-4 py-2 rounded-full font-semibold text-left">Demander un devis</a></li>
            </ul>
        </div>
    </nav>

    <!-- Overlay Mobile -->
    <div id="menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40 md:hidden"></div>
</header>

<!-- Ajout d'un espace pour compenser le header fixe -->
<div style="height: 70px;"></div>
