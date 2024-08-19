<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing GodzinyPracyType
 *
 *
 * XSD Type: godzinyPracyType
 */
class GodzinyPracyType
{
    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $poniedzialek
     */
    protected $poniedzialek = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $wtorek
     */
    protected $wtorek = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $sroda
     */
    protected $sroda = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $czwartek
     */
    protected $czwartek = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $piatek
     */
    protected $piatek = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $sobota
     */
    protected $sobota = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $niedziela
     */
    protected $niedziela = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $robocze
     */
    protected $robocze = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $swieta
     */
    protected $swieta = [
        
    ];

    /**
     * Adds as poniedzialek
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $poniedzialek
     */
    public function addToPoniedzialek(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $poniedzialek)
    {
        $this->poniedzialek[] = $poniedzialek;
        return $this;
    }

    /**
     * isset poniedzialek
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPoniedzialek($index)
    {
        return isset($this->poniedzialek[$index]);
    }

    /**
     * unset poniedzialek
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPoniedzialek($index)
    {
        unset($this->poniedzialek[$index]);
    }

    /**
     * Gets as poniedzialek
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getPoniedzialek()
    {
        return $this->poniedzialek;
    }

    /**
     * Sets a new poniedzialek
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $poniedzialek
     * @return self
     */
    public function setPoniedzialek(array $poniedzialek = null)
    {
        $this->poniedzialek = $poniedzialek;
        return $this;
    }

    /**
     * Adds as wtorek
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $wtorek
     */
    public function addToWtorek(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $wtorek)
    {
        $this->wtorek[] = $wtorek;
        return $this;
    }

    /**
     * isset wtorek
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWtorek($index)
    {
        return isset($this->wtorek[$index]);
    }

    /**
     * unset wtorek
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWtorek($index)
    {
        unset($this->wtorek[$index]);
    }

    /**
     * Gets as wtorek
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getWtorek()
    {
        return $this->wtorek;
    }

    /**
     * Sets a new wtorek
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $wtorek
     * @return self
     */
    public function setWtorek(array $wtorek = null)
    {
        $this->wtorek = $wtorek;
        return $this;
    }

    /**
     * Adds as sroda
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $sroda
     */
    public function addToSroda(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $sroda)
    {
        $this->sroda[] = $sroda;
        return $this;
    }

    /**
     * isset sroda
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSroda($index)
    {
        return isset($this->sroda[$index]);
    }

    /**
     * unset sroda
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSroda($index)
    {
        unset($this->sroda[$index]);
    }

    /**
     * Gets as sroda
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getSroda()
    {
        return $this->sroda;
    }

    /**
     * Sets a new sroda
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $sroda
     * @return self
     */
    public function setSroda(array $sroda = null)
    {
        $this->sroda = $sroda;
        return $this;
    }

    /**
     * Adds as czwartek
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $czwartek
     */
    public function addToCzwartek(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $czwartek)
    {
        $this->czwartek[] = $czwartek;
        return $this;
    }

    /**
     * isset czwartek
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCzwartek($index)
    {
        return isset($this->czwartek[$index]);
    }

    /**
     * unset czwartek
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCzwartek($index)
    {
        unset($this->czwartek[$index]);
    }

    /**
     * Gets as czwartek
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getCzwartek()
    {
        return $this->czwartek;
    }

    /**
     * Sets a new czwartek
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $czwartek
     * @return self
     */
    public function setCzwartek(array $czwartek = null)
    {
        $this->czwartek = $czwartek;
        return $this;
    }

    /**
     * Adds as piatek
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $piatek
     */
    public function addToPiatek(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $piatek)
    {
        $this->piatek[] = $piatek;
        return $this;
    }

    /**
     * isset piatek
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPiatek($index)
    {
        return isset($this->piatek[$index]);
    }

    /**
     * unset piatek
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPiatek($index)
    {
        unset($this->piatek[$index]);
    }

    /**
     * Gets as piatek
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getPiatek()
    {
        return $this->piatek;
    }

    /**
     * Sets a new piatek
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $piatek
     * @return self
     */
    public function setPiatek(array $piatek = null)
    {
        $this->piatek = $piatek;
        return $this;
    }

    /**
     * Adds as sobota
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $sobota
     */
    public function addToSobota(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $sobota)
    {
        $this->sobota[] = $sobota;
        return $this;
    }

    /**
     * isset sobota
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSobota($index)
    {
        return isset($this->sobota[$index]);
    }

    /**
     * unset sobota
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSobota($index)
    {
        unset($this->sobota[$index]);
    }

    /**
     * Gets as sobota
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getSobota()
    {
        return $this->sobota;
    }

    /**
     * Sets a new sobota
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $sobota
     * @return self
     */
    public function setSobota(array $sobota = null)
    {
        $this->sobota = $sobota;
        return $this;
    }

    /**
     * Adds as niedziela
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $niedziela
     */
    public function addToNiedziela(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $niedziela)
    {
        $this->niedziela[] = $niedziela;
        return $this;
    }

    /**
     * isset niedziela
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNiedziela($index)
    {
        return isset($this->niedziela[$index]);
    }

    /**
     * unset niedziela
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNiedziela($index)
    {
        unset($this->niedziela[$index]);
    }

    /**
     * Gets as niedziela
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getNiedziela()
    {
        return $this->niedziela;
    }

    /**
     * Sets a new niedziela
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $niedziela
     * @return self
     */
    public function setNiedziela(array $niedziela = null)
    {
        $this->niedziela = $niedziela;
        return $this;
    }

    /**
     * Adds as robocze
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $robocze
     */
    public function addToRobocze(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $robocze)
    {
        $this->robocze[] = $robocze;
        return $this;
    }

    /**
     * isset robocze
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRobocze($index)
    {
        return isset($this->robocze[$index]);
    }

    /**
     * unset robocze
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRobocze($index)
    {
        unset($this->robocze[$index]);
    }

    /**
     * Gets as robocze
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getRobocze()
    {
        return $this->robocze;
    }

    /**
     * Sets a new robocze
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $robocze
     * @return self
     */
    public function setRobocze(array $robocze = null)
    {
        $this->robocze = $robocze;
        return $this;
    }

    /**
     * Adds as swieta
     *
     * @return self
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType $swieta
     */
    public function addToSwieta(\Abryb\ENadawca\Type\GodzinyPracyOdDoType $swieta)
    {
        $this->swieta[] = $swieta;
        return $this;
    }

    /**
     * isset swieta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSwieta($index)
    {
        return isset($this->swieta[$index]);
    }

    /**
     * unset swieta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSwieta($index)
    {
        unset($this->swieta[$index]);
    }

    /**
     * Gets as swieta
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyOdDoType[]
     */
    public function getSwieta()
    {
        return $this->swieta;
    }

    /**
     * Sets a new swieta
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyOdDoType[] $swieta
     * @return self
     */
    public function setSwieta(array $swieta = null)
    {
        $this->swieta = $swieta;
        return $this;
    }
}

