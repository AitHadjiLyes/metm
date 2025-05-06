<?php
/**
 * Générateur de plaquette commerciale PDF
 * 
 * Ce script génère une plaquette commerciale professionnelle au format PDF
 * présentant les offres de matériel informatique reconditionné pour les professionnels.
 */

// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Vérification de l'existence de TCPDF
if (!file_exists('tcpdf/tcpdf.php')) {
    echo '<div style="text-align: center; margin: 50px auto; max-width: 600px; font-family: Arial, sans-serif;">';
    echo '<h1 style="color: #e74c3c;">Erreur : TCPDF non installé</h1>';
    echo '<p>La bibliothèque TCPDF n\'est pas installée sur votre serveur.</p>';
    echo '<p>Veuillez d\'abord exécuter le script d\'installation :</p>';
    echo '<p><a href="install-tcpdf.php" style="display: inline-block; background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Installer TCPDF</a></p>';
    echo '</div>';
    exit;
}

// Inclusion de la bibliothèque TCPDF
try {
    require_once('tcpdf/tcpdf.php');
} catch (Exception $e) {
    echo '<div style="text-align: center; margin: 50px auto; max-width: 600px; font-family: Arial, sans-serif;">';
    echo '<h1 style="color: #e74c3c;">Erreur lors du chargement de TCPDF</h1>';
    echo '<p>Message d\'erreur : ' . $e->getMessage() . '</p>';
    echo '<p>Veuillez réinstaller TCPDF :</p>';
    echo '<p><a href="install-tcpdf.php" style="display: inline-block; background-color: #3498db; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Réinstaller TCPDF</a></p>';
    echo '</div>';
    exit;
}

// Classe personnalisée pour la plaquette commerciale
class PlaquetteCommerciale extends TCPDF {
    // En-tête de page
    public function Header() {
        // Logo - Utilisation d'une image existante du site
        if (file_exists('assets/images/METM.png')) {
            $this->Image('assets/images/METM.png', 15, 10, 40, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        }
        
        // Titre de la plaquette
        $this->SetFont('helvetica', 'B', 20);
        $this->SetTextColor(44, 62, 80); // Couleur bleu foncé
        $this->SetY(20);
        $this->Cell(0, 15, 'ÉQUIPEMENTS INFORMATIQUES RECONDITIONNÉS', 0, false, 'R', 0, '', 0, false, 'M', 'M');
        
        // Sous-titre
        $this->SetFont('helvetica', 'I', 12);
        $this->SetTextColor(52, 152, 219); // Couleur bleu clair
        $this->SetY(30);
        $this->Cell(0, 10, 'Solutions professionnelles éco-responsables', 0, false, 'R', 0, '', 0, false, 'M', 'M');
        
        // Ligne de séparation
        $this->SetDrawColor(52, 152, 219);
        $this->Line(15, 40, 195, 40);
    }

    // Pied de page
    public function Footer() {
        // Position à 15 mm du bas
        $this->SetY(-15);
        // Police
        $this->SetFont('helvetica', 'I', 8);
        // Couleur du texte
        $this->SetTextColor(128);
        // Numéro de page
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        
        // Coordonnées de l'entreprise
        $this->SetY(-10);
        $this->Cell(0, 10, 'METM - Matériel Informatique Reconditionné | Tél: 01 23 45 67 89 | Email: contact@metm.fr | www.metm.fr', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// Création d'un nouveau document PDF
$pdf = new PlaquetteCommerciale(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Définition des informations du document
$pdf->SetCreator('METM');
$pdf->SetAuthor('METM');
$pdf->SetTitle('Plaquette Commerciale - Équipements Informatiques Reconditionnés');
$pdf->SetSubject('Offres professionnelles de matériel informatique reconditionné');
$pdf->SetKeywords('reconditionné, informatique, professionnel, entreprise, écologique');

// Définition des marges
$pdf->SetMargins(15, 45, 15);
$pdf->SetHeaderMargin(5);
$pdf->SetFooterMargin(10);

// Définition des sauts de page automatiques
$pdf->SetAutoPageBreak(TRUE, 20);

// Définition du ratio pour les images
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Ajout d'une page
$pdf->AddPage();

// Contenu de la plaquette
$pdf->SetFont('helvetica', 'B', 16);
$pdf->SetTextColor(44, 62, 80);
$pdf->Cell(0, 15, 'NOTRE OFFRE POUR LES PROFESSIONNELS', 0, 1, 'L');

// Introduction
$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(0, 10, 'METM vous propose une gamme complète d\'équipements informatiques reconditionnés de haute qualité pour répondre aux besoins spécifiques de votre entreprise. Nos solutions allient performance, fiabilité et démarche éco-responsable.', 0, 'L', 0, 1);

// Avantages - Section avec icônes
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(52, 152, 219);
$pdf->Cell(0, 10, 'POURQUOI CHOISIR NOS ÉQUIPEMENTS RECONDITIONNÉS ?', 0, 1, 'L');

// Tableau des avantages
$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(0, 0, 0);

// Économies
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, '✓ Économies substantielles', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 11);
$pdf->MultiCell(0, 10, 'Réduisez vos coûts d\'équipement jusqu\'à 50% par rapport au matériel neuf équivalent, tout en bénéficiant d\'un matériel professionnel performant.', 0, 'L', 0, 1);

// Démarche RSE
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, '✓ Démarche RSE valorisable', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 11);
$pdf->MultiCell(0, 10, 'Intégrez le reconditionnement dans votre politique de Responsabilité Sociétale des Entreprises et réduisez votre empreinte carbone. Nous fournissons un certificat d\'impact environnemental pour chaque commande.', 0, 'L', 0, 1);

// Garantie
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, '✓ Garantie professionnelle', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 11);
$pdf->MultiCell(0, 10, 'Tous nos équipements sont garantis 12 mois minimum, avec possibilité d\'extension jusqu\'à 36 mois. Service après-vente réactif avec intervention sur site disponible.', 0, 'L', 0, 1);

// Flexibilité
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, '✓ Flexibilité et personnalisation', 0, 1, 'L');
$pdf->SetFont('helvetica', '', 11);
$pdf->MultiCell(0, 10, 'Adaptez votre commande à vos besoins exacts : volumes variables, configurations personnalisées, installation et déploiement sur mesure.', 0, 'L', 0, 1);

// Ajout d'une nouvelle page
$pdf->AddPage();

// Nos produits
$pdf->SetFont('helvetica', 'B', 16);
$pdf->SetTextColor(44, 62, 80);
$pdf->Cell(0, 15, 'NOS GAMMES DE PRODUITS', 0, 1, 'L');

// Tableau des produits
$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(0, 0, 0);

// Création d'un tableau pour présenter les produits
$html = '
<table cellspacing="0" cellpadding="5" border="1">
    <tr style="background-color:#3498db;color:white;font-weight:bold;">
        <th width="25%">Catégorie</th>
        <th width="50%">Description</th>
        <th width="25%">Avantages</th>
    </tr>
    <tr>
        <td style="font-weight:bold;">PC Portables</td>
        <td>Large gamme de PC portables professionnels reconditionnés (Dell, HP, Lenovo, Apple) adaptés à tous les usages.</td>
        <td>Mobilité, performance, différentes tailles d\'écran</td>
    </tr>
    <tr style="background-color:#f9f9f9;">
        <td style="font-weight:bold;">PC Fixes</td>
        <td>Stations de travail et PC de bureau reconditionnés pour tous les besoins : bureautique, création, développement.</td>
        <td>Puissance, évolutivité, durabilité</td>
    </tr>
    <tr>
        <td style="font-weight:bold;">Écrans</td>
        <td>Moniteurs professionnels de différentes tailles et résolutions pour optimiser votre espace de travail.</td>
        <td>Confort visuel, productivité, multi-écrans</td>
    </tr>
    <tr style="background-color:#f9f9f9;">
        <td style="font-weight:bold;">Serveurs</td>
        <td>Infrastructure IT reconditionnée pour vos besoins de stockage, virtualisation et hébergement.</td>
        <td>Fiabilité, performance, économies</td>
    </tr>
    <tr>
        <td style="font-weight:bold;">Smartphones & Tablettes</td>
        <td>Appareils mobiles reconditionnés pour équiper vos équipes en mobilité (Apple, Samsung, etc.).</td>
        <td>Mobilité, communication, applications métiers</td>
    </tr>
</table>
';

$pdf->writeHTML($html, true, false, true, false, '');

// Cycle de vie - Utilisation d'une image existante
if (file_exists('assets/images/cycledevie.png')) {
    $pdf->Ln(10);
    $pdf->SetFont('helvetica', 'B', 14);
    $pdf->SetTextColor(52, 152, 219);
    $pdf->Cell(0, 10, 'CYCLE DE VIE DE NOS PRODUITS', 0, 1, 'L');
    $pdf->Image('assets/images/cycledevie.png', 15, $pdf->GetY(), 180, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    $pdf->Ln(60); // Espace pour l'image
}

// Services complémentaires
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(52, 152, 219);
$pdf->Cell(0, 10, 'NOS SERVICES COMPLÉMENTAIRES', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(0, 0, 0);

// Liste des services
$services = array(
    'Installation et déploiement sur site',
    'Migration des données et paramétrage',
    'Contrats de maintenance adaptés',
    'Solutions de financement (location, crédit-bail)',
    'Recyclage de votre ancien parc informatique',
    'Formation des utilisateurs'
);

foreach ($services as $service) {
    $pdf->Cell(5, 7, '•', 0, 0);
    $pdf->Cell(0, 7, $service, 0, 1);
}

// Témoignages clients
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(52, 152, 219);
$pdf->Cell(0, 10, 'ILS NOUS FONT CONFIANCE', 0, 1, 'L');

$pdf->SetFont('helvetica', 'I', 11);
$pdf->SetTextColor(0, 0, 0);

// Premier témoignage
$pdf->MultiCell(0, 10, '"Grâce à METM, nous avons équipé nos 50 collaborateurs avec des ordinateurs portables reconditionnés de qualité professionnelle, réalisant une économie de 40% par rapport à du matériel neuf. Le service de déploiement a été impeccable."', 0, 'L', 0, 1);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 5, 'Marie Dupont, DSI - Cabinet d\'architectes Bâtir Demain', 0, 1, 'R');

$pdf->Ln(5);

// Deuxième témoignage
$pdf->SetFont('helvetica', 'I', 11);
$pdf->MultiCell(0, 10, '"En tant que PME engagée dans une démarche RSE, le choix du matériel reconditionné s\'imposait. METM nous a accompagnés dans cette transition avec professionnalisme. Matériel impeccable et support réactif."', 0, 'L', 0, 1);
$pdf->SetFont('helvetica', 'B', 10);
$pdf->Cell(0, 5, 'Thomas Martin, Gérant - Agence de communication EcoCréative', 0, 1, 'R');

// Ajout d'une nouvelle page pour le formulaire de contact
$pdf->AddPage();

// Contact et demande de devis
$pdf->SetFont('helvetica', 'B', 16);
$pdf->SetTextColor(44, 62, 80);
$pdf->Cell(0, 15, 'DEMANDEZ VOTRE DEVIS PERSONNALISÉ', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(0, 10, 'Nos experts sont à votre disposition pour étudier vos besoins et vous proposer une solution sur mesure. Contactez-nous dès maintenant pour bénéficier d\'un accompagnement personnalisé.', 0, 'L', 0, 1);

// Informations de contact
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'Comment nous contacter ?', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 11);

// Tableau des contacts
$html = '
<table cellspacing="0" cellpadding="5" border="0">
    <tr>
        <td width="30%"><strong>Par téléphone :</strong></td>
        <td width="70%">01 23 45 67 89 (du lundi au vendredi, 9h-18h)</td>
    </tr>
    <tr>
        <td><strong>Par email :</strong></td>
        <td>commercial@metm.fr</td>
    </tr>
    <tr>
        <td><strong>Sur notre site :</strong></td>
        <td>www.metm.fr/pro</td>
    </tr>
    <tr>
        <td><strong>À notre showroom :</strong></td>
        <td>123 Avenue de l\'Informatique, 75000 Paris<br>(sur rendez-vous)</td>
    </tr>
</table>
';

$pdf->writeHTML($html, true, false, true, false, '');

// Formulaire de demande de rappel (visuel)
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'Formulaire de demande de rappel', 0, 1, 'L');

// Création d'un cadre pour simuler un formulaire
$pdf->SetDrawColor(52, 152, 219);
$pdf->SetLineWidth(0.5);
$pdf->Rect(15, $pdf->GetY(), 180, 60);

$pdf->SetFont('helvetica', '', 10);
$pdf->Ln(5);
$pdf->Cell(0, 10, 'Nom de l\'entreprise : ________________________________', 0, 1, 'L');
$pdf->Cell(0, 10, 'Nom et prénom : ____________________________________', 0, 1, 'L');
$pdf->Cell(0, 10, 'Téléphone : _________________________________________', 0, 1, 'L');
$pdf->Cell(0, 10, 'Email : ______________________________________________', 0, 1, 'L');

// Note de bas de formulaire
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'I', 8);
$pdf->MultiCell(0, 10, 'Note : Ce formulaire est une représentation visuelle. Pour une demande de rappel, veuillez utiliser le formulaire en ligne sur notre site www.metm.fr/contact ou nous contacter directement.', 0, 'L', 0, 1);

// Engagement qualité
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(52, 152, 219);
$pdf->Cell(0, 10, 'NOTRE ENGAGEMENT QUALITÉ', 0, 1, 'L');

$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(0, 0, 0);
$pdf->MultiCell(0, 10, 'Tous nos équipements reconditionnés suivent un processus rigoureux de contrôle qualité en 7 étapes, garantissant des performances optimales et une fiabilité à toute épreuve. Chaque appareil est livré avec un certificat de reconditionnement détaillant les tests effectués.', 0, 'L', 0, 1);

// Génération du PDF
if(isset($_GET['download']) && $_GET['download'] == 'true') {
    // Sortie du PDF pour téléchargement
    $pdf->Output('Plaquette_Commerciale_METM.pdf', 'D');
} else {
    // Affichage du PDF dans le navigateur
    $pdf->Output('Plaquette_Commerciale_METM.pdf', 'I');
}
?>
