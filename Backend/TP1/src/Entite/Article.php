<?php

namespace App\Entite;

class Article
{
    private string $marque;
    private string $reference;
    private string $designation;
    private float $prixUnitaire;
    private int $qteStock;
    private int|null $idArticle;

    /**
     * @param string $marque
     * @param string $reference
     * @param string $designation
     * @param float $prixUnitaire
     * @param int $qteStock
     * @param int|null $idArticle
     */
    public function __construct(string $marque, string $reference, string $designation, float $prixUnitaire, int $qteStock, ?int $idArticle)
    {
        $this->marque = $marque;
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prixUnitaire = $prixUnitaire;
        $this->qteStock = $qteStock;
        $this->idArticle = $idArticle;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getDesignation(): string
    {
        return $this->designation;
    }

    /**
     * @param string $designation
     */
    public function setDesignation(string $designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @return float
     */
    public function getPrixUnitaire(): float
    {
        return $this->prixUnitaire;
    }

    /**
     * @param float $prixUnitaire
     */
    public function setPrixUnitaire(float $prixUnitaire): void
    {
        $this->prixUnitaire = $prixUnitaire;
    }

    /**
     * @return int
     */
    public function getQteStock(): int
    {
        return $this->qteStock;
    }

    /**
     * @param int $qteStock
     */
    public function setQteStock(int $qteStock): void
    {
        $this->qteStock = $qteStock;
    }
}