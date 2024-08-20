<?php

namespace Abryb\ENadawca\Type\GetBlankietPobraniaByGuidsResponse;

/**
 * Class representing GetBlankietPobraniaByGuidsResponseAType
 */
class GetBlankietPobraniaByGuidsResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\AddressLabelContentType[] $content
     */
    protected $content = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as content
     *
     * @return self
     * @param \Abryb\ENadawca\Type\AddressLabelContentType $content
     */
    public function addToContent(\Abryb\ENadawca\Type\AddressLabelContentType $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * @return \Abryb\ENadawca\Type\AddressLabelContentType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param \Abryb\ENadawca\Type\AddressLabelContentType[] $content
     * @return self
     */
    public function setContent(array $content = null)
    {
        $this->content = $content;
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

