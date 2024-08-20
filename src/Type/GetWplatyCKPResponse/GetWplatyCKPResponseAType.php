<?php

namespace Abryb\ENadawca\Type\GetWplatyCKPResponse;

/**
 * Class representing GetWplatyCKPResponseAType
 */
class GetWplatyCKPResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\WplataCKPType[] $wplaty
     */
    protected $wplaty = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as wplaty
     *
     * @return self
     * @param \Abryb\ENadawca\Type\WplataCKPType $wplaty
     */
    public function addToWplaty(\Abryb\ENadawca\Type\WplataCKPType $wplaty)
    {
        $this->wplaty[] = $wplaty;
        return $this;
    }

    /**
     * isset wplaty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWplaty($index)
    {
        return isset($this->wplaty[$index]);
    }

    /**
     * unset wplaty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWplaty($index)
    {
        unset($this->wplaty[$index]);
    }

    /**
     * Gets as wplaty
     *
     * @return \Abryb\ENadawca\Type\WplataCKPType[]
     */
    public function getWplaty()
    {
        return $this->wplaty;
    }

    /**
     * Sets a new wplaty
     *
     * @param \Abryb\ENadawca\Type\WplataCKPType[] $wplaty
     * @return self
     */
    public function setWplaty(array $wplaty = null)
    {
        $this->wplaty = $wplaty;
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

