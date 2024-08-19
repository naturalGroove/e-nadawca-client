<?php

namespace Abryb\ENadawca\Type\CreateAccount;

/**
 * Class representing CreateAccountAType
 */
class CreateAccountAType
{
    /**
     * @var \Abryb\ENadawca\Type\AccountType $account
     */
    private $account = null;

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

