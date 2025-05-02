/**
 * Validation et soumission du formulaire de contact
 */
export const FormValidator = {
    /**
     * Initialise la validation du formulaire
     * @param {string} formId - ID du formulaire à valider
     */
    init(formId) {
        const form = document.getElementById(formId);
        if (!form) return;
        
        form.addEventListener('submit', this.handleSubmit.bind(this));
    },
    
    /**
     * Gère la soumission du formulaire
     * @param {Event} e - Événement de soumission
     */
    handleSubmit(e) {
        e.preventDefault();
        
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
        
        // Valider les champs
        let isValid = true;
        
        if (!this.validateField('name', name, 'Veuillez entrer votre nom complet')) {
            isValid = false;
        }
        
        if (!this.validateEmail(email)) {
            isValid = false;
        }
        
        if (phone && !this.validatePhone(phone)) {
            isValid = false;
        }
        
        if (!this.validateField('subject', subject, 'Veuillez sélectionner un sujet')) {
            isValid = false;
        }
        
        if (!this.validateField('message', message, 'Votre message doit contenir au moins 10 caractères', value => value.length >= 10)) {
            isValid = false;
        }
        
        if (!this.validateField('consent', consent, 'Vous devez accepter que vos données soient utilisées', value => value === true)) {
            isValid = false;
        }
        
        if (!isValid) return;
        
        // Soumettre le formulaire avec reCAPTCHA
        this.submitFormWithRecaptcha(form);
    },
    
    /**
     * Valide un champ générique
     * @param {string} fieldName - Nom du champ
     * @param {*} value - Valeur du champ
     * @param {string} errorMessage - Message d'erreur
     * @param {Function} validationFn - Fonction de validation personnalisée
     * @returns {boolean} - Résultat de la validation
     */
    validateField(fieldName, value, errorMessage, validationFn = value => !!value) {
        if (!validationFn(value)) {
            document.getElementById(`${fieldName}Error`).textContent = errorMessage;
            return false;
        }
        return true;
    },
    
    /**
     * Valide un email
     * @param {string} email - Email à valider
     * @returns {boolean} - Résultat de la validation
     */
    validateEmail(email) {
        const isValid = email && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        if (!isValid) {
            document.getElementById('emailError').textContent = 'Veuillez entrer un email valide';
        }
        return isValid;
    },
    
    /**
     * Valide un numéro de téléphone
     * @param {string} phone - Numéro de téléphone à valider
     * @returns {boolean} - Résultat de la validation
     */
    validatePhone(phone) {
        const isValid = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test(phone);
        if (!isValid) {
            document.getElementById('phoneError').textContent = 'Veuillez entrer un numéro de téléphone valide';
        }
        return isValid;
    },
    
    /**
     * Soumet le formulaire avec vérification reCAPTCHA
     * @param {HTMLFormElement} form - Formulaire à soumettre
     */
    submitFormWithRecaptcha(form) {
        // Vérifier que reCAPTCHA est disponible
        if (typeof grecaptcha === 'undefined') {
            console.error('reCAPTCHA not loaded');
            return;
        }
        
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcMsyErAAAAAPSXvGSGdr0XDs5ourrDtWxZYQrx', {action: 'contact'})
                .then(function(token) {
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
    }
};