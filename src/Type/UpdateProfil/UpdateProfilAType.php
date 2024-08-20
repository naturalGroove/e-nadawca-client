<?php

namespace Abryb\ENadawca\Type\UpdateProfil;

/**
 * Class representing UpdateProfilAType
 */
class UpdateProfilAType
{
    /**
     * @var \Abryb\ENadawca\Type\ProfilType $profil
     */
    protected $profil = null;

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
    public function setProfil(\Abryb\ENadawca\Type\ProfilType $profil)
    {
        $this->profil = $profil;
        return $this;
    }
}

