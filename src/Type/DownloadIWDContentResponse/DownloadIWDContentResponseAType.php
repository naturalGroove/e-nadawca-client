<?php

namespace Abryb\ENadawca\Type\DownloadIWDContentResponse;

/**
 * Class representing DownloadIWDContentResponseAType
 */
class DownloadIWDContentResponseAType
{
    /**
     * @var string $iWDContent
     */
    protected $iWDContent = null;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Gets as iWDContent
     *
     * @return string
     */
    public function getIWDContent()
    {
        return $this->iWDContent;
    }

    /**
     * Sets a new iWDContent
     *
     * @param string $iWDContent
     * @return self
     */
    public function setIWDContent($iWDContent)
    {
        $this->iWDContent = $iWDContent;
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

