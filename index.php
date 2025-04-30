<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Page d'accueil
 */
require_once 'config.php';
require_once 'includes/components.php';

$pageTitle = 'Accueil';
include 'includes/header.php';

// Définir les chemins d'images pour la bannière hero
$heroBgDesktop = '/assets/images/banner3.png';
$heroBgTablet = '/assets/images/banner3-tablet.png';
$heroBgMobile = '/assets/images/banner3-mobile.png';

// Générer le CSS pour l'image d'arrière-plan responsive
renderResponsiveBackgroundImage('.hero-image', $heroBgDesktop, $heroBgMobile, $heroBgTablet);
?>

<!-- Section Hero Image -->
<section class="hero-image">
    <div class="hero-content">
        <h2>Experts en Informatique Reconditionnée</h2>
        <p>Libérez la valeur de votre ancien parc informatique, en toute sécurité et en toute simplicité</p>
        <a href="formulaire-pro.php" class="hero-btn">Demander un devis</a>
    </div>
</section>

<!-- Section Nos Offres Professionnelles -->
<section class="our-services">
    <div class="container">
        <h2 class="section-title">Solutions informatiques prêtes à l'emploi</h2>
        <div class="services-grid">
            <?php
            renderServiceCard(
                '/assets/images/00.png',
                'Ordinateurs prêts à l\'usage',
                'Chaque appareil est rigoureusement vérifié, configuré et préparé pour une mise en service immédiate. Nos solutions performantes s\'adaptent parfaitement aux exigences spécifiques de vos environnements professionnels pour une productivité optimale.'
            );

            renderServiceCard(
                '/assets/images/10.png',
                'Commandes groupées sans friction',
                'Nous simplifions la gestion de vos achats en volume grâce à une logistique optimisée, un interlocuteur unique et un accompagnement personnalisé. Gagnez du temps et optimisez votre budget avec nos solutions d\'approvisionnement efficaces.'
            );

            renderServiceCard(
                '/assets/images/01.png',
                'Expédition maîtrisée',
                'Vos commandes sont préparées, emballées et expédiées avec le plus grand soin. Notre système de suivi en temps réel vous garantit une visibilité complète et une tranquillité d\'esprit jusqu\'à la réception de votre matériel.'
            );

            renderServiceCard(
                '/assets/images/11.png',
                'Support et garantie professionnelle',
                'Tous nos ordinateurs sont livrés avec une garantie complète couvrant les éventuelles pannes matérielles. Notre équipe technique intervient rapidement pour vous assurer une continuité opérationnelle et une sérénité totale dans votre activité quotidienne.'
            );
            
            ?>
        </div>
    </div>
</section>


<!-- Section Notre Parcours -->
<section class="partners scroll-reveal">
    <div class="container">
        <h2 class="section-title">Commandez en toute simplicité</h2>
        <p class="text-center mb-lg">Notre processus d'achat a été conçu pour vous faire gagner du temps et vous garantir une expérience fluide de bout en bout. Découvrez les étapes clés de votre commande :</p>
        <div class="timeline">
            <?php
            renderTimelineItem('Étape 1', 'Demande de devis', 'Complétez notre formulaire en ligne pour recevoir une offre adaptée à vos besoins professionnels.');
            renderTimelineItem('Étape 2', 'Validation ', 'Nous vous contactons rapidement pour finaliser les détails et confirmer votre commande.');
            renderTimelineItem('Étape 3', 'Préparation et configuration', 'Chaque appareil est testé, configuré et préparé pour une utilisation immédiate.');
            renderTimelineItem('Étape 4', 'Livraison et garantie', 'Nous livrons votre commande dans les meilleurs délais avec garantie incluse et assistance à disposition.');
            ?>
        </div>
    </div>
</section>


<main>
    <!-- Section Qui Sommes-Nous -->
    <section class="intro scroll-reveal delay-1" id="qui-sommes-nous">
    <div class="container">
        <div class="card animate-fade-in">
            <h2>Qui sommes-nous ?</h2>
            <p><strong>METM</strong> est une entreprise française basée à <strong>Rosny-sous-Bois</strong>, spécialisée dans la vente de <strong>matériel informatique reconditionné</strong> pour <strong>professionnels</strong>. Nous proposons des <strong>PC portables</strong>, composants et périphériques remis à neuf, testés et garantis.</p>

            <p>Notre mission : offrir des <strong>solutions technologiques fiables et durables</strong>, tout en réduisant les <strong>déchets électroniques</strong>. Entreprises, écoles, administrations : bénéficiez de notre expertise et de produits performants à prix réduit.</p>

            <a href="formulaire-pro.php" class="btn">Demander un devis</a>
        </div>
    </div>
</section>

   <!-- Section Mission et Engagements -->
<section class="advantages scroll-reveal" id="engagements">
    <div class="container">
        <h2 class="section-title">Notre engagement envers votre réussite</h2>
        <div class="engagement-container">
            <div class="engagement-item">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text">
                        <strong>Fiabilité du matériel</strong>
                        <p>Chaque appareil est rigoureusement sélectionné, contrôlé et testé pour garantir des performances optimales sur le long terme.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/2.png" alt="Fiabilité du matériel" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item reverse">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text">
                        <strong>Des coûts maîtrisés et transparents</strong>
                        <p>Nous proposons des tarifs compétitifs et sans surprise, permettant aux entreprises d'équiper efficacement leurs équipes sans dépasser leur budget.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/9.png" alt="Coûts maîtrisés" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text">
                        <strong>Garantie et service après-vente dédiés</strong>
                        <p>Nous assurons une garantie claire sur tous nos produits et mettons à disposition un support technique réactif pour résoudre tout imprévu.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/1.png" alt="Garantie et service après-vente" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item reverse">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text">
                        <strong>Livraison rapide et sécurisée</strong>
                        <p>Nous expédions votre commande avec un suivi complet, garantissant une réception rapide et conforme aux attentes.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/8.png" alt="Livraison rapide" loading="lazy">
                </div>
            </div>
            
            <div class="engagement-item">
                <div class="engagement-content">
                    <div class="engagement-icon">
                        <span>✔</span>
                    </div>
                    <div class="engagement-text">
                        <strong>Partenaire de confiance</strong>
                        <p>Nous nous engageons à bâtir une relation durable basée sur la fiabilité de nos équipements et la qualité de notre service client.</p>
                    </div>
                </div>
                <div class="engagement-image">
                    <img src="/assets/images/3.png" alt="Partenaire de confiance" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>



    



<section class="bg-white">
    <div class="container">
        <h2 class="section-title">Nos valeurs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="value-card">
                <i class="fas fa-leaf text-4xl text-blue-600 mb-4"></i>
                <h3>Durabilité</h3>
                <p>Nous prolongeons la vie des produits pour limiter les déchets électroniques.</p>
            </div>
            <div class="value-card">
            <i class="fas fa-shield-alt text-4xl text-blue-600 mb-4"></i>
            <h3>Fiabilité</h3>
                <p>Tous nos appareils sont testés, nettoyés et garantis pendant 12 mois minimum.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-tags text-4xl text-blue-600 mb-4"></i>
                <h3>Accessibilité</h3>
                <p>Des prix jusqu'à 50 % moins chers que le neuf, sans compromis sur la qualité.</p>
            </div>
        </div>
    </div>
</section>


    <!-- Section Témoignages -->
    <section class="testimonials">
    <div class="container">
        <h2 class="section-title">Témoignages de nos clients</h2>
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

 <!-- Section Partenaires -->
 <section class="partners">
        <div class="container">
            <h2 class="section-title">Nos partenaires</h2>
            <div class="partner-logos">
                <img src="assets/images/dell-2.svg" alt="Dell" loading="lazy" />
                <img src="/assets/images/hp-5.svg" alt="HP" loading="lazy" />
                <img src="/assets/images/lenovo-1.svg" alt="Lenovo" loading="lazy" />
                <img src="/assets/images/toshiba-2.svg" alt="Toshiba" loading="lazy" />
                <img src="/assets/images/acer-2.svg" alt="Acer" loading="lazy" />
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft" loading="lazy" />
                <img src="/assets/images/sorbonne.png" alt="Acer" loading="lazy" />
            </div>
        </div>
    </section>
    <!-- Section Statistiques -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Matériaux recyclés</p>
                </div>
                <div class="stat-item">
                    <h3>+2500</h3>
                    <p>Clients satisfaits</p>
                </div>
                <div class="stat-item">
                    <h3>-70%</h3>
                    <p>Empreinte carbone réduite</p>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Section CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>Vous souhaitez en savoir plus ?</h2>
            <p>Notre équipe est à votre disposition pour répondre à toutes vos questions sur notre entreprise, nos valeurs et nos services.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn btn-primary">Nous contacter</a>
                <a href="telecharger-plaquette.php" class="btn btn-secondary">Télécharger notre plaquette</a>
            </div>
        </div>
    </section>
</main>

<!-- Structured Data -->
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
  "description": "<?php echo SITE_DESCRIPTION; ?>",
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

<?php include 'includes/footer.php'; ?>
