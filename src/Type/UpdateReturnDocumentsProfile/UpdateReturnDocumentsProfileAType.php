<?php

namespace Abryb\ENadawca\Type\UpdateReturnDocumentsProfile;

/**
 * Class representing UpdateReturnDocumentsProfileAType
 */
class UpdateReturnDocumentsProfileAType
{
    /**
     * @var \Abryb\ENadawca\Type\ReturnDocumentProfileType $profile
     */
    private $profile = null;

    /**
     * Gets as profile
     *
     * @return \Abryb\ENadawca\Type\ReturnDocumentProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \Abryb\ENadawca\Type\ReturnDocumentProfileType $profile
     * @return self
     */
    public function setProfile(\Abryb\ENadawca\Type\ReturnDocumentProfileType $profile)
    {
        $this->profile = $profile;
        return $this;
    }
}

