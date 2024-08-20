<?php

namespace Abryb\ENadawca\Type\GetEPOStatusResponse;

/**
 * Class representing GetEPOStatusResponseAType
 */
class GetEPOStatusResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaEPOType[] $epo
     */
    protected $epo = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as epo
     *
     * @return self
     * @param \Abryb\ENadawca\Type\PrzesylkaEPOType $epo
     */
    public function addToEpo(\Abryb\ENadawca\Type\PrzesylkaEPOType $epo)
    {
        $this->epo[] = $epo;
        return $this;
    }

    /**
     * isset epo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEpo($index)
    {
        return isset($this->epo[$index]);
    }

    /**
     * unset epo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEpo($index)
    {
        unset($this->epo[$index]);
    }

    /**
     * Gets as epo
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaEPOType[]
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Sets a new epo
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaEPOType[] $epo
     * @return self
     */
    public function setEpo(array $epo = null)
    {
        $this->epo = $epo;
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

