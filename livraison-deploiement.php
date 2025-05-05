<?php
include 'includes/header.php';
require_once 'includes/components.php';

$pageTitle = "Delivery & Deployment - " . SITE_NAME;
?>

<main class="delivery-deployment page-content">
    <!-- Hero Section -->
    <section class="delivery-hero">
        <div class="container">
            <h1 class="hero-title">Delivery & Deployment</h1>
            <p class="hero-subtitle">Professional delivery and installation services for your IT equipment</p>
            <div class="hero-cta">
                <a href="/contact.php" class="cta-delivery">Schedule Delivery</a>
                <a href="/telecharger-plaquette.php" class="cta-outline">View Service Details</a>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="delivery-services">
        <div class="container">
            <h2 class="section-title">Our Delivery & Deployment Services</h2>
            <div class="service-grid">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Secure Transport</h3>
                    <p>Professional delivery with specialized equipment handling and tracking</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> GPS tracking</li>
                        <li><i class="fas fa-check"></i> Insured transport</li>
                        <li><i class="fas fa-check"></i> Careful handling</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Professional Installation</h3>
                    <p>Expert setup and configuration by certified technicians</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Hardware setup</li>
                        <li><i class="fas fa-check"></i> Software configuration</li>
                        <li><i class="fas fa-check"></i> Network integration</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Network Integration</h3>
                    <p>Seamless integration with your existing infrastructure</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Network setup</li>
                        <li><i class="fas fa-check"></i> Security configuration</li>
                        <li><i class="fas fa-check"></i> Performance testing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
    $steps = [
    ['title' => 'Panier', 'text' => 'Ajoutez vos produits au panier', 'icon' => 'fa-shopping-cart', 'status' => 'completed', 'color' => 'bg-blue-500'],
    ['title' => 'Identification', 'text' => 'Connectez-vous ou continuez en invité', 'icon' => 'fa-user', 'status' => 'completed', 'color' => 'bg-purple-500'],
    ['title' => 'Livraison', 'text' => 'Choisissez votre méthode de livraison', 'icon' => 'fa-truck', 'status' => 'active', 'color' => 'bg-pink-500'],
    ['title' => 'Paiement', 'text' => 'Entrez vos informations de paiement', 'icon' => 'fa-credit-card', 'status' => '', 'color' => 'bg-gray-300'],
    ['title' => 'Confirmation', 'text' => 'Recevez votre confirmation de commande', 'icon' => 'fa-check-circle', 'status' => '', 'color' => 'bg-gray-300'],
];

renderHorizontalTimeline($steps);
    ?>

    <!-- Mid-page CTA -->
    <section class="mid-page-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Need Professional Deployment?</h2>
                <p>Let our experts handle your equipment setup and configuration</p>
                <a href="/contact.php" class="cta-delivery">Request Deployment Services</a>
            </div>
        </div>
    </section>

    <!-- Quality Assurance -->
    <section class="quality-assurance">
        <div class="container">
            <h2 class="section-title">Our Quality Commitment</h2>
            <div class="quality-grid">
                <div class="quality-card">
                    <i class="fas fa-clipboard-check"></i>
                    <h3>Certified Technicians</h3>
                    <p>Expert installation by qualified professionals</p>
                </div>
                <div class="quality-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Security Standards</h3>
                    <p>Adherence to strict security protocols</p>
                </div>
                <div class="quality-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Performance Testing</h3>
                    <p>Thorough testing of all deployed systems</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready for Professional Deployment?</h2>
                <p>Contact us to schedule your delivery and installation</p>
                <div class="cta-buttons">
                    <a href="/contact.php" class="cta-delivery">Schedule Now</a>
                    <a href="/telecharger-plaquette.php" class="cta-outline">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
