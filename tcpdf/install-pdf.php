<?php
/**
 * Script d'installation du PDF de la plaquette commerciale
 * 
 * Ce script vérifie si le dossier assets/pdf existe et crée le dossier si nécessaire.
 * Il permet également de télécharger une nouvelle version de la plaquette commerciale.
 */

// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Chemin du dossier PDF
$pdfDir = 'assets/pdf';
$pdfFile = $pdfDir . '/plaquette-commerciale.pdf';

// Vérifier si le dossier existe, sinon le créer
if (!is_dir($pdfDir)) {
    if (!mkdir($pdfDir, 0755, true)) {
        die("Erreur : Impossible de créer le dossier $pdfDir");
    }
    echo "<p>Dossier $pdfDir créé avec succès.</p>";
}

// Traitement du formulaire d'upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf_file'])) {
    $uploadedFile = $_FILES['pdf_file'];
    
    // Vérifier s'il y a des erreurs
    if ($uploadedFile['error'] !== UPLOAD_ERR_OK) {
        $errorMessage = "Erreur lors du téléchargement du fichier.";
        switch ($uploadedFile['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $errorMessage = "Le fichier est trop volumineux.";
                break;
            case UPLOAD_ERR_PARTIAL:
                $errorMessage = "Le fichier n'a été que partiellement téléchargé.";
                break;
            case UPLOAD_ERR_NO_FILE:
                $errorMessage = "Aucun fichier n'a été téléchargé.";
                break;
        }
        die($errorMessage);
    }
    
    // Vérifier le type de fichier
    $fileType = mime_content_type($uploadedFile['tmp_name']);
    if ($fileType !== 'application/pdf') {
        die("Erreur : Le fichier doit être au format PDF.");
    }
    
    // Déplacer le fichier téléchargé
    if (move_uploaded_file($uploadedFile['tmp_name'], $pdfFile)) {
        $successMessage = "La plaquette commerciale a été mise à jour avec succès.";
    } else {
        die("Erreur : Impossible de déplacer le fichier téléchargé.");
    }
}

// Vérifier si le fichier PDF existe
$pdfExists = file_exists($pdfFile);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation de la plaquette commerciale</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .container {
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .status {
            padding: 15px;
            margin: 15px 0;
            border-radius: 4px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .warning {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="file"] {
            margin-bottom: 15px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
        .preview {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Installation de la plaquette commerciale</h1>
        
        <?php if (isset($successMessage)): ?>
            <div class="status success">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
        
        <?php if ($pdfExists): ?>
            <div class="status success">
                <p>✅ La plaquette commerciale est correctement installée.</p>
                <p>Fichier : <?php echo $pdfFile; ?></p>
                <p>Taille : <?php echo round(filesize($pdfFile) / 1024, 2); ?> Ko</p>
                <p>Dernière modification : <?php echo date("d/m/Y H:i:s", filemtime($pdfFile)); ?></p>
            </div>
        <?php else: ?>
            <div class="status warning">
                <p>⚠️ La plaquette commerciale n'est pas encore installée.</p>
                <p>Veuillez télécharger un fichier PDF ci-dessous.</p>
            </div>
        <?php endif; ?>
        
        <form action="" method="post" enctype="multipart/form-data">
            <label for="pdf_file">Télécharger une nouvelle plaquette commerciale (PDF) :</label>
            <input type="file" name="pdf_file" id="pdf_file" accept="application/pdf" required>
            <button type="submit">Télécharger</button>
        </form>
        
        <?php if ($pdfExists): ?>
            <div class="preview">
                <h2>Aperçu de la plaquette</h2>
                <p><a href="<?php echo $pdfFile; ?>" target="_blank">Ouvrir la plaquette commerciale</a></p>
                <embed src="<?php echo $pdfFile; ?>" type="application/pdf" width="100%" height="500px">
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
