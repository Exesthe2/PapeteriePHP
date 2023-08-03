<?php

namespace App\Entite;

class Stylo extends Article
{
    private string $couleur;

    /**
     * @param string $couleur
     */
    public function __construct(string $marque, string $reference, string $designation, float $prixUnitaire, int $qteStock, string $couleur, int $idArticle = null)
    {
        parent::__construct($marque, $reference, $designation, $prixUnitaire, $qteStock, $idArticle);
        $this->couleur = $couleur;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }
}