<?php
/**
 * Script d'installation de TCPDF
 * 
 * Ce script télécharge et installe la bibliothèque TCPDF dans votre projet
 */

// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Vérifier si l'extension ZipArchive est disponible
if (!class_exists('ZipArchive')) {
    die('<div style="text-align: center; margin: 50px auto; max-width: 600px; font-family: Arial, sans-serif;">
        <h1 style="color: #e74c3c;">Erreur : Extension ZipArchive manquante</h1>
        <p>L\'extension PHP ZipArchive est requise pour installer TCPDF.</p>
        <p>Veuillez contacter votre administrateur système pour l\'activer.</p>
        </div>');
}

// Vérifier si les fonctions de téléchargement sont disponibles
if (!function_exists('file_get_contents') || !function_exists('file_put_contents')) {
    die('<div style="text-align: center; margin: 50px auto; max-width: 600px; font-family: Arial, sans-serif;">
        <h1 style="color: #e74c3c;">Erreur : Fonctions de téléchargement non disponibles</h1>
        <p>Les fonctions file_get_contents et file_put_contents sont requises.</p>
        <p>Veuillez contacter votre administrateur système.</p>
        </div>');
}

echo '<div style="text-align: center; margin: 50px auto; max-width: 600px; font-family: Arial, sans-serif;">';
echo '<h1 style="color: #3498db;">Installation de TCPDF</h1>';

// Création du dossier tcpdf s'il n'existe pas
if (!file_exists('tcpdf')) {
    if (mkdir('tcpdf', 0755, true)) {
        echo '<p>✅ Dossier tcpdf créé avec succès.</p>';
    } else {
        echo '<p style="color: #e74c3c;">❌ Impossible de créer le dossier tcpdf. Vérifiez les permissions.</p>';
        die('</div>');
    }
} else {
    echo '<p>ℹ️ Le dossier tcpdf existe déjà.</p>';
}

// URL de téléchargement de TCPDF
$tcpdfUrl = 'https://github.com/tecnickcom/TCPDF/archive/refs/tags/6.6.2.zip';
$zipFile = 'tcpdf.zip';

// Téléchargement du fichier ZIP
echo '<p>⏳ Téléchargement de TCPDF...</p>';
try {
    $fileContent = @file_get_contents($tcpdfUrl);
    if ($fileContent === false) {
        throw new Exception("Impossible de télécharger le fichier depuis $tcpdfUrl");
    }
    
    if (file_put_contents($zipFile, $fileContent) === false) {
        throw new Exception("Impossible d'enregistrer le fichier téléchargé");
    }
    
    echo '<p>✅ Téléchargement terminé.</p>';
    
    // Extraction du ZIP
    $zip = new ZipArchive;
    if ($zip->open($zipFile) === TRUE) {
        echo '<p>⏳ Extraction des fichiers...</p>';
        if (!$zip->extractTo('./')) {
            throw new Exception("Erreur lors de l'extraction des fichiers");
        }
        $zip->close();
        echo '<p>✅ Extraction terminée.</p>';
        
        // Vérifier si le dossier extrait existe
        if (!file_exists('TCPDF-6.6.2')) {
            throw new Exception("Le dossier TCPDF-6.6.2 n'a pas été créé après l'extraction");
        }
        
        // Déplacement des fichiers
        echo '<p>⏳ Installation des fichiers...</p>';
        
        // Méthode alternative pour copier les fichiers
        if (!file_exists('TCPDF-6.6.2/tcpdf.php')) {
            throw new Exception("Le fichier tcpdf.php n'existe pas dans le dossier extrait");
        }
        
        // Copier directement les fichiers essentiels
        if (!copy('TCPDF-6.6.2/tcpdf.php', 'tcpdf/tcpdf.php')) {
            throw new Exception("Impossible de copier tcpdf.php");
        }
        
        // Créer les dossiers nécessaires
        $folders = ['config', 'include', 'fonts'];
        foreach ($folders as $folder) {
            if (!file_exists('tcpdf/' . $folder)) {
                if (!mkdir('tcpdf/' . $folder, 0755, true)) {
                    throw new Exception("Impossible de créer le dossier tcpdf/$folder");
                }
            }
        }
        
        // Copier les fichiers de configuration
        if (file_exists('TCPDF-6.6.2/config/tcpdf_config.php')) {
            if (!copy('TCPDF-6.6.2/config/tcpdf_config.php', 'tcpdf/config/tcpdf_config.php')) {
                throw new Exception("Impossible de copier le fichier de configuration");
            }
        } else {
            throw new Exception("Le fichier de configuration n'existe pas");
        }
        
        // Copier les polices essentielles
        $fonts = ['helvetica.php', 'times.php', 'courier.php'];
        foreach ($fonts as $font) {
            if (file_exists('TCPDF-6.6.2/fonts/' . $font)) {
                if (!copy('TCPDF-6.6.2/fonts/' . $font, 'tcpdf/fonts/' . $font)) {
                    throw new Exception("Impossible de copier la police $font");
                }
            }
        }
        
        // Copier les fichiers include essentiels
        if (file_exists('TCPDF-6.6.2/include/tcpdf_fonts.php')) {
            if (!copy('TCPDF-6.6.2/include/tcpdf_fonts.php', 'tcpdf/include/tcpdf_fonts.php')) {
                throw new Exception("Impossible de copier tcpdf_fonts.php");
            }
        }
        
        if (file_exists('TCPDF-6.6.2/include/tcpdf_colors.php')) {
            if (!copy('TCPDF-6.6.2/include/tcpdf_colors.php', 'tcpdf/include/tcpdf_colors.php')) {
                throw new Exception("Impossible de copier tcpdf_colors.php");
            }
        }
        
        if (file_exists('TCPDF-6.6.2/include/tcpdf_images.php')) {
            if (!copy('TCPDF-6.6.2/include/tcpdf_images.php', 'tcpdf/include/tcpdf_images.php')) {
                throw new Exception("Impossible de copier tcpdf_images.php");
            }
        }
        
        if (file_exists('TCPDF-6.6.2/include/tcpdf_static.php')) {
            if (!copy('TCPDF-6.6.2/include/tcpdf_static.php', 'tcpdf/include/tcpdf_static.php')) {
                throw new Exception("Impossible de copier tcpdf_static.php");
            }
        }
        
        // Nettoyage
        delete_directory('TCPDF-6.6.2');
        unlink($zipFile);
        
        echo '<p>✅ Installation terminée avec succès!</p>';
        echo '<p><a href="plaquette-commerciale.php" style="display: inline-block; background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Générer la plaquette commerciale</a></p>';
    } else {
        throw new Exception("Erreur lors de l'ouverture du fichier ZIP");
    }
} catch (Exception $e) {
    echo '<p style="color: #e74c3c;">❌ Erreur : ' . $e->getMessage() . '</p>';
    echo '<p>Veuillez essayer d\'installer TCPDF manuellement :</p>';
    echo '<ol>';
    echo '<li>Téléchargez TCPDF depuis <a href="https://github.com/tecnickcom/TCPDF/releases" target="_blank">GitHub</a></li>';
    echo '<li>Extrayez le contenu</li>';
    echo '<li>Créez un dossier "tcpdf" à la racine de votre site</li>';
    echo '<li>Copiez le fichier tcpdf.php et les dossiers config, include et fonts dans ce dossier</li>';
    echo '</ol>';
}

echo '</div>';

// Fonction pour supprimer un répertoire
function delete_directory($dir) {
    if (!file_exists($dir)) {
        return true;
    }
    if (!is_dir($dir)) {
        return unlink($dir);
    }
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
        if (!delete_directory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }
    return rmdir($dir);
}
?>
