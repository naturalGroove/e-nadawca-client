<?php

namespace Abryb\ENadawca\Type\CreateProfil;

/**
 * Class representing CreateProfilAType
 */
class CreateProfilAType
{
    /**
     * @var \Abryb\ENadawca\Type\ProfilType $profil
     */
    private $profil = null;

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

