<?php
/**
 * Configuration globale du site optimisée SEO
 */

// Déterminer le chemin de base
function getBasePath() {
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    $basePath = ($scriptDir === '/' || $scriptDir === '\\') ? '' : $scriptDir;
    return $basePath;
}

define('BASE_PATH', getBasePath());

// Informations du site

define('SITE_NAME', 'MISS & MISTER - PC Reconditionnés');
define('SITE_TAGLINE', 'PC Portables et Smartphones Reconditionnés à Prix Réduits');
define('SITE_DESCRIPTION', 'Découvrez nos PC portables reconditionnés, smartphones et composants informatiques de qualité à prix mini. Livraison rapide, garantie incluse.');
define('SITE_KEYWORDS', 'PC reconditionné, ordinateur portable, smartphone reconditionné, composants informatiques, MISS & MISTER, tech durable, informatique écologique');

// Coordonnées
define('CONTACT_EMAIL', 'contact@metm.fr');
define('CONTACT_PHONE', '01 23 45 67 89');
define('CONTACT_ADDRESS', '15 Rue de l\'Industrie, 93110 Rosny-sous-Bois');
define('CONTACT_HOURS', 'Lundi à Vendredi, 9h-18h');

// Réseaux sociaux
define('SOCIAL_FACEBOOK', '#');
define('SOCIAL_TWITTER', '#');
define('SOCIAL_LINKEDIN', '#');

// Informations légales
define('COMPANY_SIREN', '984 430 256');
define('COMPANY_RCS', 'Nanterre');
define('COPYRIGHT_YEAR', date('Y')); // Pour que ça s'actualise automatiquement

// Configuration reCAPTCHA
define('RECAPTCHA_SITE_KEY', '6LcMsyErAAAAAPSXvGSGdr0XDs5ourrDtWxZYQrx');
define('RECAPTCHA_SECRET', '6LcMsyErAAAAAADcPgJEsCKR_FFHK2xDkzouEqxZ');

// Configuration email (ATTENTION : ces données doivent être sécurisées, pas en public !)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'aithadji.lyes@gmail.com');
define('SMTP_PASSWORD', 'sals xlxm ewxt pkbl'); // A mettre dans une variable d'environnement en vrai
define('SMTP_PORT', 587);
