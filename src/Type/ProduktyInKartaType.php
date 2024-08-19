<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ProduktyInKartaType
 *
 *
 * XSD Type: produktyInKartaType
 */
class ProduktyInKartaType
{
    /**
     * @var \Abryb\ENadawca\Type\ProduktInKartaType[] $produktInKarta
     */
    protected $produktInKarta = [
        
    ];

    /**
     * Adds as produktInKarta
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ProduktInKartaType $produktInKarta
     */
    public function addToProduktInKarta(\Abryb\ENadawca\Type\ProduktInKartaType $produktInKarta)
    {
        $this->produktInKarta[] = $produktInKarta;
        return $this;
    }

    /**
     * isset produktInKarta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduktInKarta($index)
    {
        return isset($this->produktInKarta[$index]);
    }

    /**
     * unset produktInKarta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduktInKarta($index)
    {
        unset($this->produktInKarta[$index]);
    }

    /**
     * Gets as produktInKarta
     *
     * @return \Abryb\ENadawca\Type\ProduktInKartaType[]
     */
    public function getProduktInKarta()
    {
        return $this->produktInKarta;
    }

    /**
     * Sets a new produktInKarta
     *
     * @param \Abryb\ENadawca\Type\ProduktInKartaType[] $produktInKarta
     * @return self
     */
    public function setProduktInKarta(array $produktInKarta = null)
    {
        $this->produktInKarta = $produktInKarta;
        return $this;
    }
}

