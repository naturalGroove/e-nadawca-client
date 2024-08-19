<?php

namespace Abryb\ENadawca\Type\GetAccountListResponse;

/**
 * Class representing GetAccountListResponseAType
 */
class GetAccountListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\AccountType[] $account
     */
    private $account = [
        
    ];

    /**
     * Adds as account
     *
     * @return self
     * @param \Abryb\ENadawca\Type\AccountType $account
     */
    public function addToAccount(\Abryb\ENadawca\Type\AccountType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * @return \Abryb\ENadawca\Type\AccountType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \Abryb\ENadawca\Type\AccountType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }
}

