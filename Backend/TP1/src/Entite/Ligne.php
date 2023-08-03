<?php

namespace App\Entite;

class Ligne extends Article
{
    private Article $article;
    private int $qte;

    /**
     * @param Article $article
     * @param int $qte
     */
    public function __construct(Article $article, int $qte)
    {
        $this->article = $article;
        $this->qte = $qte;
    }

    /**
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->article;
    }

    /**
     * @param Article $article
     */
    public function setArticle(Article $article): void
    {
        $this->article = $article;
    }

    /**
     * @return int
     */
    public function getQte(): int
    {
        return $this->qte;
    }

    /**
     * @param int $qte
     */
    public function setQte(int $qte): void
    {
        $this->qte = $qte;
    }
}