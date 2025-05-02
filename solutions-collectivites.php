
<?php
include 'includes/header.php';
$pageTitle = "Solutions pour Collectivités - " . SITE_NAME;

?>

<main>
    <section class="hero bg-custom-primary text-black py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">Solutions pour Collectivités</h1>
            <p class="text-xl">Équipements informatiques reconditionnés adaptés aux besoins des collectivités locales</p>
        </div>
    </section>

    <section class="benefits py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Avantages pour les Collectivités</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="benefit-card p-6 rounded-lg shadow-lg">
                    <i class="fas fa-euro-sign text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Économies Budgétaires</h3>
                    <p>Réduisez vos coûts d'équipement tout en maintenant une qualité professionnelle</p>
                </div>
                <div class="benefit-card p-6 rounded-lg shadow-lg">
                    <i class="fas fa-leaf text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Engagement Écologique</h3>
                    <p>Contribuez à l'économie circulaire et réduisez votre impact environnemental</p>
                </div>
                <div class="benefit-card p-6 rounded-lg shadow-lg">
                    <i class="fas fa-shield-alt text-4xl text-custom-primary mb-4"></i>
                    <h3 class="text-xl font-semibold mb-3">Conformité Garantie</h3>
                    <p>Matériel conforme aux normes et réglementations des marchés publics</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Nos Services Dédiés</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="service-card bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Équipement des Services</h3>
                    <ul class="space-y-3">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Postes de travail reconditionnés</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Ordinateurs portables professionnels</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Équipements réseau et périphériques</li>
                    </ul>
                </div>
                <div class="service-card bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Support et Maintenance</h3>
                    <ul class="space-y-3">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Installation et configuration</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Maintenance préventive</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Support technique dédié</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cta py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Prêt à équiper votre collectivité ?</h2>
            <p class="text-xl mb-8">Contactez-nous pour une étude personnalisée de vos besoins</p>
            <a href="/contact.php" class="btn-primary px-8 py-3 rounded-full">Nous contacter</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
