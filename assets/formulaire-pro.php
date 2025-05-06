<?php
/**
 * Formulaire détaillé pour clients professionnels
 */
require_once 'config.php';
require_once 'includes/components.php';

$pageTitle = 'Formulaire Professionnel';
include 'includes/header.php';
?>

<main>
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title">Demande de devis professionnel</h2>
            <p class="text-center mb-lg">Complétez ce formulaire pour recevoir une offre personnalisée adaptée aux besoins de votre entreprise.</p>

            <div class="contact-card">
                

                <div class="contact-form">
                    <div id="successMessage" class="success-message">
                        Votre demande a été envoyée avec succès ! Notre équipe commerciale vous contactera dans les 24h ouvrées.
                    </div>

                    <!-- Barre de progression -->
                    <div class="form-progress">
                        <div class="progress-step active" data-step="1">
                            <div class="step-number">1</div>
                            <div class="step-label">Entreprise</div>
                        </div>
                        <div class="progress-step" data-step="2">
                            <div class="step-number">2</div>
                            <div class="step-label">Contact</div>
                        </div>
                        <div class="progress-step" data-step="3">
                            <div class="step-number">3</div>
                            <div class="step-label">Équipement</div>
                        </div>
                        <div class="progress-step" data-step="4">
                            <div class="step-number">4</div>
                            <div class="step-label">Finalisation</div>
                        </div>
                    </div>

                    <form id="proForm" method="POST" action="formulaire.php">
                        <input type="hidden" name="form_type" value="professional">
                        
                        <!-- Étape 1: Informations sur l'entreprise -->
                        <div class="form-step" id="step1">
                            <h3 class="mb-md">Informations sur votre entreprise</h3>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="company_name">Nom de l'entreprise <span>*</span></label>
                                    <input type="text" id="company_name" name="company_name" class="form-control" required>
                                    <div id="companyNameError" class="error-message"></div>
                                </div>

                                <div class="form-group">
                                    <label for="company_size">Taille de l'entreprise <span>*</span></label>
                                    <select id="company_size" name="company_size" class="form-control" required>
                                        <option value="" disabled selected>Sélectionnez une option</option>
                                        <option value="1-10">1-10 employés</option>
                                        <option value="11-50">11-50 employés</option>
                                        <option value="51-200">51-200 employés</option>
                                        <option value="201-500">201-500 employés</option>
                                        <option value="501+">Plus de 500 employés</option>
                                    </select>
                                    <div id="companySizeError" class="error-message"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="industry">Secteur d'activité <span>*</span></label>
                                <select id="industry" name="industry" class="form-control" required>
                                    <option value="" disabled selected>Sélectionnez une option</option>
                                    <option value="Education">Éducation</option>
                                    <option value="Healthcare">Santé</option>
                                    <option value="Finance">Finance/Banque/Assurance</option>
                                    <option value="Retail">Commerce/Distribution</option>
                                    <option value="Manufacturing">Industrie/Production</option>
                                    <option value="IT">Informatique/Technologie</option>
                                    <option value="Government">Administration/Collectivité</option>
                                    <option value="Services">Services</option>
                                    <option value="Other">Autre</option>
                                </select>
                                <div id="industryError" class="error-message"></div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>

                        <!-- Étape 2: Coordonnées du contact -->
                        <div class="form-step" id="step2" style="display: none;">
                            <h3 class="mb-md">Coordonnées du contact</h3>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="contact_name">Nom complet <span>*</span></label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" required>
                                    <div id="contactNameError" class="error-message"></div>
                                </div>

                                <div class="form-group">
                                    <label for="job_title">Fonction <span>*</span></label>
                                    <input type="text" id="job_title" name="job_title" class="form-control" required>
                                    <div id="jobTitleError" class="error-message"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email professionnel <span>*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <div id="emailError" class="error-message"></div>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Téléphone <span>*</span></label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                    <div id="phoneError" class="error-message"></div>
                                </div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>

                        <!-- Étape 3: Besoins en équipement -->
                        <div class="form-step" id="step3" style="display: none;">
                            <h3 class="mb-md">Besoins en équipement</h3>

                            <div class="form-group">
                                <label>Type d'équipement recherché <span>*</span></label>
                                <div class="checkbox-grid">
                                    <div>
                                        <input type="checkbox" id="laptops" name="equipment_type[]" value="laptops">
                                        <label for="laptops">PC Portables</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="desktops" name="equipment_type[]" value="desktops">
                                        <label for="desktops">PC Fixes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="smartphones" name="equipment_type[]" value="smartphones">
                                        <label for="smartphones">Smartphones</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="tablets" name="equipment_type[]" value="tablets">
                                        <label for="tablets">Tablettes</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="monitors" name="equipment_type[]" value="monitors">
                                        <label for="monitors">Écrans</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="accessories" name="equipment_type[]" value="accessories">
                                        <label for="accessories">Accessoires</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="other_equipment" name="equipment_type[]" value="other">
                                        <label for="other_equipment">Autre</label>
                                    </div>
                                </div>
                                <div id="equipmentTypeError" class="error-message"></div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="quantity">Quantité approximative <span>*</span></label>
                                    <select id="quantity" name="quantity" class="form-control" required>
                                        <option value="" disabled selected>Sélectionnez une option</option>
                                        <option value="1-5">1-5 unités</option>
                                        <option value="6-20">6-20 unités</option>
                                        <option value="21-50">21-50 unités</option>
                                        <option value="51-100">51-100 unités</option>
                                        <option value="100+">Plus de 100 unités</option>
                                    </select>
                                    <div id="quantityError" class="error-message"></div>
                                </div>

                                <div class="form-group">
                                    <label for="budget">Budget estimé</label>
                                    <select id="budget" name="budget" class="form-control">
                                        <option value="" disabled selected>Sélectionnez une option</option>
                                        <option value="<5000">Moins de 5 000 €</option>
                                        <option value="5000-10000">5 000 € - 10 000 €</option>
                                        <option value="10001-25000">10 001 € - 25 000 €</option>
                                        <option value="25001-50000">25 001 € - 50 000 €</option>
                                        <option value="50000+">Plus de 50 000 €</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="timeframe">Délai souhaité <span>*</span></label>
                                    <select id="timeframe" name="timeframe" class="form-control" required>
                                        <option value="" disabled selected>Sélectionnez une option</option>
                                        <option value="urgent">Urgent (moins de 2 semaines)</option>
                                        <option value="1month">Dans le mois</option>
                                        <option value="3months">Dans les 3 mois</option>
                                        <option value="6months">Dans les 6 mois</option>
                                        <option value="flexible">Flexible</option>
                                    </select>
                                    <div id="timeframeError" class="error-message"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="specifications">Spécifications techniques souhaitées</label>
                                <textarea id="specifications" name="specifications" class="form-control" placeholder="Ex: Processeur i5 minimum, 16 Go RAM, SSD 256 Go, etc."></textarea>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>

                        <!-- Étape 4: Services complémentaires et finalisation -->
                        <div class="form-step" id="step4" style="display: none;">
                            <h3 class="mb-md">Services complémentaires et finalisation</h3>

                            <div class="form-group">
                                <label>Services complémentaires souhaités</label>
                                <div class="checkbox-grid">
                                    <div>
                                        <input type="checkbox" id="installation" name="additional_services[]" value="installation">
                                        <label for="installation">Installation sur site</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="data_migration" name="additional_services[]" value="data_migration">
                                        <label for="data_migration">Migration des données</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="software_installation" name="additional_services[]" value="software_installation">
                                        <label for="software_installation">Installation de logiciels</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="extended_warranty" name="additional_services[]" value="extended_warranty">
                                        <label for="extended_warranty">Extension de garantie</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="maintenance" name="additional_services[]" value="maintenance">
                                        <label for="maintenance">Contrat de maintenance</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="old_equipment_recycling" name="additional_services[]" value="old_equipment_recycling">
                                        <label for="old_equipment_recycling">Recyclage de l'ancien matériel</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="additional_info">Informations complémentaires</label>
                                <textarea id="additional_info" name="additional_info" class="form-control" placeholder="Précisez ici toute information complémentaire concernant votre projet..."></textarea>
                            </div>

                            <div class="form-group">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="consent" name="consent" required>
                                    <label for="consent">J'accepte que mes données soient utilisées pour traiter ma demande et me contacter <span>*</span></label>
                                </div>
                                <div id="consentError" class="error-message"></div>
                            </div>

                            <div class="form-group">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="newsletter" name="newsletter">
                                    <label for="newsletter">Je souhaite recevoir des informations sur les offres et services de METM</label>
                                </div>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="submit" class="submit-btn">Demander un devis personnalisé</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <div class="faq-container">
                <h3>Questions fréquentes - Clients professionnels</h3>
                
                <?php
                renderFaqItem(
                    'Quels avantages pour mon entreprise à choisir du matériel reconditionné ?',
                    'Le matériel reconditionné offre plusieurs avantages : économies substantielles (jusqu\'à 50% par rapport au neuf), démarche RSE valorisable, équipements testés et fiables, et flexibilité dans les volumes et configurations. Vous bénéficiez également d\'un service client dédié aux professionnels.'
                );
                
                renderFaqItem(
                    'Quelles garanties proposez-vous pour les entreprises ?',
                    'Tous nos équipements sont couverts par une garantie professionnelle de 12 mois minimum, avec possibilité d\'extension jusqu\'à 36 mois. Nous proposons également des contrats de maintenance et un service après-vente dédié aux professionnels avec intervention rapide.'
                );
                
                renderFaqItem(
                    'Pouvez-vous gérer des commandes volumineuses ?',
                    'Absolument. Nous sommes équipés pour traiter des commandes de toutes tailles, de quelques unités à plusieurs centaines. Notre logistique est optimisée pour les livraisons volumineuses et nous pouvons échelonner les livraisons selon vos besoins.'
                );
                
                renderFaqItem(
                    'Proposez-vous des solutions de financement ?',
                    'Oui, nous proposons plusieurs options de financement adaptées aux entreprises : location longue durée, crédit-bail, ou paiement échelonné. Nous pouvons également établir des contrats-cadres pour les achats réguliers.'
                );
                
                renderFaqItem(
                    'Comment assurez-vous la confidentialité des données sur les appareils ?',
                    'Tous nos appareils subissent un processus d\'effacement des données conforme aux normes de sécurité les plus strictes (NIST 800-88). Nous fournissons un certificat d\'effacement pour chaque lot d\'équipements, garantissant qu\'aucune donnée précédente ne subsiste.'
                );
                ?>
            </div>
        </div>
    </section>
</main>

<!-- Script reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAPTCHA_SITE_KEY; ?>"></script>

<!-- Script de validation du formulaire -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la navigation entre les étapes
    const nextButtons = document.querySelectorAll('.next-step');
    const prevButtons = document.querySelectorAll('.prev-step');
    const formSteps = document.querySelectorAll('.form-step');
    const progressSteps = document.querySelectorAll('.progress-step');
    let currentStep = 1;

    // Fonction pour passer à l'étape suivante
    function goToNextStep() {
        // Valider l'étape actuelle avant de passer à la suivante
        if (validateStep(currentStep)) {
            document.getElementById('step' + currentStep).style.display = 'none';
            currentStep++;
            document.getElementById('step' + currentStep).style.display = 'block';
            updateProgressBar();
        }
    }

    // Fonction pour revenir à l'étape précédente
    function goToPrevStep() {
        document.getElementById('step' + currentStep).style.display = 'none';
        currentStep--;
        document.getElementById('step' + currentStep).style.display = 'block';
        updateProgressBar();
    }

    // Mettre à jour la barre de progression
    function updateProgressBar() {
        progressSteps.forEach((step, index) => {
            if (index + 1 < currentStep) {
                step.classList.add('completed');
                step.classList.remove('active');
            } else if (index + 1 === currentStep) {
                step.classList.add('active');
                step.classList.remove('completed');
            } else {
                step.classList.remove('active', 'completed');
            }
        });
    }

    // Valider chaque étape
    function validateStep(step) {
        // Réinitialiser les messages d'erreur
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        
        let isValid = true;
        
        if (step === 1) {
            // Validation de l'étape 1
            const companyName = document.getElementById('company_name').value.trim();
            const companySize = document.getElementById('company_size').value;
            const industry = document.getElementById('industry').value;
            
            if (!companyName) {
                document.getElementById('companyNameError').textContent = 'Veuillez entrer le nom de votre entreprise';
                isValid = false;
            }
            
            if (!companySize) {
                document.getElementById('companySizeError').textContent = 'Veuillez sélectionner la taille de votre entreprise';
                isValid = false;
            }
            
            if (!industry) {
                document.getElementById('industryError').textContent = 'Veuillez sélectionner votre secteur d\'activité';
                isValid = false;
            }
        } else if (step === 2) {
            // Validation de l'étape 2
            const contactName = document.getElementById('contact_name').value.trim();
            const jobTitle = document.getElementById('job_title').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            
            if (!contactName) {
                document.getElementById('contactNameError').textContent = 'Veuillez entrer votre nom complet';
                isValid = false;
            }
            
            if (!jobTitle) {
                document.getElementById('jobTitleError').textContent = 'Veuillez entrer votre fonction';
                isValid = false;
            }
            
            if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                document.getElementById('emailError').textContent = 'Veuillez entrer un email professionnel valide';
                isValid = false;
            }
            
            if (!phone) {
                document.getElementById('phoneError').textContent = 'Veuillez entrer votre numéro de téléphone';
                isValid = false;
            }
        } else if (step === 3) {
            // Validation de l'étape 3
            const equipmentTypes = document.querySelectorAll('input[name="equipment_type[]"]:checked');
            const quantity = document.getElementById('quantity').value;
            const timeframe = document.getElementById('timeframe').value;
            
            if (equipmentTypes.length === 0) {
                document.getElementById('equipmentTypeError').textContent = 'Veuillez sélectionner au moins un type d\'équipement';
                isValid = false;
            }
            
            if (!quantity) {
                document.getElementById('quantityError').textContent = 'Veuillez sélectionner une quantité approximative';
                isValid = false;
            }
            
            if (!timeframe) {
                document.getElementById('timeframeError').textContent = 'Veuillez sélectionner un délai souhaité';
                isValid = false;
            }
        }
        
        return isValid;
    }

    // Événements pour les boutons suivant/précédent
    nextButtons.forEach(button => {
        button.addEventListener('click', goToNextStep);
    });
    
    prevButtons.forEach(button => {
        button.addEventListener('click', goToPrevStep);
    });

    // Validation du formulaire complet lors de la soumission
    document.getElementById('proForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Empêche le rechargement
        
        // Vérifier si l'étape actuelle est valide
        if (!validateStep(currentStep)) {
            return;
        }
        
        // Vérifier le consentement
        const consent = document.getElementById('consent').checked;
        if (!consent) {
            document.getElementById('consentError').textContent = 'Vous devez accepter que vos données soient utilisées';
            return;
        }

        // Génération du token reCAPTCHA v3
        grecaptcha.ready(function() {
            grecaptcha.execute('<?php echo RECAPTCHA_SITE_KEY; ?>', {action: 'professional_form'}).then(function(token) {
                const formData = new FormData(e.target);
                formData.append('recaptcha_token', token);

                // Envoi au backend
                fetch('formulaire.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    if (data.includes("Message envoyé avec succès")) {
                        document.getElementById('successMessage').style.display = 'block';
                        e.target.reset();
                        
                        // Revenir à la première étape
                        document.querySelectorAll('.form-step').forEach(step => {
                            step.style.display = 'none';
                        });
                        document.getElementById('step1').style.display = 'block';
                        currentStep = 1;
                        updateProgressBar();

                        window.scrollTo({
                            top: document.getElementById('successMessage').offsetTop - 20,
                            behavior: 'smooth'
                        });

                        setTimeout(() => {
                            document.getElementById('successMessage').style.display = 'none';
                        }, 5000);
                    } else {
                        alert("Erreur lors de l'envoi : " + data);
                    }
                })
                .catch(error => {
                    console.error("Erreur fetch :", error);
                    alert("Une erreur s'est produite. Merci de réessayer plus tard.");
                });
            });
        });
    });
});
</script>

<style>
/* Styles pour le formulaire multi-étapes */
.form-progress {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
    position: relative;
}

.form-progress::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: var(--color-bg-hover);
    z-index: 1;
}

.progress-step {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 25%;
}

.step-number {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: var(--color-bg-hover);
    color: var(--color-text-muted);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-bottom: 8px;
    transition: all var(--transition-normal);
}

.step-label {
    font-size: 0.85rem;
    color: var(--color-text-muted);
    text-align: center;
    transition: all var(--transition-normal);
}

.progress-step.active .step-number {
    background-color: var(--color-primary);
    color: white;
}

.progress-step.active .step-label {
    color: var(--color-primary);
    font-weight: 600;
}

.progress-step.completed .step-number {
    background-color: var(--color-success);
    color: white;
}

/* Mise en page en colonnes pour certains champs */
.form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.form-row .form-group {
    flex: 1;
    margin-bottom: 0;
}

/* Grille pour les cases à cocher */
.checkbox-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    margin-top: 10px;
}

.checkbox-grid div {
    display: flex;
    align-items: flex-start;
}

.checkbox-grid input[type="checkbox"] {
    margin-right: 10px;
    margin-top: 3px;
}

/* Navigation entre les étapes */
.form-navigation {
    display: flex;
    justify-content: center; /* On centre tout */
    gap: 20px; /* Et on met un espace entre les boutons */
    margin-top: 30px;
}


/* Styles pour les boutons */
.btn {
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: 500;
    cursor: pointer;
    transition: all var(--transition-normal);
}

.btn-primary {
    background-color: var(--color-primary);
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: var(--color-primary-dark);
    transform: translateY(-2px);
}

.btn-secondary {
    background-color: transparent;
    color: var(--color-primary);
    border: 1px solid var(--color-primary);
}

.btn-secondary:hover {
    background-color: var(--color-bg-hover);
}

/* Ajustements pour les écrans mobiles */
@media (max-width: 768px) {
    .contact-card {
        flex-direction: column;
    }
    
    .contact-info, .contact-form {
        width: 100%;
    }
    
    .form-row {
        flex-direction: column;
        gap: 10px;
    }
    
    .checkbox-grid {
        grid-template-columns: 1fr;
    }
    
    .form-progress {
        flex-wrap: wrap;
    }
    
    .progress-step {
        width: 50%;
        margin-bottom: 15px;
    }
    
    .progress-step:nth-child(3),
    .progress-step:nth-child(4) {
        margin-bottom: 0;
    }
    
    .form-progress::before {
        display: none;
    }
}
</style>

<?php include 'includes/footer.php'; ?>