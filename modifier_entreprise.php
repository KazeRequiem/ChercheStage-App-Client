<?php
require_once 'init.php';

// Données dynamiques pour l'entreprise
$company = [
    'name' => 'Thales',
    'location' => 'Maubeuge',
    'email' => 'poulet@maillot.com',
    'number' => '07 34 54 23 43',
    'description' => 'Le cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliquéLe cesi est tres impliqué',
];

// Rendre le template avec Twig
echo $twig->render('modifier_entreprise.html.twig', [
    'company' => $company,
]);