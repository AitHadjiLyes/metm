<?php
// Ajouter ces lignes au tout début du fichier, juste après <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Page de téléchargement de la plaquette commerciale
 */
require_once 'config.php';
require_once 'includes/components.php';

$pageTitle = 'Télécharger notre plaquette commerciale';
include 'includes/header.php';
?>

<main>
    <section class="download-section">
        <div class="container">
            <h2 class="section-title">Notre plaquette commerciale</h2>
            <p class="text-center mb-lg">Découvrez notre offre complète pour les professionnels dans notre plaquette commerciale téléchargeable.</p>
            
            <div class="download-card">
                <div class="download-preview">
                    <img src="assets/images/atelier.jpg" alt="Aperçu de la plaquette commerciale" class="preview-image">
                </div>
                
                <div class="download-info">
                    <h3>Plaquette Commerciale METM</h3>
                    <p>Notre plaquette détaille toutes nos offres pour les professionnels :</p>
                    
                    <ul class="download-features">
                        <li><i class="fas fa-check"></i> Gammes de produits reconditionnés</li>
                        <li><i class="fas fa-check"></i> Services complémentaires</li>
                        <li><i class="fas fa-check"></i> Avantages économiques et écologiques</li>
                        <li><i class="fas fa-check"></i> Témoignages clients</li>
                        <li><i class="fas fa-check"></i> Informations de contact</li>
                    </ul>
                    
                    <div class="download-actions">
                        <a href="assets/pdf/plaquette-commerciale.pdf" download class="download-btn">
                            <i class="fas fa-file-pdf"></i> Télécharger la plaquette (PDF)
                        </a>
                        
                        <div class="download-meta">
                            <span><i class="fas fa-file"></i> Format PDF</span>
                            <span><i class="fas fa-weight"></i> 2.3 Mo</span>
                            <span><i class="fas fa-calendar"></i> Mise à jour : <?php echo date('d/m/Y'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-cta">
                <h3>Besoin d'informations complémentaires ?</h3>
                <p>Notre équipe commerciale est à votre disposition pour répondre à toutes vos questions.</p>
                <a href="contact.php" class="btn btn-primary">Demander un devis personnalisé</a>
                <a href="contact.php" class="btn btn-outline">Nous contacter</a>
            </div>
        </div>
    </section>
    
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Ils nous font confiance</h2>
            
            <div class="testimonials-grid">
                <?php
                renderTestimonial(
                    "Nous avons équipé l'ensemble de notre réseau de points de vente avec des ordinateurs reconditionnés METM. Livraison rapide, matériel fiable et excellent rapport qualité/prix. Un vrai partenaire pour notre transformation numérique.",
                    "PMU - Direction Informatique",
                    "https://randomuser.me/api/portraits/men/32.jpg"
                );
                
                renderTestimonial(
                    "Grâce à METM, nous avons pu renouveler nos salles informatiques avec des équipements reconditionnés haut de gamme, tout en respectant nos engagements environnementaux. Service professionnel et suivi irréprochable.",
                    "Université de Lyon",
                    "https://randomuser.me/api/portraits/women/48.jpg"
                );
                
                renderTestimonial(
                    "Le rapport qualité-prix des équipements METM est imbattable. Nous avons renouvelé tout notre parc informatique avec un budget maîtrisé et un service impeccable.",
                    "Frank Butelle - Université Paris Nord",
                    "https://randomuser.me/api/portraits/men/47.jpg"
                );
                ?>
            </div>
        </div>
    </section>
</main>

<style>
/* Styles pour la page de téléchargement */
.download-section {
    padding: 60px 0;
}

.download-card {
    display: flex;
    background-color: var(--color-bg-card, #fff);
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 40px;
}

.download-preview {
    flex: 0 0 40%;
    background-color: var(--color-bg-hover, #f5f5f5);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.preview-image {
    max-width: 100%;
    height: auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: 1px solid #ddd;
}

.download-info {
    flex: 0 0 60%;
    padding: 30px;
}

.download-info h3 {
    margin-top: 0;
    margin-bottom: 15px;
    color: var(--color-primary, #3498db);
    font-size: 1.5rem;
}

.download-features {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.download-features li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.download-features li i {
    color: var(--color-success, #2ecc71);
    margin-right: 10px;
}

.download-actions {
    margin-top: 30px;
}

.download-btn {
    display: inline-flex;
    align-items: center;
    background-color: var(--color-primary, #3498db);
    color: white;
    padding: 12px 24px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.download-btn:hover {
    background-color: var(--color-primary-dark, #2980b9);
    transform: translateY(-2px);
}

.download-btn i {
    margin-right: 10px;
    font-size: 1.2rem;
}

.download-meta {
    display: flex;
    flex-wrap: wrap;
    margin-top: 15px;
    font-size: 0.9rem;
    color: var(--color-text-muted, #7f8c8d);
}

.download-meta span {
    margin-right: 20px;
    display: flex;
    align-items: center;
}

.download-meta i {
    margin-right: 5px;
}

.contact-cta {
    text-align: center;
    background-color: var(--color-bg-hover, #f5f5f5);
    padding: 30px;
    border-radius: 8px;
}

.contact-cta h3 {
    margin-top: 0;
}

.contact-cta .btn {
    margin: 5px;
}

/* Responsive */
@media (max-width: 768px) {
    .download-card {
        flex-direction: column;
    }
    
    .download-preview, .download-info {
        flex: 0 0 100%;
    }
    
    .download-preview {
        padding: 20px 20px 0;
    }
    
    .download-meta {
        flex-direction: column;
    }
    
    .download-meta span {
        margin-bottom: 5px;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
