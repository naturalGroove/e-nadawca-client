<?php

namespace Abryb\ENadawca\Type\ChangePassword;

/**
 * Class representing ChangePasswordAType
 */
class ChangePasswordAType
{
    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * Gets as newPassword
     *
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Sets a new newPassword
     *
     * @param string $newPassword
     * @return self
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }
}

