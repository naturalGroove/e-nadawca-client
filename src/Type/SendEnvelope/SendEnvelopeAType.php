<?php

namespace Abryb\ENadawca\Type\SendEnvelope;

/**
 * Class representing SendEnvelopeAType
 */
class SendEnvelopeAType
{
    /**
     * @var int $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var \Abryb\ENadawca\Type\PakietType[] $pakiet
     */
    protected $pakiet = [
        
    ];

    /**
     * @var int $idBufor
     */
    protected $idBufor = null;

    /**
     * @var \Abryb\ENadawca\Type\ProfilType $profil
     */
    protected $profil = null;

    /**
     * Gets as urzadNadania
     *
     * @return int
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Sets a new urzadNadania
     *
     * @param int $urzadNadania
     * @return self
     */
    public function setUrzadNadania($urzadNadania)
    {
        $this->urzadNadania = $urzadNadania;
        return $this;
    }

    /**
     * Adds as pakiet
     *
     * @return self
     * @param \Abryb\ENadawca\Type\PakietType $pakiet
     */
    public function addToPakiet(\Abryb\ENadawca\Type\PakietType $pakiet)
    {
        $this->pakiet[] = $pakiet;
        return $this;
    }

    /**
     * isset pakiet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPakiet($index)
    {
        return isset($this->pakiet[$index]);
    }

    /**
     * unset pakiet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPakiet($index)
    {
        unset($this->pakiet[$index]);
    }

    /**
     * Gets as pakiet
     *
     * @return \Abryb\ENadawca\Type\PakietType[]
     */
    public function getPakiet()
    {
        return $this->pakiet;
    }

    /**
     * Sets a new pakiet
     *
     * @param \Abryb\ENadawca\Type\PakietType[] $pakiet
     * @return self
     */
    public function setPakiet(array $pakiet = null)
    {
        $this->pakiet = $pakiet;
        return $this;
    }

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;
        return $this;
    }

    /**
     * Gets as profil
     *
     * @return \Abryb\ENadawca\Type\ProfilType
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Sets a new profil
     *
     * @param \Abryb\ENadawca\Type\ProfilType $profil
     * @return self
     */
    public function setProfil(?\Abryb\ENadawca\Type\ProfilType $profil = null)
    {
        $this->profil = $profil;
        return $this;
    }
}

