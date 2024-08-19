<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PotwierdzenieEDoreczeniaType
 *
 *
 * XSD Type: potwierdzenieEDoreczeniaType
 */
class PotwierdzenieEDoreczeniaType
{
    /**
     * @var string $sposob
     */
    protected $sposob = null;

    /**
     * @var string $kontakt
     */
    protected $kontakt = null;

    /**
     * Gets as sposob
     *
     * @return string
     */
    public function getSposob()
    {
        return $this->sposob;
    }

    /**
     * Sets a new sposob
     *
     * @param string $sposob
     * @return self
     */
    public function setSposob($sposob)
    {
        $this->sposob = $sposob;
        return $this;
    }

    /**
     * Gets as kontakt
     *
     * @return string
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * Sets a new kontakt
     *
     * @param string $kontakt
     * @return self
     */
    public function setKontakt($kontakt)
    {
        $this->kontakt = $kontakt;
        return $this;
    }
}

