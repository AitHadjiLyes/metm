<?php
/**
 * Page de contact
 */
require_once 'config.php';
require_once 'includes/components.php';

$pageTitle = 'Contact';
include 'includes/header.php';
?>

<main>
    <section class="contact-section">
        <div class="section-title">
            
            <p>Vous avez des questions sur nos produits ou services ? Contactez nous !</p>
        </div>

        <div class="contact-card">
            
            <div class="contact-form">
                <div id="successMessage" class="success-message">
                    Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.
                </div>

                <form id="contactForm" method="POST" action="formulaire.php">
                    <div class="form-group">
                        <label for="name">Nom complet <span>*</span></label>
                        <input type="text" id="name" name="name" class="form-control" required>
                        <div id="nameError" class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <div id="emailError" class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                        <div id="phoneError" class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Sujet <span>*</span></label>
                        <select id="subject" name="subject" class="form-control" required>
                            <option value="" disabled selected>Sélectionnez un sujet</option>
                            <option value="Demande de devis">Demande de devis</option>
                            <option value="Support technique">Support technique</option>
                            <option value="Partenariat">Partenariat</option>
                        </select>
                        <div id="subjectError" class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span>*</span></label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                        <div id="messageError" class="error-message"></div>
                    </div>

                    <div class="form-group">
                        <div class="checkbox-group">
                            <input type="checkbox" id="consent" name="consent" required>
                            <label for="consent">J'accepte que mes données soient utilisées pour répondre à ma demande <span>*</span></label>
                        </div>
                        <div id="consentError" class="error-message"></div>
                    </div>

                    <button type="submit" class="submit-btn">Envoyer le message</button>
                </form>
            </div>
        </div>
    </section>
    <section class="faq-section">
    <div class="faq-container">
        <h3>FAQ - Questions fréquentes</h3>
        
        <?php
        renderFaqItem(
            'Comment obtenir un devis personnalisé ?',
            'Il vous suffit de remplir notre formulaire de demande de devis en ligne. Nous vous répondrons rapidement avec une offre adaptée à vos besoins et à votre volume d\'achat.'
        );
        
        renderFaqItem(
            'Quels types de garanties proposez-vous ?',
            'Tous nos équipements sont couverts par une garantie professionnelle qui protège contre les défauts matériels. Une extension de garantie est également disponible sur demande.'
        );
        
        renderFaqItem(
            'Les ordinateurs sont-ils prêts à l\'emploi à la livraison ?',
            'Oui, chaque appareil est vérifié, nettoyé, configuré et prêt à être utilisé dès réception. Nous pouvons aussi préinstaller certains logiciels selon vos besoins.'
        );
        
        renderFaqItem(
            'Peut-on organiser une livraison sur plusieurs sites ?',
            'Oui, nous proposons des solutions logistiques flexibles. Nous pouvons livrer vos équipements sur un ou plusieurs sites, selon votre organisation interne.'
        );
        
        renderFaqItem(
            'Comment suivre l\'état de ma commande ?',
            'Dès la validation de votre commande, vous recevez un suivi personnalisé par mail avec les différentes étapes de préparation et de livraison.'
        );
        ?>
    </div>
</section>


</main>

<!-- Script reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAPTCHA_SITE_KEY; ?>"></script>

<!-- Script de validation du formulaire -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêche le rechargement

    // Réinitialiser les messages d'erreur
    document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

    // Récupérer les champs
    const form = e.target;
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const phone = form.phone.value.trim();
    const subject = form.subject.value;
    const message = form.message.value.trim();
    const consent = form.consent.checked;

    let isValid = true;

    // Vérifications côté client
    if (!name) {
        document.getElementById('nameError').textContent = 'Veuillez entrer votre nom complet';
        isValid = false;
    }

    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('emailError').textContent = 'Veuillez entrer un email valide';
        isValid = false;
    }

    if (phone && !/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(phone)) {
        document.getElementById('phoneError').textContent = 'Veuillez entrer un numéro de téléphone valide';
        isValid = false;
    }

    if (!subject) {
        document.getElementById('subjectError').textContent = 'Veuillez sélectionner un sujet';
        isValid = false;
    }

    if (!message || message.length < 10) {
        document.getElementById('messageError').textContent = 'Votre message doit contenir au moins 10 caractères';
        isValid = false;
    }

    if (!consent) {
        document.getElementById('consentError').textContent = 'Vous devez accepter que vos données soient utilisées';
        isValid = false;
    }

    if (!isValid) return;

    // Génération du token reCAPTCHA v3
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo RECAPTCHA_SITE_KEY; ?>', {action: 'contact'}).then(function(token) {
            const formData = new FormData(form);
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
                    form.reset();

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
</script>

<?php include 'includes/footer.php'; ?>