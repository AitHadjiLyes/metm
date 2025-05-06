<?php
include 'includes/header.php';
$pageTitle = "Blanchiment de Données - " . SITE_NAME;
?>

<main class="solutions-page data-wipe-page">
    <style>
        .data-wipe-page .solutions-hero {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            color: #fff;
        }
        .data-wipe-page .process-step {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 16px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s;
        }
        .data-wipe-page .process-step:hover {
            transform: translateY(-5px);
        }
        .data-wipe-page .feature-card {
            background: #ffffff;
            border-left: 4px solid #2c5364;
            transition: box-shadow 0.3s;
        }
        .data-wipe-page .feature-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .data-wipe-page .cta {
            background: radial-gradient(circle, #2c5364 0%, #0f2027 100%);
            color: white;
        }
        .data-wipe-page .btn-primary {
            background-color: #1a8cff;
            color: white;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .data-wipe-page .btn-primary:hover {
            background-color: #0066cc;
        }
        .data-wipe-page .process-step {
  position: relative;
  padding-top: 60px;
}

.data-wipe-page .step-number {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 48px;
  height: 48px;
  background-color: var(--color-primary, #0a2a66);
  color: white;
  font-size: 1.25rem;
  font-weight: bold;
  border-radius: 9999px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  z-index: 2;
}

    </style>

    <section class="solutions-hero py-24">
        <div class="container text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Blanchiment de Données</h1>
            <p class="text-xl max-w-2xl mx-auto">
                Une solution professionnelle, certifiée et conforme RGPD pour effacer vos données sensibles en toute sécurité.
                Nous garantissons une suppression irréversible, documentée et traçable de vos fichiers.
            </p>
        </div>
    </section>

    <section class="solutions-intro py-20">
        <div class="container max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Protégez vos données. Respectez la loi. Préservez la confiance.</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                À l'heure où les cyberattaques se multiplient, où le Règlement Général sur la Protection des Données (RGPD) impose des obligations strictes,
                et où chaque fichier non effacé peut devenir une faille exploitée, notre solution de blanchiment de données agit comme un pare-feu ultime.
                Elle vous permet de traiter vos anciens parcs informatiques en toute conformité, tout en préparant le matériel à une seconde vie.
            </p>
        </div>
    </section>

    <section class="process py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Notre Processus Certifié</h2>
            <div class="grid md:grid-cols-4 gap-10">
                <div class="process-step text-center">
                <div class="step-number">1</div>
                <h3 class="text-xl font-semibold mb-3">Diagnostic</h3>
                    <p>Audit complet du parc à traiter, type de support, volume de données, sensibilité des fichiers</p>
                </div>
                <div class="process-step text-center">
                <div class="step-number">1</div>
                <h3 class="text-xl font-semibold mb-3">Effacement</h3>
                    <p>Utilisation de logiciels certifiés (DoD 5220.22-M, NIST, Gutmann...) garantissant l’irréversibilité</p>
                </div>
                <div class="process-step text-center">
                <div class="step-number">1</div>
                <h3 class="text-xl font-semibold mb-3">Vérification</h3>
                    <p>Contrôle par checksum, relecture des secteurs, double validation automatisée</p>
                </div>
                <div class="process-step text-center">
                <div class="step-number">1</div>
                <h3 class="text-xl font-semibold mb-3">Certification</h3>
                    <p>Remise d'un certificat PDF signé, daté, listant chaque support effacé avec ses numéros de série</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Caractéristiques Clés</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="feature-card p-6 rounded-lg">
                    <i class="fas fa-shield-alt text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Sécurité Maximale</h3>
                    <p>Des méthodes utilisées par les ministères, banques et forces armées, appliquées à votre entreprise</p>
                </div>
                <div class="feature-card p-6 rounded-lg">
                    <i class="fas fa-certificate text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Certification</h3>
                    <p>Preuves PDF horodatées, conformes aux audits ISO 27001, RGPD et cybersécurité</p>
                </div>
                <div class="feature-card p-6 rounded-lg">
                    <i class="fas fa-sync text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Réutilisation Éthique</h3>
                    <p>Valorisez vos matériels effacés en leur offrant une seconde vie sans risque de fuite</p>
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

<?php include 'includes/footer.php'; ?>
