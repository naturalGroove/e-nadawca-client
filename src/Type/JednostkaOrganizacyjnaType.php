<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing JednostkaOrganizacyjnaType
 *
 *
 * XSD Type: jednostkaOrganizacyjnaType
 */
class JednostkaOrganizacyjnaType
{
    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $nazwa
     */
    protected $nazwa = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var string $mpk
     */
    protected $mpk = null;

    /**
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
     *
     * @var \Abryb\ENadawca\Type\AccountType[] $account
     */
    protected $account = [
        
    ];

    /**
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
     *
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     */
    protected $jednostkaNadrzedna = null;

    /**
     * @var string[] $rodzajPrzypisania
     */
    protected $rodzajPrzypisania = [
        
    ];

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Sets a new nazwa
     *
     * @param string $nazwa
     * @return self
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;
        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }

    /**
     * Gets as mpk
     *
     * @return string
     */
    public function getMpk()
    {
        return $this->mpk;
    }

    /**
     * Sets a new mpk
     *
     * @param string $mpk
     * @return self
     */
    public function setMpk($mpk)
    {
        $this->mpk = $mpk;
        return $this;
    }

    /**
     * Adds as account
     *
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
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
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
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
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
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
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
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
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
     *
     * @param \Abryb\ENadawca\Type\AccountType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as jednostkaNadrzedna
     *
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType
     */
    public function getJednostkaNadrzedna()
    {
        return $this->jednostkaNadrzedna;
    }

    /**
     * Sets a new jednostkaNadrzedna
     *
     * Wystarczy przesłać obiekt z ustawionym
     *  id reszta pól może zostać pominięta (aby
     *  zmniejszyć ilość danych do transmisji)
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna
     * @return self
     */
    public function setJednostkaNadrzedna(?\Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaNadrzedna = null)
    {
        $this->jednostkaNadrzedna = $jednostkaNadrzedna;
        return $this;
    }

    /**
     * Adds as rodzajPrzypisania
     *
     * @return self
     * @param string $rodzajPrzypisania
     */
    public function addToRodzajPrzypisania($rodzajPrzypisania)
    {
        $this->rodzajPrzypisania[] = $rodzajPrzypisania;
        return $this;
    }

    /**
     * isset rodzajPrzypisania
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRodzajPrzypisania($index)
    {
        return isset($this->rodzajPrzypisania[$index]);
    }

    /**
     * unset rodzajPrzypisania
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRodzajPrzypisania($index)
    {
        unset($this->rodzajPrzypisania[$index]);
    }

    /**
     * Gets as rodzajPrzypisania
     *
     * @return string[]
     */
    public function getRodzajPrzypisania()
    {
        return $this->rodzajPrzypisania;
    }

    /**
     * Sets a new rodzajPrzypisania
     *
     * @param string $rodzajPrzypisania
     * @return self
     */
    public function setRodzajPrzypisania(array $rodzajPrzypisania = null)
    {
        $this->rodzajPrzypisania = $rodzajPrzypisania;
        return $this;
    }
}

