<?php

namespace Abryb\ENadawca\Type\IsObszarMiasto;

/**
 * Class representing IsObszarMiastoAType
 */
class IsObszarMiastoAType
{
    /**
     * @var \Abryb\ENadawca\Type\ObszarAdresowyType[] $adres
     */
    protected $adres = [
        
    ];

    /**
     * Adds as adres
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ObszarAdresowyType $adres
     */
    public function addToAdres(\Abryb\ENadawca\Type\ObszarAdresowyType $adres)
    {
        $this->adres[] = $adres;
        return $this;
    }

    /**
     * isset adres
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdres($index)
    {
        return isset($this->adres[$index]);
    }

    /**
     * unset adres
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdres($index)
    {
        unset($this->adres[$index]);
    }

    /**
     * Gets as adres
     *
     * @return \Abryb\ENadawca\Type\ObszarAdresowyType[]
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \Abryb\ENadawca\Type\ObszarAdresowyType[] $adres
     * @return self
     */
    public function setAdres(array $adres)
    {
        $this->adres = $adres;
        return $this;
    }
}

