<?php
include 'includes/header.php';
$pageTitle = "Solutions pour Collectivités - " . SITE_NAME;
?>

<main class="solutions-page">
    <!-- HERO SECTION -->
    <section class="solutions-hero">
        <div class="container">
            <h1 class="solutions-title">Solutions pour Collectivités</h1>
            <p class="solutions-subtitle">
                Équipements informatiques reconditionnés adaptés aux besoins des collectivités locales
            </p>
        </div>
    </section>

    <!-- INTRO SECTION -->
    <section class="solutions-intro">
        <div class="container">
            <div class="intro-card">
                <h2>Optimisez vos ressources publiques</h2>
                <p>
                    Nous accompagnons les collectivités dans l’équipement informatique durable avec des solutions fiables,
                    conformes aux normes, et économiquement responsables.
                </p>
            </div>
        </div>
    </section>

    <!-- BENEFITS SECTION -->
    <section class="solutions-benefits">
        <div class="container">
            <h2 class="section-title">Avantages pour les Collectivités</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <h3>Économies Budgétaires</h3>
                    <p>Réduisez vos coûts d'équipement tout en maintenant une qualité professionnelle</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Engagement Écologique</h3>
                    <p>Contribuez à l'économie circulaire et réduisez votre impact environnemental</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Conformité Garantie</h3>
                    <p>Matériel conforme aux normes et réglementations des marchés publics</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="solutions-features">
        <div class="container">
            <h2 class="section-title">Nos Services Dédiés</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Équipement des Services</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Postes de travail reconditionnés</li>
                        <li><i class="fas fa-check"></i> Ordinateurs portables professionnels</li>
                        <li><i class="fas fa-check"></i> Équipements réseau et périphériques</li>
                    </ul>
                </div>
                <div class="feature-card">
                    <h3>Support et Maintenance</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Installation et configuration</li>
                        <li><i class="fas fa-check"></i> Maintenance préventive</li>
                        <li><i class="fas fa-check"></i> Support technique dédié</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="solutions-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Prêt à équiper votre collectivité ?</h2>
                <p>Contactez-nous pour une étude personnalisée de vos besoins</p>
                <div class="cta-buttons">
                    <a href="/contact.php" class="btn btn-accent">Nous contacter</a>
                    <a href="/telecharger-plaquette.php" class="btn btn-secondary">Documentation</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>