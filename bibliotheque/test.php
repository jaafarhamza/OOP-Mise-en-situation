
<?php

require_once 'vendor/autoload.php';
use App\Livre;
use App\LivreNumerique;
use App\Roman;
Use App\ManuelScolaire;
// Données simulées
$livres = [
    new Roman("Le Comte de Monte-Cristo", 1844),
    new ManuelScolaire("Mathématiques Terminale", 2018),
    new LivreNumerique("Programmation en PHP", 2021),
    new Roman("Les Misérables", 1862),
    new LivreNumerique("Histoire du web", 2014),
    new ManuelScolaire("Physique-Chimie Seconde", 2010),
];

// 1. Affichage de tous les livres
foreach ($livres as $livre) {
    echo "📚 {$livre->titre} ({$livre->annee}) : " . $livre->consulter() . PHP_EOL;
}

echo PHP_EOL;


// 2. Affichage des livres publiés après une année donnée
$anneeMin = 2015;
echo "📅 Livres publiés après {$anneeMin} :" . PHP_EOL;
foreach ($livres as $livre) {
    if ($livre->annee > $anneeMin) {
        echo "📚 {$livre->titre} ({$livre->annee}) : " . $livre->consulter() . PHP_EOL;
    }
}

// 3. Affichage du nombre total de livres
echo "Total de livres enregistrés : " . Livre::getNombreLivres() . PHP_EOL;

echo PHP_EOL;
