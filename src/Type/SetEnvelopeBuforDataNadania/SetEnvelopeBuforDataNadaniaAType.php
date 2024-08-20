<?php

namespace Abryb\ENadawca\Type\SetEnvelopeBuforDataNadania;

/**
 * Class representing SetEnvelopeBuforDataNadaniaAType
 */
class SetEnvelopeBuforDataNadaniaAType
{
    /**
     * @var \DateTime $dataNadania
     */
    protected $dataNadania = null;

    /**
     * Gets as dataNadania
     *
     * @return \DateTime
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Sets a new dataNadania
     *
     * @param \DateTime $dataNadania
     * @return self
     */
    public function setDataNadania(\DateTime $dataNadania)
    {
        $this->dataNadania = $dataNadania;
        return $this;
    }
}

