<?php
include 'includes/header.php';
require_once 'includes/components.php';

$pageTitle = "Livraison et Déploiement - " . SITE_NAME;
?>

<main class="delivery-deployment page-content">
    <!-- Section Héro -->
    <section class="delivery-hero">
        <div class="container">
            <h1 class="hero-title">Livraison & Déploiement</h1>
            <p class="hero-subtitle">Service professionnel de livraison et d'installation de votre matériel informatique</p>
            <div class="hero-cta">
                <a href="/contact.php" class="cta-delivery">Planifier une Livraison</a>
                <a href="/telecharger-plaquette.php" class="cta-outline">Voir les Détails du Service</a>
            </div>
        </div>
    </section>

    <!-- Aperçu des Services -->
    <section class="delivery-services">
        <div class="container">
            <h2 class="section-title">Nos Services de Livraison & Déploiement</h2>
            <div class="service-grid">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Transport Sécurisé</h3>
                    <p>Livraison professionnelle avec suivi GPS et manutention spécialisée</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Suivi GPS en temps réel</li>
                        <li><i class="fas fa-check"></i> Transport assuré</li>
                        <li><i class="fas fa-check"></i> Manipulation soigneuse</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Installation Professionnelle</h3>
                    <p>Mise en service par des techniciens certifiés et expérimentés</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Installation matérielle</li>
                        <li><i class="fas fa-check"></i> Configuration logicielle</li>
                        <li><i class="fas fa-check"></i> Intégration réseau</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Intégration Réseau</h3>
                    <p>Connexion fluide avec votre infrastructure existante</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Configuration réseau</li>
                        <li><i class="fas fa-check"></i> Sécurisation des accès</li>
                        <li><i class="fas fa-check"></i> Tests de performance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Horizontale : Étapes de Commande -->
    <?php
    $steps = [
        ['title' => 'Panier', 'text' => 'Ajoutez vos produits au panier', 'icon' => 'fa-shopping-cart', 'status' => 'completed', 'color' => 'bg-blue-500'],
        ['title' => 'Identification', 'text' => 'Connectez-vous ou continuez en tant qu’invité', 'icon' => 'fa-user', 'status' => 'completed', 'color' => 'bg-purple-500'],
        ['title' => 'Livraison', 'text' => 'Choisissez votre mode de livraison', 'icon' => 'fa-truck', 'status' => 'active', 'color' => 'bg-pink-500'],
        ['title' => 'Paiement', 'text' => 'Saisissez vos informations de paiement', 'icon' => 'fa-credit-card', 'status' => '', 'color' => 'bg-gray-300'],
        ['title' => 'Confirmation', 'text' => 'Recevez la confirmation de votre commande', 'icon' => 'fa-check-circle', 'status' => '', 'color' => 'bg-gray-300'],
    ];

    renderHorizontalTimeline($steps);
    ?>

    <!-- Appel à l'action -->
    <section class="mid-page-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Besoin d’un Déploiement Informatique ?</h2>
                <p>Nos experts assurent l’installation complète de vos équipements</p>
                <a href="/contact.php" class="cta-delivery">Demander une Prestation</a>
            </div>
        </div>
    </section>

    <!-- Garantie Qualité -->
    <section class="quality-assurance">
        <div class="container">
            <h2 class="section-title">Notre Engagement Qualité</h2>
            <div class="quality-grid">
                <div class="quality-card">
                    <i class="fas fa-clipboard-check"></i>
                    <h3>Techniciens Certifiés</h3>
                    <p>Installation assurée par des professionnels qualifiés</p>
                </div>
                <div class="quality-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Normes de Sécurité</h3>
                    <p>Respect strict des protocoles de sécurité informatique</p>
                </div>
                <div class="quality-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Tests de Performance</h3>
                    <p>Contrôles rigoureux sur chaque système déployé</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Appel final -->
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
