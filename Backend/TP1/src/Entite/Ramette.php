<?php

namespace App\Entite;
class Ramette extends Article
{
    private int $grammage;

    /**
     * @param int $grammage
     */
    public function __construct(string $marque, string $reference, string $designation, float $prixUnitaire, int $qteStock, int $grammage, int $idArticle = null)
    {
        parent::__construct($marque, $reference, $designation, $prixUnitaire, $qteStock, $idArticle);
        $this->grammage = $grammage;
    }

    /**
     * @return int
     */
    public function getGrammage(): int
    {
        return $this->grammage;
    }

    /**
     * @param int $grammage
     */
    public function setGrammage(int $grammage): void
    {
        $this->grammage = $grammage;
    }
}