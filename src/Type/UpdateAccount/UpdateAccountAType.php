<?php

namespace Abryb\ENadawca\Type\UpdateAccount;

/**
 * Class representing UpdateAccountAType
 */
class UpdateAccountAType
{
    /**
     * @var \Abryb\ENadawca\Type\AccountType $account
     */
    protected $account = null;

    /**
     * Gets as account
     *
     * @return \Abryb\ENadawca\Type\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \Abryb\ENadawca\Type\AccountType $account
     * @return self
     */
    public function setAccount(\Abryb\ENadawca\Type\AccountType $account)
    {
        $this->account = $account;
        return $this;
    }
}

