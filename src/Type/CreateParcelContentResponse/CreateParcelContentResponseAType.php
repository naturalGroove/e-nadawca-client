<?php

namespace Abryb\ENadawca\Type\CreateParcelContentResponse;

/**
 * Class representing CreateParcelContentResponseAType
 */
class CreateParcelContentResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ParcelContentType[] $parcelContent
     */
    private $parcelContent = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as parcelContent
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ParcelContentType $parcelContent
     */
    public function addToParcelContent(\Abryb\ENadawca\Type\ParcelContentType $parcelContent)
    {
        $this->parcelContent[] = $parcelContent;
        return $this;
    }

    /**
     * isset parcelContent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParcelContent($index)
    {
        return isset($this->parcelContent[$index]);
    }

    /**
     * unset parcelContent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParcelContent($index)
    {
        unset($this->parcelContent[$index]);
    }

    /**
     * Gets as parcelContent
     *
     * @return \Abryb\ENadawca\Type\ParcelContentType[]
     */
    public function getParcelContent()
    {
        return $this->parcelContent;
    }

    /**
     * Sets a new parcelContent
     *
     * @param \Abryb\ENadawca\Type\ParcelContentType[] $parcelContent
     * @return self
     */
    public function setParcelContent(array $parcelContent = null)
    {
        $this->parcelContent = $parcelContent;
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

