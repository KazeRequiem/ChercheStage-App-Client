<?php
require_once 'check_session.php';
checkRole(2); // Nécessite permission admin (2)

require_once 'init.php';

// Données pour les statistiques
$stats = [
    [
        'icon' => 'assets/User.png',
        'color' => 'orange',
        'doubleIcon' => true,
        'value' => 26,
        'label' => 'Taux de réponse entreprises',
        'changeValue' => '+4',
        'changePercent' => '+15% cette semaine',
        'changeType' => 'positive',
    ],
    [
        'icon' => 'assets/Fichier.png',
        'color' => 'vert',
        'value' => 4,
        'label' => 'Nombres d\'offres sur le site',
        'changeValue' => '-',
        'changePercent' => '0% cette semaine',
        'changeType' => 'neutral',
    ],
    [
        'icon' => 'assets/Enveloppe.png',
        'color' => 'rouge',
        'value' => 36,
        'label' => 'Nombre d\'étudiants placés',
        'changeValue' => '-23',
        'changePercent' => '-39% cette semaine',
        'changeType' => 'negative',
    ],
];

// Rendre le template avec Twig
echo $twig->render('accueil_admin.html.twig', [
    'stats' => $stats,
    'user' => getUserInfo(),
    'homePage' => $_SESSION['user']['homePage'] ?? 'connexion.php',
]);