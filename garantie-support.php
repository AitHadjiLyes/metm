<?php
include 'includes/header.php';
require_once 'includes/components.php';

$pageTitle = "Garantie & Support - " . SITE_NAME;
?>

<main class="warranty-support page-content">
    <!-- Hero Section -->
  <section class="process-hero">
    <div class="container">
      <h1 class="hero-title">Garantie & Support</h1>
      <p class="hero-subtitle">Une assistance professionnelle et des garanties adaptées pour vos équipements informatiques</p>
      <div class="hero-cta">
        <a href="/contact.php" class="btn-accent">Demander un devis</a>
        <a href="/telecharger-plaquette.php" class="btn-secondary">Télécharger notre catalogue</a>
      </div>
    </div>
  </section>


    <!-- Services Overview -->
    <section class="warranty-services">
        <div class="container">
            <h2 class="section-title">Nos Services de Garantie & Support</h2>
            <div class="service-grid">
                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Garantie Matériel</h3>
                    <p>Protection complète de vos équipements avec garantie pièces et main d'œuvre</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Garantie 12 mois minimum</li>
                        <li><i class="fas fa-check"></i> Pièces d'origine</li>
                        <li><i class="fas fa-check"></i> Main d'œuvre incluse</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Support Technique</h3>
                    <p>Assistance technique experte pour tous vos besoins</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Support téléphonique</li>
                        <li><i class="fas fa-check"></i> Assistance à distance</li>
                        <li><i class="fas fa-check"></i> Intervention sur site</li>
                    </ul>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Maintenance Préventive</h3>
                    <p>Services de maintenance pour optimiser la durée de vie de vos équipements</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Contrôles réguliers</li>
                        <li><i class="fas fa-check"></i> Mises à jour système</li>
                        <li><i class="fas fa-check"></i> Optimisation performances</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php
    $steps = [
        ['title' => 'Demande', 'text' => 'Contactez notre support', 'icon' => 'fa-message', 'status' => 'completed', 'color' => 'bg-blue-500'],
        ['title' => 'Diagnostic', 'text' => 'Analyse du problème', 'icon' => 'fa-search', 'status' => 'completed', 'color' => 'bg-blue-500'],
        ['title' => 'Solution', 'text' => 'Proposition de solution', 'icon' => 'fa-wrench', 'status' => 'active', 'color' => 'bg-blue-500'],
        ['title' => 'Intervention', 'text' => 'Résolution du problème', 'icon' => 'fa-check-circle', 'status' => '', 'color' => 'bg-blue-500'],
        ['title' => 'Suivi', 'text' => 'Vérification satisfaction', 'icon' => 'fa-star', 'status' => '', 'color' => 'bg-blue-500'],
    ];

    renderHorizontalTimeline($steps);
    ?>

   

    <!-- Quality Assurance -->
    <section class="quality-assurance">
        <div class="container">
            <h2 class="section-title">Notre Engagement Qualité</h2>
            <div class="quality-grid">
                <div class="quality-card">
                    <i class="fas fa-clock"></i>
                    <h3>Réactivité</h3>
                    <p>Prise en charge rapide de vos demandes</p>
                </div>
                <div class="quality-card">
                    <i class="fas fa-certificate"></i>
                    <h3>Expertise</h3>
                    <p>Techniciens certifiés et expérimentés</p>
                </div>
                <div class="quality-card">
                    <i class="fas fa-heart"></i>
                    <h3>Satisfaction</h3>
                    <p>Suivi personnalisé de chaque intervention</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
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

<style>
    .warranty-support {
        padding-top: 60px;
    }
    .btn-secondary {
  border: 2px solid white;
  color: white;
  background: transparent;
}

    
.btn-secondary:hover {
  background-color: white;
  color: var(--color-primary);
  transform: translateY(-2px);
}
    .warranty-hero {
        background-color: var(--color-bg-dark);
        color: var(--color-text-light);
        padding: 80px 0;
        text-align: center;
        position: relative;
    }
    
    .hero-title {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 20px;
        color: var(--color-text-light);
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 30px;
        opacity: 0.9;
        color: var(--color-text-light);
    }
    
    .hero-cta {
        display: flex;
        gap: 20px;
        justify-content: center;
    }
    
    .cta-warranty {
        background-color: var(--color-accent);
        color: var(--color-text-light);
        padding: 15px 30px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    
    .cta-warranty:hover {
        background-color: var(--color-accent-dark);
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }
    
    .cta-outline {
        border: 2px solid var(--color-text-light);
        color: var(--color-text-muted-light);
        padding: 15px 30px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    
    .cta-outline:hover {
        background-color: rgba(255,255,255,0.1);
        transform: translateY(-3px);
        color: var(--color-text-light);
    }
    
    .warranty-services {
        padding: 80px 0;
        background-color: var(--color-bg-light);
    }
    
    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .service-box {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .service-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .service-icon {
        width: 60px;
        height: 60px;
        background: var(--color-accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .service-icon i {
        font-size: 24px;
        color: white;
    }
    
    .service-features {
        margin-top: 20px;
        list-style: none;
        padding: 0;
    }
    
    .service-features li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .service-features i {
        color: var(--color-accent);
    }
    
    .quality-assurance {
        padding: 80px 0;
        background-color: white;
    }
    
    .quality-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .quality-card {
        text-align: center;
        padding: 30px;
    }
    
    .quality-card i {
        font-size: 40px;
        color: var(--color-accent);
        margin-bottom: 20px;
    }
    
    .mid-page-cta, .final-cta {
        background-color: var(--color-bg-dark);
        color: var(--color-text-light);
        padding: 60px 0;
        text-align: center;
    }
    
    .cta-content h2 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--color-text-light);
    }
    
    .cta-content p {
        font-size: 1.1rem;
        margin-bottom: 30px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        color: var(--color-text-muted-light);
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        margin-top: 30px;
    }
    
    .section-title {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-align: center;
        color: var(--color-text-dark);
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .service-grid {
            grid-template-columns: 1fr;
        }
        
        .hero-cta, .cta-buttons {
            flex-direction: column;
            gap: 15px;
        }
        
        .cta-warranty, .cta-outline {
            width: 100%;
            text-align: center;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>
