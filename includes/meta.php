<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
<meta name="keywords" content="<?php echo SITE_KEYWORDS; ?>">
<meta name="robots" content="index, follow">

<!-- SEO / Open Graph -->
<meta property="og:title" content="<?php echo SITE_NAME . ' - ' . SITE_TAGLINE; ?>">
<meta property="og:description" content="<?php echo SITE_DESCRIPTION; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo BASE_PATH; ?>assets/images/og-image.jpg">
<meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

<!-- Mobile optimization -->
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="theme-color" content="#3A8DFF">

<!-- Préchargement des ressources critiques -->
<link rel="preload" href="<?php echo BASE_PATH; ?>css/main.css" as="style">
<link rel="preload" href="<?php echo BASE_PATH; ?>js/main.js" as="script">
<link rel="preload" href="<?php echo BASE_PATH; ?>js/main-simple.js" as="script">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" as="style">

<!-- Feuilles de style -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="<?php echo BASE_PATH; ?>css/main.css">

<!-- Favicon -->
<link rel="icon" href="<?php echo BASE_PATH; ?>assets/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo BASE_PATH; ?>assets/images/favicon.png">
<link rel="manifest" href="<?php echo BASE_PATH; ?>manifest.json">

<!-- Tailwind CSS pour les classes utilitaires -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: '#3A8DFF',
          'primary-dark': '#2970CC',
          accent: '#FFB74D',
          secondary: '#F5FAFF'
        }
      }
    }
  }
</script>
