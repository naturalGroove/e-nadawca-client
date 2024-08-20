<?php

namespace Abryb\ENadawca\Type\AddOdwolanieDoReklamacjiResponse;

/**
 * Class representing AddOdwolanieDoReklamacjiResponseAType
 */
class AddOdwolanieDoReklamacjiResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ReklamacjaInfoType[] $reklamacjaInfo
     */
    protected $reklamacjaInfo = [
        
    ];

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

    /**
     * Adds as reklamacjaInfo
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ReklamacjaInfoType $reklamacjaInfo
     */
    public function addToReklamacjaInfo(\Abryb\ENadawca\Type\ReklamacjaInfoType $reklamacjaInfo)
    {
        $this->reklamacjaInfo[] = $reklamacjaInfo;
        return $this;
    }

    /**
     * isset reklamacjaInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReklamacjaInfo($index)
    {
        return isset($this->reklamacjaInfo[$index]);
    }

    /**
     * unset reklamacjaInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReklamacjaInfo($index)
    {
        unset($this->reklamacjaInfo[$index]);
    }

    /**
     * Gets as reklamacjaInfo
     *
     * @return \Abryb\ENadawca\Type\ReklamacjaInfoType[]
     */
    public function getReklamacjaInfo()
    {
        return $this->reklamacjaInfo;
    }

    /**
     * Sets a new reklamacjaInfo
     *
     * @param \Abryb\ENadawca\Type\ReklamacjaInfoType[] $reklamacjaInfo
     * @return self
     */
    public function setReklamacjaInfo(array $reklamacjaInfo = null)
    {
        $this->reklamacjaInfo = $reklamacjaInfo;
        return $this;
    }
}

