
<?php
include 'includes/header.php';
$pageTitle = "Solutions Éducation - " . SITE_NAME;

?>

<main class="pt-20">
    <section class="hero bg-gradient-to-r from-custom-primary to-blue-800 text-black py-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Solutions pour l'Éducation</h1>
            <p class="text-xl mb-8">Équipez vos établissements avec du matériel informatique reconditionné de qualité</p>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold mb-6 text-custom-primary">Avantages pour les établissements</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-graduation-cap text-green-500 mt-1 mr-3"></i>
                            <span>Solutions adaptées aux besoins pédagogiques</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-euro-sign text-green-500 mt-1 mr-3"></i>
                            <span>Optimisation du budget informatique</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-leaf text-green-500 mt-1 mr-3"></i>
                            <span>Démarche écoresponsable</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-shield-alt text-green-500 mt-1 mr-3"></i>
                            <span>Matériel fiable et garanti</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Notre Accompagnement</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-chalkboard-teacher text-custom-primary text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold">Formation</h4>
                                <p class="text-gray-600">Formation des équipes pédagogiques</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-network-wired text-custom-primary text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold">Installation</h4>
                                <p class="text-gray-600">Mise en place et configuration du réseau</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-tools text-custom-primary text-2xl mr-4"></i>
                            <div>
                                <h4 class="font-semibold">Maintenance</h4>
                                <p class="text-gray-600">Support technique et maintenance régulière</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Nos Solutions Éducatives</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Salles Informatiques</h3>
                    <ul class="space-y-3 mb-6">
                        <li>✓ Postes fixes reconditionnés</li>
                        <li>✓ Configuration réseau</li>
                        <li>✓ Logiciels éducatifs</li>
                        <li>✓ Support technique</li>
                    </ul>
                    <a href="/contact.php" class="btn-primary block text-center">En savoir plus</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg border-2 border-custom-primary">
                    <h3 class="text-xl font-bold mb-4">Classes Mobiles</h3>
                    <ul class="space-y-3 mb-6">
                        <li>✓ Ordinateurs portables</li>
                        <li>✓ Chariots de rangement</li>
                        <li>✓ Solutions de recharge</li>
                        <li>✓ Gestion de flotte</li>
                    </ul>
                    <a href="/contact.php" class="btn-primary block text-center">En savoir plus</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Solutions Administratives</h3>
                    <ul class="space-y-3 mb-6">
                        <li>✓ Postes administratifs</li>
                        <li>✓ Serveurs dédiés</li>
                        <li>✓ Solutions d'impression</li>
                        <li>✓ Sécurité réseau</li>
                    </ul>
                    <a href="/contact.php" class="btn-primary block text-center">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Équipez votre établissement</h2>
            <p class="text-xl mb-8">Découvrez nos solutions sur mesure pour l'éducation</p>
            <div class="flex justify-center gap-4">
                <a href="/contact.php" class="btn-primary">Demander un devis</a>
                <a href="/telecharger-plaquette.php" class="btn-secondary">Documentation détaillée</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
