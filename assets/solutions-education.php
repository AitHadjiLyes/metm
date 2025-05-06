<?php
include 'includes/header.php';
$pageTitle = "Solutions Éducation - " . SITE_NAME;
?>

<main class="solutions-page education-solutions">
    <style>
        .education-solutions .solutions-hero {
            background: linear-gradient(160deg, #004080, #007BFF);
            clip-path: polygon(0 0, 100% 0, 100% 88%, 0 100%);
        }
        .education-solutions .solutions-intro {
            background: linear-gradient(120deg, #f0f8ff, #ffffff);
        }
        .education-solutions .benefit-icon {
            border-radius: 50%;
            padding: 16px;
        }
        .education-solutions .feature-card {
            background: #f9fbff;
            border-left: 4px solid #007BFF;
        }
        .education-solutions .cta-buttons .btn-primary {
            background-color: #007BFF;
            color: white;
        }
        .education-solutions .cta-buttons .btn-secondary {
            border: 1px solid #007BFF;
            color: #007BFF;
            background: transparent;
        }
        .education-solutions .cta-buttons .btn-secondary:hover {
            background: #007BFF;
            color: white;
        }
    </style>

    <section class="solutions-hero">
        <div class="container">
            <h1 class="solutions-title">Solutions pour l'Éducation</h1>
            <p class="solutions-subtitle">
                Équipez vos établissements avec du matériel informatique reconditionné de qualité professionnelle
            </p>
        </div>
    </section>

    <section class="solutions-intro">
        <div class="container">
            <div class="intro-card">
                <div class="intro-content">
                    <h2>Transformez votre environnement éducatif</h2>
                    <p>
                        Nous proposons des solutions complètes et sur mesure pour répondre aux besoins spécifiques des établissements d'enseignement,
                        tout en respectant vos contraintes budgétaires et environnementales.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="solutions-benefits">
        <div class="container">
            <h2 class="section-title">Nos Avantages</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Solutions pédagogiques</h3>
                    <p>Équipements adaptés aux besoins spécifiques de l'enseignement et de l'apprentissage moderne</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <h3>Budget optimisé</h3>
                    <p>Réduction significative des coûts tout en maintenant une qualité professionnelle</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Démarche éco-responsable</h3>
                    <p>Contribution active à la réduction de l'empreinte environnementale de votre établissement</p>
                </div>
            </div>
        </div>
    </section>

    <section class="solutions-features">
        <div class="container">
            <h2 class="section-title">Nos Solutions Éducatives</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3>Salles Informatiques</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Postes fixes reconditionnés de qualité professionnelle</li>
                        <li><i class="fas fa-check"></i> Configuration réseau complète et sécurisée</li>
                        <li><i class="fas fa-check"></i> Installation de logiciels éducatifs</li>
                        <li><i class="fas fa-check"></i> Support technique dédié</li>
                    </ul>
                </div>
                <div class="feature-card">
                    <h3>Classes Mobiles</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Ordinateurs portables performants</li>
                        <li><i class="fas fa-check"></i> Systèmes de rangement sécurisés</li>
                        <li><i class="fas fa-check"></i> Solutions de recharge intégrées</li>
                        <li><i class="fas fa-check"></i> Gestion de flotte simplifiée</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="solutions-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Équipez votre établissement</h2>
                <p>Découvrez nos solutions sur mesure pour l'éducation</p>
                <div class="cta-buttons">
                    <a href="/contact.php" class="btn btn-primary">Demander un devis</a>
                    <a href="/telecharger-plaquette.php" class="btn btn-secondary">Documentation détaillée</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
