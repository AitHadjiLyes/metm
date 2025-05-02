<?php
/**
 * Traitement du formulaire de contact et du formulaire professionnel
 * 
 * Ce script gère la soumission des formulaires et l'envoi d'email via PHPMailer
 */
require_once 'config.php';

// Affichage des erreurs pour le debug (à désactiver en production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Chargement de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';

// Constantes pour la configuration de l'email
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'aithadji.lyes@gmail.com');
define('SMTP_PASSWORD', 'sals xlxm ewxt pkbl');
define('SMTP_PORT', 587);
define('RECAPTCHA_SECRET', '6LcMsyErAAAAAADcPgJEsCKR_FFHK2xDkzouEqxZ');

/**
 * Valide les données du formulaire de contact standard
 * 
 * @param array $data Données du formulaire
 * @return array Tableau des erreurs (vide si aucune erreur)
 */
function validateFormData($data) {
    $errors = [];
    
    // Vérification des champs requis
    if (empty($data['name'])) {
        $errors['name'] = 'Le nom est requis';
    }
    
    if (empty($data['email'])) {
        $errors['email'] = 'L\'email est requis';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Adresse email invalide';
    }
    
    if (empty($data['subject'])) {
        $errors['subject'] = 'Le sujet est requis';
    }
    
    if (empty($data['message'])) {
        $errors['message'] = 'Le message est requis';
    } elseif (strlen($data['message']) < 10) {
        $errors['message'] = 'Le message doit contenir au moins 10 caractères';
    }
    
    return $errors;
}

/**
 * Valide les données du formulaire professionnel
 * 
 * @param array $data Données du formulaire
 * @return array Tableau des erreurs (vide si aucune erreur)
 */
function validateProFormData($data) {
    $errors = [];
    
    // Vérification des champs requis pour le formulaire professionnel
    if (empty($data['company_name'])) {
        $errors['company_name'] = 'Le nom de l\'entreprise est requis';
    }
    
    if (empty($data['company_size'])) {
        $errors['company_size'] = 'La taille de l\'entreprise est requise';
    }
    
    if (empty($data['industry'])) {
        $errors['industry'] = 'Le secteur d\'activité est requis';
    }
    
    if (empty($data['contact_name'])) {
        $errors['contact_name'] = 'Le nom du contact est requis';
    }
    
    if (empty($data['job_title'])) {
        $errors['job_title'] = 'La fonction est requise';
    }
    
    if (empty($data['email'])) {
        $errors['email'] = 'L\'email est requis';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Adresse email invalide';
    }
    
    if (empty($data['phone'])) {
        $errors['phone'] = 'Le téléphone est requis';
    }
    
    if (empty($data['equipment_type'])) {
        $errors['equipment_type'] = 'Au moins un type d\'équipement doit être sélectionné';
    }
    
    if (empty($data['quantity'])) {
        $errors['quantity'] = 'La quantité approximative est requise';
    }
    
    if (empty($data['timeframe'])) {
        $errors['timeframe'] = 'Le délai souhaité est requis';
    }
    
    return $errors;
}

/**
 * Vérifie le token reCAPTCHA
 * 
 * @param string $token Token reCAPTCHA
 * @return bool Résultat de la vérification
 */
function verifyRecaptcha($token) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => RECAPTCHA_SECRET,
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data)
        ]
    ];
    
    $context = stream_context_create($options);
    $recaptcha_response = file_get_contents($recaptcha_url, false, $context);
    $recaptcha_result = json_decode($recaptcha_response, true);
    
    return ($recaptcha_result['success'] && $recaptcha_result['score'] >= 0.5);
}

/**
 * Envoie l'email via PHPMailer
 * 
 * @param array $data Données du formulaire
 * @param string $subject Sujet de l'email
 * @param string $body Corps de l'email
 * @return bool Résultat de l'envoi
 */
function sendEmail($data, $subject, $body) {
    $mail = new PHPMailer(true);
    
    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = 'tls';
        $mail->Port = SMTP_PORT;
        
        // Expéditeur et destinataire
        $mail->setFrom(SMTP_USERNAME, SITE_NAME);
        $mail->addAddress(CONTACT_EMAIL);
        $mail->addReplyTo($data['email'], $data['name'] ?? $data['contact_name'] ?? 'Contact');
        
        // Contenu de l'email
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        // Envoi de l'email
        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Erreur d'envoi d'email: " . $mail->ErrorInfo);
        return false;
    }
}

// Traitement principal
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération du type de formulaire
    $formType = $_POST['form_type'] ?? 'contact';
    
    if ($formType === 'professional') {
        // Traitement du formulaire professionnel
        
        // Récupération et nettoyage des données
        $formData = [
            'company_name' => htmlspecialchars(trim($_POST['company_name'] ?? '')),
            'company_size' => htmlspecialchars(trim($_POST['company_size'] ?? '')),
            'industry' => htmlspecialchars(trim($_POST['industry'] ?? '')),
            'contact_name' => htmlspecialchars(trim($_POST['contact_name'] ?? '')),
            'job_title' => htmlspecialchars(trim($_POST['job_title'] ?? '')),
            'email' => htmlspecialchars(trim($_POST['email'] ?? '')),
            'phone' => htmlspecialchars(trim($_POST['phone'] ?? '')),
            'equipment_type' => $_POST['equipment_type'] ?? [],
            'quantity' => htmlspecialchars(trim($_POST['quantity'] ?? '')),
            'budget' => htmlspecialchars(trim($_POST['budget'] ?? '')),
            'timeframe' => htmlspecialchars(trim($_POST['timeframe'] ?? '')),
            'specifications' => htmlspecialchars(trim($_POST['specifications'] ?? '')),
            'additional_services' => $_POST['additional_services'] ?? [],
            'additional_info' => htmlspecialchars(trim($_POST['additional_info'] ?? '')),
            'newsletter' => isset($_POST['newsletter']) ? true : false
        ];
        
        // Validation des données
        $errors = validateProFormData($formData);
        
        // Vérification reCAPTCHA si pas d'erreurs de validation
        if (empty($errors)) {
            $recaptcha_token = $_POST['recaptcha_token'] ?? '';
            
            if (empty($recaptcha_token) || !verifyRecaptcha($recaptcha_token)) {
                echo "Erreur : reCAPTCHA a détecté une activité suspecte.";
                exit;
            }
            
            // Préparation du corps de l'email
            $subject = "Demande de devis professionnel : " . $formData['company_name'];
            
            $equipmentTypes = is_array($formData['equipment_type']) ? implode(', ', $formData['equipment_type']) : $formData['equipment_type'];
            $additionalServices = is_array($formData['additional_services']) ? implode(', ', $formData['additional_services']) : $formData['additional_services'];
            
            $emailBody = "DEMANDE DE DEVIS PROFESSIONNEL\n\n";
            $emailBody .= "INFORMATIONS ENTREPRISE\n";
            $emailBody .= "Nom de l'entreprise : " . $formData['company_name'] . "\n";
            $emailBody .= "Taille de l'entreprise : " . $formData['company_size'] . "\n";
            $emailBody .= "Secteur d'activité : " . $formData['industry'] . "\n\n";
            
            $emailBody .= "CONTACT\n";
            $emailBody .= "Nom : " . $formData['contact_name'] . "\n";
            $emailBody .= "Fonction : " . $formData['job_title'] . "\n";
            $emailBody .= "Email : " . $formData['email'] . "\n";
            $emailBody .= "Téléphone : " . $formData['phone'] . "\n\n";
            
            $emailBody .= "BESOINS EN ÉQUIPEMENT\n";
            $emailBody .= "Types d'équipement : " . $equipmentTypes . "\n";
            $emailBody .= "Quantité approximative : " . $formData['quantity'] . "\n";
            $emailBody .= "Budget estimé : " . $formData['budget'] . "\n";
            $emailBody .= "Délai souhaité : " . $formData['timeframe'] . "\n";
            $emailBody .= "Spécifications techniques : " . $formData['specifications'] . "\n";
            $emailBody .= "Services complémentaires : " . $additionalServices . "\n\n";
            
            $emailBody .= "Informations complémentaires : " . $formData['additional_info'] . "\n\n";
            
            $emailBody .= "Newsletter : " . ($formData['newsletter'] ? "Oui" : "Non") . "\n";
            
            // Envoi de l'email
            if (sendEmail($formData, $subject, $emailBody)) {
                echo "Message envoyé avec succès.";
            } else {
                echo "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
            }
        } else {
            // Affichage des erreurs
            echo "Erreurs de validation :\n";
            foreach ($errors as $field => $error) {
                echo "- $error\n";
            }
        }
    } else {
        // Traitement du formulaire de contact standard
        
        // Récupération et nettoyage des données
        $formData = [
            'name' => htmlspecialchars(trim($_POST['name'] ?? '')),
            'email' => htmlspecialchars(trim($_POST['email'] ?? '')),
            'phone' => htmlspecialchars(trim($_POST['phone'] ?? '')),
            'subject' => htmlspecialchars(trim($_POST['subject'] ?? '')),
            'message' => htmlspecialchars(trim($_POST['message'] ?? '')),
        ];
        
        $recaptcha_token = $_POST['recaptcha_token'] ?? '';
        
        // Validation des données
        $errors = validateFormData($formData);
        
        // Vérification reCAPTCHA si pas d'erreurs de validation
        if (empty($errors)) {
            if (empty($recaptcha_token) || !verifyRecaptcha($recaptcha_token)) {
                echo "Erreur : reCAPTCHA a détecté une activité suspecte.";
                exit;
            }
            
            // Préparation du corps de l'email
            $subject = "Formulaire de contact : " . $formData['subject'];
            
            $emailBody = "Nom : " . $formData['name'] . "\n";
            $emailBody .= "Email : " . $formData['email'] . "\n";
            $emailBody .= "Téléphone : " . $formData['phone'] . "\n";
            $emailBody .= "Sujet : " . $formData['subject'] . "\n\n";
            $emailBody .= "Message :\n" . $formData['message'] . "\n";
            
            // Envoi de l'email
            if (sendEmail($formData, $subject, $emailBody)) {
                echo "Message envoyé avec succès.";
            } else {
                echo "Erreur lors de l'envoi du message. Veuillez réessayer plus tard.";
            }
        } else {
            // Affichage des erreurs
            echo "Erreurs de validation :\n";
            foreach ($errors as $field => $error) {
                echo "- $error\n";
            }
        }
    }
} else {
    // Redirection si accès direct
    header('Location: contact.php');
    exit;
}