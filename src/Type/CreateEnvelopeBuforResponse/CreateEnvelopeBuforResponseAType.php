<?php

namespace Abryb\ENadawca\Type\CreateEnvelopeBuforResponse;

/**
 * Class representing CreateEnvelopeBuforResponseAType
 */
class CreateEnvelopeBuforResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\BuforType[] $createdBufor
     */
    private $createdBufor = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as createdBufor
     *
     * @return self
     * @param \Abryb\ENadawca\Type\BuforType $createdBufor
     */
    public function addToCreatedBufor(\Abryb\ENadawca\Type\BuforType $createdBufor)
    {
        $this->createdBufor[] = $createdBufor;
        return $this;
    }

    /**
     * isset createdBufor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreatedBufor($index)
    {
        return isset($this->createdBufor[$index]);
    }

    /**
     * unset createdBufor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreatedBufor($index)
    {
        unset($this->createdBufor[$index]);
    }

    /**
     * Gets as createdBufor
     *
     * @return \Abryb\ENadawca\Type\BuforType[]
     */
    public function getCreatedBufor()
    {
        return $this->createdBufor;
    }

    /**
     * Sets a new createdBufor
     *
     * @param \Abryb\ENadawca\Type\BuforType[] $createdBufor
     * @return self
     */
    public function setCreatedBufor(array $createdBufor = null)
    {
        $this->createdBufor = $createdBufor;
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

