
<?php
require_once 'includes/components.php';

$timelineItems = [
    [
        'date' => 'Étape 1',
        'title' => 'Analyse des besoins',
        'text' => 'Évaluation détaillée de vos besoins en équipement informatique.'
    ],
    [
        'date' => 'Étape 2',
        'title' => 'Proposition personnalisée',
        'text' => 'Élaboration d\'une solution sur mesure adaptée à votre budget.'
    ],
    [
        'date' => 'Étape 3',
        'title' => 'Validation technique',
        'text' => 'Tests approfondis et validation des configurations proposées.'
    ],
    [
        'date' => 'Étape 4',
        'title' => 'Déploiement',
        'text' => 'Installation et mise en service de votre équipement.'
    ]
];

renderTimeline($timelineItems);
?>
