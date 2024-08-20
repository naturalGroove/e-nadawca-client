<?php

namespace Abryb\ENadawca\Type\AddZalacznikDoReklamacji;

/**
 * Class representing AddZalacznikDoReklamacjiAType
 */
class AddZalacznikDoReklamacjiAType
{
    /**
     * @var string $idReklamacja
     */
    protected $idReklamacja = null;

    /**
     * @var \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType[] $zalacznik
     */
    protected $zalacznik = [
        
    ];

    /**
     * Gets as idReklamacja
     *
     * @return string
     */
    public function getIdReklamacja()
    {
        return $this->idReklamacja;
    }

    /**
     * Sets a new idReklamacja
     *
     * @param string $idReklamacja
     * @return self
     */
    public function setIdReklamacja($idReklamacja)
    {
        $this->idReklamacja = $idReklamacja;
        return $this;
    }

    /**
     * Adds as zalacznik
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType $zalacznik
     */
    public function addToZalacznik(\Abryb\ENadawca\Type\ZalacznikDoReklamacjiType $zalacznik)
    {
        $this->zalacznik[] = $zalacznik;
        return $this;
    }

    /**
     * isset zalacznik
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZalacznik($index)
    {
        return isset($this->zalacznik[$index]);
    }

    /**
     * unset zalacznik
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZalacznik($index)
    {
        unset($this->zalacznik[$index]);
    }

    /**
     * Gets as zalacznik
     *
     * @return \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType[]
     */
    public function getZalacznik()
    {
        return $this->zalacznik;
    }

    /**
     * Sets a new zalacznik
     *
     * @param \Abryb\ENadawca\Type\ZalacznikDoReklamacjiType[] $zalacznik
     * @return self
     */
    public function setZalacznik(array $zalacznik)
    {
        $this->zalacznik = $zalacznik;
        return $this;
    }
}

