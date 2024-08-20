<?php

namespace Abryb\ENadawca\Type\GetKartyResponse;

/**
 * Class representing GetKartyResponseAType
 */
class GetKartyResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\KartaType[] $karta
     */
    protected $karta = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as karta
     *
     * @return self
     * @param \Abryb\ENadawca\Type\KartaType $karta
     */
    public function addToKarta(\Abryb\ENadawca\Type\KartaType $karta)
    {
        $this->karta[] = $karta;
        return $this;
    }

    /**
     * isset karta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKarta($index)
    {
        return isset($this->karta[$index]);
    }

    /**
     * unset karta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKarta($index)
    {
        unset($this->karta[$index]);
    }

    /**
     * Gets as karta
     *
     * @return \Abryb\ENadawca\Type\KartaType[]
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * Sets a new karta
     *
     * @param \Abryb\ENadawca\Type\KartaType[] $karta
     * @return self
     */
    public function setKarta(array $karta = null)
    {
        $this->karta = $karta;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ErrorType $error
     */
    public function addToError(\Abryb\ENadawca\Type\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \Abryb\ENadawca\Type\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Abryb\ENadawca\Type\ErrorType[] $error
     * @return self
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }
}

