<?php

namespace Abryb\ENadawca\Type\MoveShipmentsResponse;

/**
 * Class representing MoveShipmentsResponseAType
 */
class MoveShipmentsResponseAType
{
    /**
     * @var string[] $notMovedGuid
     */
    private $notMovedGuid = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as notMovedGuid
     *
     * @return self
     * @param string $notMovedGuid
     */
    public function addToNotMovedGuid($notMovedGuid)
    {
        $this->notMovedGuid[] = $notMovedGuid;
        return $this;
    }

    /**
     * isset notMovedGuid
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotMovedGuid($index)
    {
        return isset($this->notMovedGuid[$index]);
    }

    /**
     * unset notMovedGuid
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotMovedGuid($index)
    {
        unset($this->notMovedGuid[$index]);
    }

    /**
     * Gets as notMovedGuid
     *
     * @return string[]
     */
    public function getNotMovedGuid()
    {
        return $this->notMovedGuid;
    }

    /**
     * Sets a new notMovedGuid
     *
     * @param string $notMovedGuid
     * @return self
     */
    public function setNotMovedGuid(array $notMovedGuid = null)
    {
        $this->notMovedGuid = $notMovedGuid;
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

