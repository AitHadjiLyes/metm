<?php
$pageTitle = "À propos de nous";
include 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero-image about-hero">
        <div class="hero-pattern"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="fade-in">Notre Histoire, Notre Engagement</h1>
                <p class="fade-in-delay">Pionniers du reconditionnement informatique professionnel en France</p>
                <a href="#mission" class="hero-btn fade-in-delay-2">
                    Découvrir notre mission
                    <i class="fas fa-arrow-down ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section id="mission" class="section bg-white">
        <div class="container">
            <div class="mission-grid">
                <div class="mission-content">
                    <div class="section-label center">
                        <span>NOTRE MISSION</span>
                    </div>
                    <h2 class="section-title">Révolutionner l'informatique professionnelle <span class="text-primary">durablement</span></h2>
                    <p class="section-text">Nous combinons performance technique, économie responsable et engagement écologique pour offrir 
                        des solutions IT qui allient productivité et durabilité. Notre expertise permet aux entreprises 
                        de s'équiper intelligemment tout en réduisant leur impact environnemental.</p>
                    <div class="stats-grid">
                        <div class="stat-card" data-count="15000">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Équipements reconditionnés</span>
                        </div>
                        <div class="stat-card" data-count="98">
                            <span class="stat-number">0</span>
                            <span class="stat-label">% de clients satisfaits</span>
                        </div>
                        <div class="stat-card" data-count="2500">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Tonnes de CO2 économisées</span>
                        </div>
                    </div>
                </div>
                <div class="mission-image">
                    <img src="/assets/images/atelier.jpg" alt="Notre atelier de reconditionnement" class="parallax-image">
                    <div class="image-badge">
                        <div class="badge-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <div class="badge-text">
                            <div class="badge-title">10 ans</div>
                            <div class="badge-subtitle">d'expertise</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header valeurs-centered">
                <div class="section-label">
 
                    <span>NOS VALEURS</span>
                </div>
                <h2 class="section-title">Nos Valeurs Fondamentales</h2>
                <p class="section-subtitle">Les principes qui guident chacune de nos actions et décisions</p>
            </div>

            <div class="values-grid">
                <!-- Value 1 -->
                <div class="service-card">
                    <div class="icon-circle eco">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Éco-responsabilité</h3>
                    <p>Chaque appareil reconditionné contribue à réduire notre empreinte environnementale collective.</p>
                </div>

                <!-- Value 2 -->
                <div class="service-card">
                    <div class="icon-circle excellence">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>Des processus rigoureux et des tests approfondis pour garantir une qualité professionnelle.</p>
                </div>

                <!-- Value 3 -->
                <div class="service-card">
                    <div class="icon-circle engagement">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Engagement</h3>
                    <p>Un accompagnement personnalisé et un support réactif pour votre satisfaction.</p>
                </div>

                <!-- Value 4 -->
                <div class="service-card">
                    <div class="icon-circle innovation">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Toujours à la recherche de nouvelles solutions pour améliorer nos services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-label center">
 
                    <span>NOTRE PROCESSUS</span>
                </div>
                <h2 class="section-title">Notre Processus de Reconditionnement</h2>
                <p class="section-subtitle">Une méthodologie rigoureuse pour garantir des équipements comme neufs</p>
            </div>

            <div class="timeline-container">
                <!-- Step 1 -->
                <div class="timeline-step left">
                    <div class="card">
                        <div class="timeline-label">ÉTAPE 1</div>
                        <h3>Sélection Rigoureuse</h3>
                        <p>Choix des équipements selon des critères stricts de qualité et de performance.</p>
                        <ul class="step-list">
                            <li><i class="fas fa-check-circle"></i> Vérification de l'origine</li>
                            <li><i class="fas fa-check-circle"></i> Test des composants principaux</li>
                            <li><i class="fas fa-check-circle"></i> Évaluation du potentiel de reconditionnement</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="timeline-step right">
                    <div class="card">
                        <div class="timeline-label">ÉTAPE 2</div>
                        <h3>Reconditionnement Expert</h3>
                        <p>Processus complet de remise à neuf dans nos ateliers spécialisés.</p>
                        <ul class="step-list">
                            <li><i class="fas fa-check-circle"></i> Nettoyage approfondi</li>
                            <li><i class="fas fa-check-circle"></i> Remplacement des pièces usagées</li>
                            <li><i class="fas fa-check-circle"></i> Mises à jour matérielles et logicielles</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="timeline-step left">
                    <div class="card">
                        <div class="timeline-label">ÉTAPE 3</div>
                        <h3>Contrôle Qualité</h3>
                        <p>Vérifications approfondies pour garantir fiabilité et performance.</p>
                        <ul class="step-list">
                            <li><i class="fas fa-check-circle"></i> Tests de stress des composants</li>
                            <li><i class="fas fa-check-circle"></i> Vérification des performances</li>
                            <li><i class="fas fa-check-circle"></i> Contrôle final par un expert</li>
                        </ul>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="timeline-step right">
                    <div class="card">
                        <div class="timeline-label">ÉTAPE 4</div>
                        <h3>Livraison & Installation</h3>
                        <p>Expédition sécurisée et installation sur site par nos experts.</p>
                        <ul class="step-list">
                            <li><i class="fas fa-check-circle"></i> Emballage protecteur</li>
                            <li><i class="fas fa-check-circle"></i> Livraison rapide</li>
                            <li><i class="fas fa-check-circle"></i> Installation et configuration sur site</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-label center">
 
                    <span>NOTRE ÉQUIPE</span>
                </div>
                <h2 class="section-title">Notre Équipe d'Experts</h2>
                <p class="section-subtitle">Des professionnels passionnés qui œuvrent chaque jour pour votre satisfaction</p>
            </div>

            <div class="team-stats">
                <div class="service-card">
                    <div class="icon-circle excellence">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Experts Techniques</h3>
                    <div class="team-number">25+</div>
                    <p>Des ingénieurs et techniciens spécialisés dans le reconditionnement professionnel</p>
                </div>

                <div class="service-card">
                    <div class="icon-circle innovation">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3>Années d'Expérience</h3>
                    <div class="team-number">10+</div>
                    <p>Une décennie d'expertise accumulée dans le domaine du matériel reconditionné</p>
                </div>

                <div class="service-card">
                    <div class="icon-circle engagement">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Support Client</h3>
                    <div class="team-number">24/7</div>
                    <p>Une équipe dédiée disponible en permanence pour répondre à vos besoins</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-label center">
 
                    <span>NOS CERTIFICATIONS</span>
                </div>
                <h2 class="section-title">Nos Certifications</h2>
                <p class="section-subtitle">Des garanties de qualité, de sécurité et de respect de l'environnement</p>
            </div>

            <div class="certifications-grid">
                <div class="certification-card">
                    <div class="icon-circle excellence">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>ISO 9001</h3>
                    <p>Management de la qualité pour des processus optimisés</p>
                    <div class="certification-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/ISO_9001.svg/1200px-ISO_9001.svg.png" 
                             alt="ISO 9001">
                    </div>
                </div>

                <div class="certification-card">
                    <div class="icon-circle eco">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>ISO 14001</h3>
                    <p>Management environnemental pour une approche durable</p>
                    <div class="certification-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/ISO_14001.svg/1200px-ISO_14001.svg.png" 
                             alt="ISO 14001">
                    </div>
                </div>

                <div class="certification-card">
                    <div class="icon-circle engagement">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3>ISO 27001</h3>
                    <p>Sécurité de l'information pour la protection de vos données</p>
                    <div class="certification-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/ISO_27001.svg/1200px-ISO_27001.svg.png" 
                             alt="ISO 27001">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-label center">
 
                    <span>TÉMOIGNAGES</span>
                </div>
                <h2 class="section-title">Ils Nous Font Confiance</h2>
                <p class="section-subtitle">Ce que nos clients disent de notre expertise et de nos services</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Leur approche professionnelle et leur rigueur dans le reconditionnement nous ont convaincus. 
                        Des équipements parfaitement fonctionnels à un prix très compétitif."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Client">
                        <div class="author-info">
                            <h4>Sophie Martin</h4>
                            <p>Directrice IT, Entreprise A</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Nous avons équipé tout notre parc informatique avec leurs solutions reconditionnées. 
                        Aucune différence avec du neuf, et un impact environnemental réduit de 75%."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client">
                        <div class="author-info">
                            <h4>Pierre Lambert</h4>
                            <p>Responsable SI, Entreprise B</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Leur accompagnement personnalisé et leur réactivité ont fait toute la différence. 
                        Nous renouvellerons certainement notre confiance pour nos futurs besoins IT."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Client">
                        <div class="author-info">
                            <h4>Émilie Dubois</h4>
                            <p>Directrice Générale, Entreprise C</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="solutions-cta">
        <div class="container">
            <h2>Prêt à nous rejoindre dans l'aventure du reconditionnement responsable ?</h2>
            <p>Découvrez comment nous pouvons transformer votre infrastructure IT tout en réduisant vos coûts et votre impact environnemental.</p>
            <div class="cta-buttons">
                <a href="/contact.php" class="btn">
                    <i class="fas fa-envelope mr-2"></i> Contactez-nous
                </a>
                <a href="/formulaire-pro.php" class="btn-secondary">
                    <i class="fas fa-file-alt mr-2"></i> Demander un devis
                </a>
            </div>
        </div>
    </section>
</main>

<style>
/* Styles spécifiques à la page À propos */
@import url('/css/variables.css');

/* Hero Section */
.about-hero {
    background: linear-gradient(135deg, var(--color-primary-dark), var(--color-primary));
    min-height: 80vh;
    display: flex;
    align-items: center;
    padding: 120px 0;
    position: relative;
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 25px 25px, rgba(255,255,255,0.15) 2%, transparent 0%),
        linear-gradient(to bottom right, transparent 60%, rgba(0,0,0,0.1));
    background-size: 50px 50px;
    z-index: 0;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    padding: 0 20px;
}

.hero-content h1 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.2;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.hero-content p {
    font-size: 1.5rem;
    margin-bottom: 2.5rem;
    opacity: 0.9;
}

.hero-btn {
    display: inline-flex;
    align-items: center;
    background-color: white;
    color: var(--color-primary);
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px var(--color-shadow);
}

.hero-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px var(--color-shadow-strong);
}

/* Animations */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 0.8s ease forwards;
}

.fade-in-delay {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 0.8s ease forwards 0.3s;
}

.fade-in-delay-2 {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 0.8s ease forwards 0.6s;
}

@keyframes fadeIn {
    to { opacity: 1; transform: translateY(0); }
}

/* Sections */
.section {
    padding: 100px 0;
    position: relative;
}

.bg-white { background-color: white; }
.bg-light { background-color: var(--color-bg-light); }

/* Section Header */
.section-header {
    margin-bottom: 60px;
}

.text-center {
    text-align: center;
}

.section-label {
    display: inline-flex;
    align-items: center;
    color: var(--color-primary);
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 0.875rem;
    margin-bottom: 16px;
}

.section-label.center {
    justify-content: center;
}

.label-line {
    width: 32px;
    height: 3px;
    background-color: var(--color-primary);
    margin-right: 12px;
    border-radius: 3px;
}

.section-subtitle {
    font-size: 1.125rem;
    color: var(--color-text-muted);
    max-width: 700px;
    margin: 0 auto;
}

.section-text {
    font-size: 1.125rem;
    color: var(--color-text-muted);
    margin-bottom: 40px;
    line-height: 1.7;
}

.text-primary { color: var(--color-primary); }

/* Mission Section */
.mission-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
}

.stat-card {
    padding: 24px;
    border-radius: var(--border-radius-md);
    text-align: center;
    box-shadow: 0 4px 15px var(--color-shadow);
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card:nth-child(1) {
    background-color: rgba(var(--color-primary-rgb), 0.05);
    border: 1px solid rgba(var(--color-primary-rgb), 0.1);
}

.stat-card:nth-child(2) {
    background-color: rgba(var(--color-success-rgb), 0.05);
    border: 1px solid rgba(var(--color-success-rgb), 0.1);
}

.stat-card:nth-child(3) {
    background-color: rgba(var(--color-accent-rgb), 0.05);
    border: 1px solid rgba(var(--color-accent-rgb), 0.1);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--color-primary);
    display: block;
    margin-bottom: 8px;
}

.stat-label {
    font-size: 0.9rem;
    color: var(--color-text-muted);
    font-weight: 500;
}

.mission-image {
    position: relative;
    border-radius: var(--border-radius-lg);
    overflow: hidden;
}

.parallax-image {
    border-radius: var(--border-radius-lg);
    box-shadow: 0 20px 40px var(--color-shadow);
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}

.image-badge {
    position: absolute;
    bottom: -24px;
    right: -24px;
    background: white;
    padding: 16px;
    border-radius: var(--border-radius-md);
    box-shadow: 0 10px 25px var(--color-shadow);
    display: flex;
    align-items: center;
    z-index: 2;
    transition: all 0.3s ease;
}

.image-badge:hover {
    transform: scale(1.05);
}

.badge-icon {
    width: 48px;
    height: 48px;
    background-color: rgba(var(--color-primary-rgb), 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--color-primary);
    font-size: 1.25rem;
    margin-right: 12px;
}

.badge-title {
    font-weight: 700;
    color: var(--color-text);
}

.badge-subtitle {
    font-size: 0.875rem;
    color: var(--color-text-muted);
}

/* Values Section */
.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.service-card {
    background: white;
    padding: 40px 30px;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px var(--color-shadow);
    border: 1px solid rgba(0,0,0,0.03);
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px var(--color-shadow);
}

.icon-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    font-size: 2rem;
}

.icon-circle.eco {
    background-color: rgba(var(--color-success-rgb), 0.1);
    color: var(--color-success);
}

.icon-circle.excellence {
    background-color: rgba(var(--color-primary-rgb), 0.1);
    color: var(--color-primary);
}

.icon-circle.engagement {
    background-color: rgba(var(--color-accent-rgb), 0.1);
    color: var(--color-accent);
}

.icon-circle.innovation {
    background-color: rgba(var(--color-warning-rgb), 0.1);
    color: var(--color-warning);
}

.service-card h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: var(--color-text);
}

.service-card p {
    color: var(--color-text-muted);
    font-size: 1rem;
}

/* Timeline Section */
.timeline-container {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 0;
}

.timeline-container::after {
    content: "";
    position: absolute;
    width: 6px;
    background: linear-gradient(to bottom, var(--color-primary), var(--color-accent));
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
    border-radius: 10px;
}

.timeline-step {
    padding: 10px 40px;
    position: relative;
    width: 50%;
    box-sizing: border-box;
    margin-bottom: 40px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s ease;
}

.timeline-step.animated {
    opacity: 1;
    transform: translateY(0);
}

.timeline-step::after {
    content: "";
    position: absolute;
    width: 24px;
    height: 24px;
    background-color: white;
    border: 4px solid var(--color-primary);
    top: 20px;
    border-radius: 50%;
    z-index: 1;
    box-shadow: 0 0 0 6px rgba(var(--color-primary-rgb), 0.2);
}

.timeline-step.left {
    left: 0;
    text-align: left;
}

.timeline-step.right {
    left: 50%;
    text-align: left;
}

.timeline-step.left::after {
    right: -12px;
}

.timeline-step.right::after {
    left: -12px;
}

.card {
    background: white;
    padding: 30px;
    border-radius: var(--border-radius-lg);
    box-shadow: 0 5px 20px var(--color-shadow);
    border: 1px solid rgba(0,0,0,0.03);
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px var(--color-shadow);
}

.timeline-label {
    color: var(--color-primary);
    font-weight: 600;
    margin-bottom: 12px;
    font-size: 0.875rem;
    letter-spacing: 1px;
}

.timeline-step h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: var(--color-text);
}

.timeline-step p {
    color: var(--color-text-muted);
    margin-bottom: 15px;
}

.step-list {
    list-style: none;
    padding: 0;
}

.step-list li {
    margin-bottom: 8px;
    color: var(--color-text-muted);
    display: flex;
    align-items: flex-start;
}

.step-list i {
    color: var(--color-primary);
    margin-right: 10px;
    font-size: 0.9rem;
    margin-top: 3px;
}

/* Team Section */
.team-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.team-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--color-primary);
    margin: 15px 0;
}

/* Certifications */
.certifications-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.certification-card {
    background: white;
    padding: 40px 30px;
    border-radius: var(--border-radius-lg);
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px var(--color-shadow);
    border: 1px solid rgba(0,0,0,0.03);
}

.certification-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px var(--color-shadow);
}

.certification-logo {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    height: 60px;
}

.certification-logo img {
    height: 100%;
    width: auto;
    object-fit: contain;
    filter: grayscale(100%);
    opacity: 0.7;
    transition: all 0.3s ease;
}

.certification-card:hover .certification-logo img {
    filter: grayscale(0%);
    opacity: 1;
}

/* Testimonials */
.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.testimonial-card {
    background: white;
    padding: 30px;
    border-radius: var(--border-radius-lg);
    box-shadow: 0 5px 20px var(--color-shadow);
    border: 1px solid rgba(0,0,0,0.03);
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px var(--color-shadow);
}

.testimonial-content {
    font-style: italic;
    color: var(--color-text-muted);
    margin-bottom: 25px;
    position: relative;
}

.testimonial-content::before {
    content: """;
    position: absolute;
    top: -15px;
    left: -10px;
    font-size: 4rem;
    color: rgba(var(--color-primary-rgb), 0.1);
    font-family: Georgia, serif;
    line-height: 1;
    z-index: 0;
}

.testimonial-author {
    display: flex;
    align-items: center;
}

.testimonial-author img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 15px;
    border: 3px solid rgba(var(--color-primary-rgb), 0.1);
}

.author-info h4 {
    font-weight: 700;
    margin-bottom: 5px;
    color: var(--color-text);
}

.author-info p {
    font-size: 0.875rem;
    color: var(--color-text-muted);
}

/* CTA Section */
.solutions-cta {
    background: linear-gradient(135deg, var(--color-primary-dark), var(--color-primary));
    color: white;
    padding: 80px 0;
    text-align: center;
}

.solutions-cta h2 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.solutions-cta p {
    font-size: 1.25rem;
    max-width: 700px;
    margin: 0 auto 40px;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.btn {
    display: inline-flex;
    align-items: center;
    background-color: white;
    color: var(--color-primary);
    padding: 15px 30px;
    border-radius: var(--border-radius-full);
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px var(--color-shadow);
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px var(--color-shadow-strong);
}

.btn-secondary {
    display: inline-flex;
    align-items: center;
    background-color: transparent;
    color: white;
    padding: 15px 30px;
    border-radius: var(--border-radius-full);
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid rgba(255,255,255,0.3);
}

.btn-secondary:hover {
    background-color: rgba(255,255,255,0.1);
    transform: translateY(-3px);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .mission-grid,
    .team-stats,
    .certifications-grid,
    .testimonials-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .image-badge {
        display: none;
    }
    
    .hero-content h1 {
        font-size: 2.8rem;
    }
}

@media (max-width: 768px) {
    .section {
        padding: 70px 0;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .hero-content h1 {
        font-size: 2.2rem;
    }
    
    .hero-content p {
        font-size: 1.2rem;
    }
    
    .mission-grid,
    .stats-grid,
    .team-stats,
    .certifications-grid,
    .testimonials-grid {
        grid-template-columns: 1fr;
    }
    
    .timeline-container::after {
        left: 24px;
    }
    
    .timeline-step {
        width: 100%;
        padding-left: 70px;
        padding-right: 20px;
    }
    
    .timeline-step::after {
        left: 18px;
    }
    
    .timeline-step.left,
    .timeline-step.right {
        left: 0;
        text-align: left;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn, .btn-secondary {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .hero-content h1 {
        font-size: 1.8rem;
    }
    
    .hero-content p {
        font-size: 1rem;
    }
    
    .section-title {
        font-size: 1.7rem;
    }
}

.valeurs-centered {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.valeurs-centered .section-label,
.valeurs-centered .section-title,
.valeurs-centered .section-subtitle {
  display: block;
  width: 100%;
  max-width: 700px;
  margin: 0 auto;
}

.valeurs-centered .section-title::after {
  content: "";
  display: block;
  width: 60px;
  height: 3px;
  background-color: var(--color-primary);
  margin: 8px auto 0;
  border-radius: 2px;
}
.valeurs-centered .section-title::after {
  display: none;
}
</style>

<script>
// Animation des compteurs
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Animation au scroll
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            if (entry.target.classList.contains('stat-card')) {
                const countTarget = entry.target.getAttribute('data-count');
                const countElement = entry.target.querySelector('.stat-number');
                animateValue(countElement, 0, parseInt(countTarget), 2000);
            }
            if (entry.target.classList.contains('timeline-step')) {
                entry.target.classList.add('animated');
            }
            entry.target.classList.add('animated');
        }
    });
}, {
    threshold: 0.1
});

document.addEventListener('DOMContentLoaded', () => {
    // Observer pour les animations
    document.querySelectorAll('.stat-card, .service-card, .timeline-step, .certification-card, .testimonial-card').forEach(item => {
        observer.observe(item);
    });

    // Effet parallaxe sur l'image
    document.addEventListener('mousemove', (e) => {
        const parallaxImage = document.querySelector('.parallax-image');
        if (parallaxImage) {
            const x = (e.clientX / window.innerWidth) * 20 - 10;
            const y = (e.clientY / window.innerHeight) * 20 - 10;
            parallaxImage.style.transform = `translate(${x}px, ${y}px)`;
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>
