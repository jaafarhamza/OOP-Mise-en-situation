<?php
namespace App;

abstract class Livre{
    protected string $titre;
    protected int $annee;

    protected static $compteur = 0;

    function __construct(string $titre, int $annee){
        $this->titre=$titre;
        $this->annee=$annee;

        self::$compteur++;
    }

    abstract function consulter(): string;

    static function getNombreLivres(): int{
        return self::$compteur;
    }
}

