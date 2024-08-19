<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaRejestrowanaType
 *
 *
 * XSD Type: przesylkaRejestrowanaType
 */
class PrzesylkaRejestrowanaType extends PrzesylkaType
{
    /**
     * @var string $numerNadania
     */
    protected $numerNadania = null;

    /**
     * @var string $sygnatura
     */
    protected $sygnatura = null;

    /**
     * @var string $terminSprawy
     */
    protected $terminSprawy = null;

    /**
     * @var string $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var bool $weryfikacjaPlatnosci
     */
    protected $weryfikacjaPlatnosci = null;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adres
     */
    protected $adres = null;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $nadawca
     */
    protected $nadawca = null;

    /**
     * @var \Abryb\ENadawca\Type\RelatedToAllegroType $relatedToAllegro
     */
    protected $relatedToAllegro = null;

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;
        return $this;
    }

    /**
     * Gets as sygnatura
     *
     * @return string
     */
    public function getSygnatura()
    {
        return $this->sygnatura;
    }

    /**
     * Sets a new sygnatura
     *
     * @param string $sygnatura
     * @return self
     */
    public function setSygnatura($sygnatura)
    {
        $this->sygnatura = $sygnatura;
        return $this;
    }

    /**
     * Gets as terminSprawy
     *
     * @return string
     */
    public function getTerminSprawy()
    {
        return $this->terminSprawy;
    }

    /**
     * Sets a new terminSprawy
     *
     * @param string $terminSprawy
     * @return self
     */
    public function setTerminSprawy($terminSprawy)
    {
        $this->terminSprawy = $terminSprawy;
        return $this;
    }

    /**
     * Gets as rodzaj
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Sets a new rodzaj
     *
     * @param string $rodzaj
     * @return self
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;
        return $this;
    }

    /**
     * Gets as weryfikacjaPlatnosci
     *
     * @return bool
     */
    public function getWeryfikacjaPlatnosci()
    {
        return $this->weryfikacjaPlatnosci;
    }

    /**
     * Sets a new weryfikacjaPlatnosci
     *
     * @param bool $weryfikacjaPlatnosci
     * @return self
     */
    public function setWeryfikacjaPlatnosci($weryfikacjaPlatnosci)
    {
        $this->weryfikacjaPlatnosci = $weryfikacjaPlatnosci;
        return $this;
    }

    /**
     * Gets as adres
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \Abryb\ENadawca\Type\AdresType $adres
     * @return self
     */
    public function setAdres(?\Abryb\ENadawca\Type\AdresType $adres = null)
    {
        $this->adres = $adres;
        return $this;
    }

    /**
     * Gets as nadawca
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getNadawca()
    {
        return $this->nadawca;
    }

    /**
     * Sets a new nadawca
     *
     * @param \Abryb\ENadawca\Type\AdresType $nadawca
     * @return self
     */
    public function setNadawca(?\Abryb\ENadawca\Type\AdresType $nadawca = null)
    {
        $this->nadawca = $nadawca;
        return $this;
    }

    /**
     * Gets as relatedToAllegro
     *
     * @return \Abryb\ENadawca\Type\RelatedToAllegroType
     */
    public function getRelatedToAllegro()
    {
        return $this->relatedToAllegro;
    }

    /**
     * Sets a new relatedToAllegro
     *
     * @param \Abryb\ENadawca\Type\RelatedToAllegroType $relatedToAllegro
     * @return self
     */
    public function setRelatedToAllegro(?\Abryb\ENadawca\Type\RelatedToAllegroType $relatedToAllegro = null)
    {
        $this->relatedToAllegro = $relatedToAllegro;
        return $this;
    }
}

