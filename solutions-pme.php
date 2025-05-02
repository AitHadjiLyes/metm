
<?php
include 'includes/header.php';
$pageTitle = "Solutions PME - " . SITE_NAME;

?>

<main class="pt-20">
    <section class="hero bg-gradient-to-r from-custom-primary to-blue-800 text-black py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Solutions PME</h1>
            <p class="text-xl mb-8">Des solutions informatiques reconditionnées adaptées aux besoins des PME</p>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-custom-primary">Pourquoi choisir nos solutions PME ?</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Équipements professionnels reconditionnés de haute qualité</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Économies substantielles sur votre budget informatique</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Garantie et support technique inclus</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                            <span>Solutions personnalisées selon vos besoins</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Nos Services Inclus</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-laptop-code text-custom-primary text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold">Configuration sur mesure</h4>
                                <p class="text-gray-600">Installation des logiciels et paramétrage selon vos besoins</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tools text-custom-primary text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold">Maintenance préventive</h4>
                                <p class="text-gray-600">Suivi régulier et mises à jour de sécurité</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-headset text-custom-primary text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold">Support dédié</h4>
                                <p class="text-gray-600">Assistance technique professionnelle</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Nos Offres PME</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Pack Essentiel</h3>
                    <ul class="space-y-3 mb-6">
                        <li>✓ Postes de travail reconditionnés</li>
                        <li>✓ Installation Windows/Linux</li>
                        <li>✓ Suite bureautique</li>
                        <li>✓ Garantie 1 an</li>
                    </ul>
                    <a href="/contact.php" class="btn-primary block text-center">Nous contacter</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border-2 border-custom-primary">
                    <h3 class="text-xl font-bold mb-4">Pack Business</h3>
                    <ul class="space-y-3 mb-6">
                        <li>✓ Tout du Pack Essentiel</li>
                        <li>✓ Serveur reconditionné</li>
                        <li>✓ Solutions de sauvegarde</li>
                        <li>✓ Support prioritaire</li>
                    </ul>
                    <a href="/contact.php" class="btn-primary block text-center">Nous contacter</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Pack Premium</h3>
                    <ul class="space-y-3 mb-6">
                        <li>✓ Tout du Pack Business</li>
                        <li>✓ Équipements mobiles</li>
                        <li>✓ Solutions de sécurité</li>
                        <li>✓ Formation utilisateurs</li>
                    </ul>
                    <a href="/contact.php" class="btn-primary block text-center">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Prêt à équiper votre entreprise ?</h2>
            <p class="text-xl mb-8">Contactez-nous pour une étude personnalisée de vos besoins</p>
            <div class="flex justify-center gap-4">
                <a href="/contact.php" class="btn-primary">Nous contacter</a>
                <a href="/telecharger-plaquette.php" class="btn-secondary">Télécharger la plaquette</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
