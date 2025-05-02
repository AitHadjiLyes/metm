<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Page d'accueil
 */
require_once 'config.php';
require_once 'includes/components.php';

$pageTitle = 'METM | Matériel informatique reconditionné pour professionnels - Solutions durables et économiques';
include 'includes/header.php';

// Définir les chemins d'images pour la bannière hero
$heroBgDesktop = '/assets/images/banner4.png';
$heroBgTablet = '/assets/images/banner4-tablet.png';
$heroBgMobile = '/assets/images/banner4-mobile.png';

// Générer le CSS pour l'image d'arrière-plan responsive
renderResponsiveBackgroundImage('.hero-image', $heroBgDesktop, $heroBgMobile, $heroBgTablet);
?>

<!-- Update the hero section in index.php to ensure it takes full screen on mobile -->
<!-- Section Hero Image - Accroche immédiate -->
<section class="hero-image h-[calc(var(--real-vh)_*_100)]">
    <div class="hero-content">
        <h1>Équipez votre entreprise en informatique reconditionnée premium</h1>
        <p>Réduisez vos coûts IT jusqu'à 50% et votre empreinte carbone de 70% sans compromis sur la performance</p>
        <a href="formulaire-pro.php" class="hero-btn">Obtenir un devis personnalisé</a>
    </div>
</section>

<!-- Section Proposition de valeur - Bénéfices clés -->
<section class="intro scroll-reveal delay-1" id="proposition-valeur">
    <div class="container">
        <div class="card animate-fade-in">
            <h2>Pourquoi les entreprises choisissent METM ?</h2>
            <p>Spécialistes du <strong>matériel informatique reconditionné professionnel</strong>, nous équipons les entreprises, administrations et établissements d'enseignement avec des <strong>solutions informatiques durables et économiques</strong> de qualité professionnelle.</p>
            
            <p>Notre expertise vous garantit :</p>
            <ul>
                <li><strong>Économies substantielles</strong> : jusqu'à 50% par rapport au neuf</li>
                <li><strong>Qualité professionnelle</strong> : matériel premium rigoureusement testé</li>
                <li><strong>Démarche RSE concrète</strong> : réduction de 70% de l'empreinte carbone</li>
            </ul>

            <div class="cta-buttons" style="margin-top: 20px;">
                <a href="formulaire-pro.php" class="btn">Demander un devis gratuit</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Solutions - Offres professionnelles -->
<section class="our-services scroll-reveal">
    <div class="container">
        <h2 class="section-title">Solutions informatiques professionnelles clé en main</h2>
        <div class="services-grid">
            <?php
            renderServiceCard(
                '/assets/images/00.png',
                'Flottes d\'ordinateurs portables reconditionnés',
                'Équipez vos collaborateurs avec des PC portables reconditionnés de marques premium (Dell, HP, Lenovo) testés, configurés et prêts à l\'emploi. Performances garanties, déploiement simplifié et coûts maîtrisés pour une productivité immédiate.'
            );

            renderServiceCard(
                '/assets/images/10.png',
                'Gestion simplifiée des commandes groupées',
                'Un interlocuteur unique, des processus optimisés et un accompagnement personnalisé pour vos achats en volume. Simplifiez votre approvisionnement informatique, réduisez vos coûts administratifs et gagnez un temps précieux.'
            );

            renderServiceCard(
                '/assets/images/01.png',
                'Logistique et déploiement maîtrisés',
                'Livraison coordonnée, installation sur site et mise en service par nos techniciens. Notre système de suivi en temps réel vous garantit une visibilité complète et une tranquillité d\'esprit jusqu\'à la mise en production.'
            );

            renderServiceCard(
                '/assets/images/11.png',
                'Support et garantie professionnels',
                'Garantie complète de 12 mois minimum sur tous nos équipements. Notre équipe technique dédiée aux professionnels intervient rapidement pour assurer la continuité de vos opérations et minimiser les temps d\'arrêt.'
            );
            ?>
        </div>
    </div>
</section>


<!-- Section Témoignages - Preuves sociales -->
<section class="testimonials scroll-reveal">
    <div class="container">
        <h2 class="section-title">Ils nous font confiance pour leur équipement informatique</h2>
        <div class="testimonial-grid">
            <?php
            renderTestimonial(
                "Nous avons équipé l'ensemble de nos points de vente avec des ordinateurs reconditionnés METM. La livraison a été rapide, le matériel est fiable et le rapport qualité/prix est excellent. Un véritable partenaire pour notre transformation numérique.",
                "PMU - Direction Informatique",
                "https://randomuser.me/api/portraits/men/32.jpg"
            );
            
            renderTestimonial(
                "Grâce à METM, nous avons pu renouveler nos salles informatiques avec des équipements reconditionnés de qualité, tout en respectant notre engagement environnemental. Le service a été professionnel et le suivi impeccable.",
                "Université de Lyon",
                "https://randomuser.me/api/portraits/women/48.jpg"
            );
            renderTestimonial(
                "L'accompagnement de METM nous a permis de renouveler efficacement notre parc informatique avec des équipements reconditionnés de grande qualité. Leur prestation sérieuse et leur suivi personnalisé nous ont pleinement convaincus.",
                "Frank Butelle - Université Paris Nord",
                "https://randomuser.me/api/portraits/men/47.jpg"
            );
            ?>
        </div>
    </div>
</section>

<!-- Section Engagements - Garanties -->
<section class="advantages scroll-reveal" id="engagements">
    <div class="container">
        <h2 class="section-title">Nos garanties pour votre sérénité professionnelle</h2>
        <div class="engagement-container">
            <div class="engagement-item">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text scroll-reveal">
                        <strong>Fiabilité professionnelle garantie</strong>
                        <p>Chaque appareil subit 23 points de contrôle technique et est certifié pour un usage professionnel intensif. Nos taux de panne sont inférieurs à 2%, garantissant la continuité de vos opérations.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/2.png" alt="Fiabilité du matériel informatique reconditionné" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item reverse">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text scroll-reveal">
                        <strong>Transparence totale des coûts</strong>
                        <p>Nos devis détaillés incluent tous les services associés sans frais cachés. Optimisez votre budget IT avec une visibilité complète sur votre investissement et un TCO réduit jusqu'à 40%.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/9.png" alt="Coûts maîtrisés pour matériel informatique professionnel" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text scroll-reveal">
                        <strong>Service après-vente dédié aux professionnels</strong>
                        <p>Un support technique prioritaire avec interlocuteur dédié et intervention rapide. Notre garantie professionnelle de 12 mois minimum couvre pièces, main d'œuvre et déplacement si nécessaire.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/1.png" alt="Garantie et service après-vente pour entreprises" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item reverse">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text scroll-reveal">
                        <strong>Logistique professionnelle sécurisée</strong>
                        <p>Livraison programmée, installation sur site et mise en service par nos techniciens. Suivi en temps réel et coordination avec vos équipes pour un déploiement sans impact sur votre activité.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/8.png" alt="Livraison rapide de matériel informatique pour entreprises" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text scroll-reveal">
                        <strong>Partenariat stratégique durable</strong>
                        <p>Au-delà de la simple fourniture d'équipements, nous vous accompagnons dans l'optimisation continue de votre infrastructure IT avec des solutions évolutives adaptées à votre croissance.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/3.png" alt="Partenaire informatique de confiance pour entreprises" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Processus - Comment ça marche -->
<section class="partners scroll-reveal">
    <div class="container">
        <h2 class="section-title">Un processus d'acquisition simplifié pour les professionnels</h2>
        <div class="timeline">
            <?php
            renderTimelineItem('Étape 1', 'Audit et conseil personnalisé', 'Nos experts analysent vos besoins spécifiques et vous recommandent les solutions les plus adaptées à votre environnement et budget.');
            renderTimelineItem('Étape 2', 'Proposition sur mesure', 'Vous recevez un devis détaillé incluant matériel, services associés et planning de déploiement, avec plusieurs options possibles.');
            renderTimelineItem('Étape 3', 'Préparation technique avancée', 'Chaque équipement est testé, configuré selon vos spécifications et préparé pour une intégration immédiate dans votre infrastructure.');
            renderTimelineItem('Étape 4', 'Déploiement coordonné et suivi', 'Livraison programmée, installation sur site si nécessaire, et accompagnement post-déploiement avec support technique dédié.');
            ?>
        </div>
        <div class="cta-center" style="text-align: center; margin-top: 30px;">
            <a href="formulaire-pro.php" class="btn">Démarrer votre projet d'équipement</a>
        </div>
    </div>
</section>

<!-- Section Partenaires - Crédibilité -->
<section class="partners scroll-reveal">
    <div class="container">
        <h2 class="section-title">Nos partenaires technologiques et clients de référence</h2>
        <div class="partner-logos">
            <img src="assets/images/dell-2.svg" alt="Dell - Partenaire matériel informatique reconditionné" loading="lazy" />
            <img src="/assets/images/hp-5.svg" alt="HP - Fournisseur solutions informatiques professionnelles" loading="lazy" />
            <img src="/assets/images/lenovo-1.svg" alt="Lenovo - Ordinateurs portables reconditionnés" loading="lazy" />
            <img src="/assets/images/toshiba-2.svg" alt="Toshiba - Équipement informatique entreprise" loading="lazy" />
            <img src="/assets/images/acer-2.svg" alt="Acer - Matériel informatique professionnel" loading="lazy" />
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft - Solutions logicielles pour entreprises" loading="lazy" />
            <img src="/assets/images/sorbonne.png" alt="Sorbonne Université - Client de référence METM" loading="lazy" />
        </div>
    </div>
</section>

<!-- Section Valeurs - À propos -->
<section class="bg-white scroll-reveal">
    <div class="container">
        <h2 class="section-title">Nos valeurs fondamentales</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="value-card">
                <i class="fas fa-leaf text-4xl text-blue-600 mb-4"></i>
                <h3>Responsabilité environnementale</h3>
                <p>Nous prolongeons la vie des équipements informatiques pour réduire significativement les déchets électroniques et l'empreinte carbone de votre entreprise.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
                <h3>Excellence technique</h3>
                <p>Chaque appareil reconditionné respecte des standards de qualité rigoureux avec tests approfondis, nettoyage professionnel et garantie minimum de 12 mois.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-tags text-4xl text-blue-600 mb-4"></i>
                <h3>Performance économique</h3>
                <p>Des solutions informatiques professionnelles jusqu'à 50% moins chères que le neuf, permettant d'optimiser votre budget IT sans compromis sur la qualité.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Statistiques - Impact -->
<section class="stats scroll-reveal">
    <div class="container">
        <div class="stats-container">
            <div class="stat-item">
                <h3>100%</h3>
                <p>Matériaux recyclés et traçabilité complète</p>
            </div>
            <div class="stat-item">
                <h3>+2500</h3>
                <p>Entreprises et organisations équipées</p>
            </div>
            <div class="stat-item">
                <h3>-70%</h3>
                <p>Réduction de l'empreinte carbone vs neuf</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Qui sommes-nous - Entreprise -->
<section class="intro scroll-reveal" id="qui-sommes-nous">
    <div class="container">
        <div class="card animate-fade-in">
            <h2>METM : Votre partenaire informatique éco-responsable</h2>
            <p><strong>METM</strong> est une entreprise française basée à <strong>Rosny-sous-Bois</strong>, spécialisée dans la <strong>vente et le déploiement de solutions informatiques reconditionnées</strong> pour les <strong>professionnels</strong>. Notre expertise couvre l'ensemble du cycle de vie des équipements informatiques, de l'audit de vos besoins à la reprise de votre ancien parc.</p>

            <p>Fondée sur des valeurs d'excellence technique et de responsabilité environnementale, notre mission est d'accompagner les entreprises, administrations et établissements d'enseignement dans leur transition vers un modèle informatique plus durable et économique, sans compromis sur la performance.</p>
        </div>
    </div>
</section>

<!-- Section CTA finale -->
<section class="cta-section scroll-reveal">
    <div class="container">
        <h2>Prêt à optimiser votre infrastructure informatique ?</h2>
        <p>Nos experts sont à votre disposition pour étudier vos besoins spécifiques et vous proposer des solutions sur mesure qui allient performance, économies et responsabilité environnementale.</p>
        <div class="cta-buttons">
            <a href="formulaire-pro.php" class="btn btn-primary">Demander un devis personnalisé</a>
            <a href="contact.php" class="btn">Contacter un conseiller</a>
            <a href="telecharger-plaquette.php" class="btn btn-secondary">Télécharger notre documentation</a>
        </div>
    </div>
</section>

<!-- Structured Data - SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "<?php echo SITE_NAME; ?>",
  "url": "https://metm.fr",
  "logo": "https://metm.fr/assets/images/METM.png",
  "sameAs": [
    "<?php echo SOCIAL_FACEBOOK; ?>",
    "<?php echo SOCIAL_LINKEDIN; ?>"
  ],
  "description": "METM est spécialiste du matériel informatique reconditionné pour professionnels. Nous proposons des ordinateurs portables et solutions IT reconditionnés de qualité professionnelle pour entreprises, administrations et établissements d'enseignement.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "15 Rue de l'Industrie",
    "addressLocality": "Rosny-sous-Bois",
    "postalCode": "93110",
    "addressCountry": "FR"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "<?php echo CONTACT_PHONE; ?>",
    "contactType": "Customer Service"
  }
}
</script>
<script>
  function setRealVh() {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--real-vh', `${vh}px`);
  }
  window.addEventListener('load', setRealVh);
  window.addEventListener('resize', setRealVh);
</script>

<?php include 'includes/footer.php'; ?>
