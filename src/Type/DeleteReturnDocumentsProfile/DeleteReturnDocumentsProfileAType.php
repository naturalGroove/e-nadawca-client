<?php

namespace Abryb\ENadawca\Type\DeleteReturnDocumentsProfile;

/**
 * Class representing DeleteReturnDocumentsProfileAType
 */
class DeleteReturnDocumentsProfileAType
{
    /**
     * @var int $idProfile
     */
    private $idProfile = null;

    /**
     * Gets as idProfile
     *
     * @return int
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Sets a new idProfile
     *
     * @param int $idProfile
     * @return self
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;
        return $this;
    }
}

