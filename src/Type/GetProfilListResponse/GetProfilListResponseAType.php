<?php

namespace Abryb\ENadawca\Type\GetProfilListResponse;

/**
 * Class representing GetProfilListResponseAType
 */
class GetProfilListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ProfilType[] $profil
     */
    protected $profil = [
        
    ];

    /**
     * Adds as profil
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ProfilType $profil
     */
    public function addToProfil(\Abryb\ENadawca\Type\ProfilType $profil)
    {
        $this->profil[] = $profil;
        return $this;
    }

    /**
     * isset profil
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfil($index)
    {
        return isset($this->profil[$index]);
    }

    /**
     * unset profil
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfil($index)
    {
        unset($this->profil[$index]);
    }

    /**
     * Gets as profil
     *
     * @return \Abryb\ENadawca\Type\ProfilType[]
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Sets a new profil
     *
     * @param \Abryb\ENadawca\Type\ProfilType[] $profil
     * @return self
     */
    public function setProfil(array $profil)
    {
        $this->profil = $profil;
        return $this;
    }
}

