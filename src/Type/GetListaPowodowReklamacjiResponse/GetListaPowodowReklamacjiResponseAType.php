<?php

namespace Abryb\ENadawca\Type\GetListaPowodowReklamacjiResponse;

/**
 * Class representing GetListaPowodowReklamacjiResponseAType
 */
class GetListaPowodowReklamacjiResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     */
    private $kategoriePowodowReklamacji = [
        
    ];

    /**
     * Adds as kategoriePowodowReklamacji
     *
     * @return self
     * @param \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType $kategoriePowodowReklamacji
     */
    public function addToKategoriePowodowReklamacji(\Abryb\ENadawca\Type\KategoriePowodowReklamacjiType $kategoriePowodowReklamacji)
    {
        $this->kategoriePowodowReklamacji[] = $kategoriePowodowReklamacji;
        return $this;
    }

    /**
     * isset kategoriePowodowReklamacji
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKategoriePowodowReklamacji($index)
    {
        return isset($this->kategoriePowodowReklamacji[$index]);
    }

    /**
     * unset kategoriePowodowReklamacji
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKategoriePowodowReklamacji($index)
    {
        unset($this->kategoriePowodowReklamacji[$index]);
    }

    /**
     * Gets as kategoriePowodowReklamacji
     *
     * @return \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType[]
     */
    public function getKategoriePowodowReklamacji()
    {
        return $this->kategoriePowodowReklamacji;
    }

    /**
     * Sets a new kategoriePowodowReklamacji
     *
     * @param \Abryb\ENadawca\Type\KategoriePowodowReklamacjiType[] $kategoriePowodowReklamacji
     * @return self
     */
    public function setKategoriePowodowReklamacji(array $kategoriePowodowReklamacji)
    {
        $this->kategoriePowodowReklamacji = $kategoriePowodowReklamacji;
        return $this;
    }
}

