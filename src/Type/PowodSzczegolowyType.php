<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PowodSzczegolowyType
 *
 *
 * XSD Type: powodSzczegolowyType
 */
class PowodSzczegolowyType
{
    /**
     * @var int $idPowodSzczegolowy
     */
    protected $idPowodSzczegolowy = null;

    /**
     * @var string $powodSzczegolowyOpis
     */
    protected $powodSzczegolowyOpis = null;

    /**
     * Gets as idPowodSzczegolowy
     *
     * @return int
     */
    public function getIdPowodSzczegolowy()
    {
        return $this->idPowodSzczegolowy;
    }

    /**
     * Sets a new idPowodSzczegolowy
     *
     * @param int $idPowodSzczegolowy
     * @return self
     */
    public function setIdPowodSzczegolowy($idPowodSzczegolowy)
    {
        $this->idPowodSzczegolowy = $idPowodSzczegolowy;
        return $this;
    }

    /**
     * Gets as powodSzczegolowyOpis
     *
     * @return string
     */
    public function getPowodSzczegolowyOpis()
    {
        return $this->powodSzczegolowyOpis;
    }

    /**
     * Sets a new powodSzczegolowyOpis
     *
     * @param string $powodSzczegolowyOpis
     * @return self
     */
    public function setPowodSzczegolowyOpis($powodSzczegolowyOpis)
    {
        $this->powodSzczegolowyOpis = $powodSzczegolowyOpis;
        return $this;
    }
}

