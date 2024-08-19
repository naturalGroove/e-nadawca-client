<?php

namespace Abryb\ENadawca\Type\IsObszarMiastoResponse;

/**
 * Class representing IsObszarMiastoResponseAType
 */
class IsObszarMiastoResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ObszarAdresowyResponseType[] $obszarAdresowy
     */
    private $obszarAdresowy = [
        
    ];

    /**
     * Adds as obszarAdresowy
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ObszarAdresowyResponseType $obszarAdresowy
     */
    public function addToObszarAdresowy(\Abryb\ENadawca\Type\ObszarAdresowyResponseType $obszarAdresowy)
    {
        $this->obszarAdresowy[] = $obszarAdresowy;
        return $this;
    }

    /**
     * isset obszarAdresowy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObszarAdresowy($index)
    {
        return isset($this->obszarAdresowy[$index]);
    }

    /**
     * unset obszarAdresowy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObszarAdresowy($index)
    {
        unset($this->obszarAdresowy[$index]);
    }

    /**
     * Gets as obszarAdresowy
     *
     * @return \Abryb\ENadawca\Type\ObszarAdresowyResponseType[]
     */
    public function getObszarAdresowy()
    {
        return $this->obszarAdresowy;
    }

    /**
     * Sets a new obszarAdresowy
     *
     * @param \Abryb\ENadawca\Type\ObszarAdresowyResponseType[] $obszarAdresowy
     * @return self
     */
    public function setObszarAdresowy(array $obszarAdresowy)
    {
        $this->obszarAdresowy = $obszarAdresowy;
        return $this;
    }
}

