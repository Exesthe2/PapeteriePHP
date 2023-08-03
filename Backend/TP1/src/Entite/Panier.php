<?php

namespace App\Entite;
class Panier extends Collection
{
    private Collection|null $lignes;
    private float $montant;

    /**
     * @param Collection|null $lignes
     * @param float $montant
     */
    public function __construct(Collection $lignes = new Collection(), float $montant = 0)
    {
        $this->lignes = $lignes;
        $this->montant = $montant;
    }

    /**
     * @param Ligne $ligne
     * @return $this
     */
    public function addLigne(Ligne $ligne): self
    {
        $this->lignes->append($ligne);
        return $this;
    }

    public function removeLigne(Ligne $ligne): self
    {
        $this->lignes->remove($ligne);
        return $this;
    }

    /**
     * @return Collection|null
     */
    public function getLignes(): ?Collection
    {
        return $this->lignes;
    }

    /**
     * @return float
     */
    public function getMontant(): float
    {
        return $this->montant;
    }

    /**
     * @param float $montant
     */
    public function setMontant(float $montant): void
    {
        $this->montant = $montant;
    }
}