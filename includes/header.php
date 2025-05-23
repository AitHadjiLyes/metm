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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts principaux -->
    <script type="module" src="/js/main.js"></script>
    <script src="/js/main-simple.js"></script>

    <!-- Mobile optimization -->
    <meta name="theme-color" content="#1e40af">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Script RGPD -->
    <script>
    function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days*24*60*60*1000));
        document.cookie = name + "=" + value + ";expires=" + d.toUTCString() + ";path=/";
    }

    function getCookie(name) {
        const cookies = document.cookie.split(';');
        for (let c of cookies) {
            c = c.trim();
            if (c.indexOf(name + "=") === 0) return c.substring(name.length + 1);
        }
        return null;
    }

    function acceptCookies() {
        setCookie('cookieConsent', 'accepted', 365);
        document.getElementById('cookie-banner').style.display = 'none';
        loadGA4();
    }

    function refuseCookies() {
        setCookie('cookieConsent', 'refused', 365);
        document.getElementById('cookie-banner').style.display = 'none';
    }

    function loadGA4() {
        const script1 = document.createElement('script');
        script1.async = true;
        script1.src = "https://www.googletagmanager.com/gtag/js?id=G-1QMZ1YLRH8";
        document.head.appendChild(script1);

        const script2 = document.createElement('script');
        script2.innerHTML = `
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-1QMZ1YLRH8');
        `;
        document.head.appendChild(script2);
    }

    window.addEventListener("DOMContentLoaded", () => {
        const consent = getCookie('cookieConsent');
        if (consent === 'accepted') {
            loadGA4();
            const banner = document.getElementById('cookie-banner');
            if (banner) banner.style.display = 'none';
        } else if (consent === 'refused') {
            const banner = document.getElementById('cookie-banner');
            if (banner) banner.style.display = 'none';
        }
    });
    </script>

    <!-- Style de la bannière RGPD -->
    <style>
    #cookie-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #1e40af;
        color: white;
        padding: 1rem;
        z-index: 9999;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        font-family: 'Inter', sans-serif;
    }
    #cookie-banner p {
        margin: 0;
        flex: 1;
        font-size: 0.95rem;
    }
    #cookie-banner button {
        margin-left: 0.5rem;
        padding: 0.5rem 1rem;
        border: none;
        font-weight: bold;
        cursor: pointer;
        border-radius: 4px;
    }
    #cookie-banner .accept-btn {
        background-color: #facc15;
        color: #1e1e1e;
    }
    #cookie-banner .refuse-btn {
        background-color: #374151;
        color: white;
    }
    </style>
</head>

<body>

<!-- Bannière RGPD -->
<div id="cookie-banner">
    <p>Nous utilisons des cookies pour améliorer votre expérience. <a href="/politique-cookies.php" style="text-decoration: underline; color: #facc15;">En savoir plus</a>.</p>
    <div>
        <button class="accept-btn" onclick="acceptCookies()">Accepter</button>
        <button class="refuse-btn" onclick="refuseCookies()">Refuser</button>
    </div>
</div>

<!-- Header principal -->
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

        <!-- Menu mobile -->
        <div class="flex items-center md:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <span class="block w-6 h-0.5 bg-white mb-1"></span>
                <span class="block w-6 h-0.5 bg-white mb-1"></span>
                <span class="block w-6 h-0.5 bg-white"></span>
            </button>
        </div>
    </div>
</header>

<!-- Compense le header fixe -->
<div style="height: 70px;"></div>
