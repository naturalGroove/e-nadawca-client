<?php

namespace Abryb\ENadawca\Type\GetLibrariesForLegalDepositsResponse;

/**
 * Class representing GetLibrariesForLegalDepositsResponseAType
 */
class GetLibrariesForLegalDepositsResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\LibraryForLegalDepositType[] $libraryForLegalDeposit
     */
    private $libraryForLegalDeposit = [
        
    ];

    /**
     * Adds as libraryForLegalDeposit
     *
     * @return self
     * @param \Abryb\ENadawca\Type\LibraryForLegalDepositType $libraryForLegalDeposit
     */
    public function addToLibraryForLegalDeposit(\Abryb\ENadawca\Type\LibraryForLegalDepositType $libraryForLegalDeposit)
    {
        $this->libraryForLegalDeposit[] = $libraryForLegalDeposit;
        return $this;
    }

    /**
     * isset libraryForLegalDeposit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLibraryForLegalDeposit($index)
    {
        return isset($this->libraryForLegalDeposit[$index]);
    }

    /**
     * unset libraryForLegalDeposit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLibraryForLegalDeposit($index)
    {
        unset($this->libraryForLegalDeposit[$index]);
    }

    /**
     * Gets as libraryForLegalDeposit
     *
     * @return \Abryb\ENadawca\Type\LibraryForLegalDepositType[]
     */
    public function getLibraryForLegalDeposit()
    {
        return $this->libraryForLegalDeposit;
    }

    /**
     * Sets a new libraryForLegalDeposit
     *
     * @param \Abryb\ENadawca\Type\LibraryForLegalDepositType[] $libraryForLegalDeposit
     * @return self
     */
    public function setLibraryForLegalDeposit(array $libraryForLegalDeposit = null)
    {
        $this->libraryForLegalDeposit = $libraryForLegalDeposit;
        return $this;
    }
}

