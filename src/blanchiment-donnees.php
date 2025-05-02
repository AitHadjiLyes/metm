
<?php
include 'includes/header.php';
$pageTitle = "Blanchiment de Données - " . SITE_NAME;

?>

<main>
    <section class="hero bg-custom-primary text-black py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Blanchiment de Données</h1>
            <p class="text-xl">Solution professionnelle d'effacement sécurisé des données</p>
        </div>
    </section>

    <section class="process py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Notre Processus</h2>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="process-step text-center">
                    <div class="step-number bg-custom-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h3 class="text-xl font-semibold mb-3">Diagnostic</h3>
                    <p>Évaluation des supports et données à effacer</p>
                </div>
                <div class="process-step text-center">
                    <div class="step-number bg-custom-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h3 class="text-xl font-semibold mb-3">Effacement</h3>
                    <p>Utilisation de méthodes certifiées</p>
                </div>
                <div class="process-step text-center">
                    <div class="step-number bg-custom-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                    <h3 class="text-xl font-semibold mb-3">Vérification</h3>
                    <p>Contrôle de l'effacement complet</p>
                </div>
                <div class="process-step text-center">
                    <div class="step-number bg-custom-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">4</div>
                    <h3 class="text-xl font-semibold mb-3">Certification</h3>
                    <p>Remise d'un certificat d'effacement</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Caractéristiques</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-lg shadow-lg">
                    <i class="fas fa-shield-alt text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Sécurité Maximale</h3>
                    <p>Effacement conforme aux normes militaires</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-lg shadow-lg">
                    <i class="fas fa-certificate text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Certification</h3>
                    <p>Documentation complète du processus</p>
                </div>
                <div class="feature-card bg-white p-6 rounded-lg shadow-lg">
                    <i class="fas fa-sync text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Réutilisation</h3>
                    <p>Possibilité de réutiliser le matériel</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Besoin d'effacer des données sensibles ?</h2>
            <p class="text-xl mb-8">Contactez-nous pour un devis personnalisé</p>
            <a href="/contact.php" class="btn-primary px-8 py-3 rounded-full">Demander un devis</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
