<?php

namespace Abryb\ENadawca\Type\DeleteParcelContent;

/**
 * Class representing DeleteParcelContentAType
 */
class DeleteParcelContentAType
{
    /**
     * @var \Abryb\ENadawca\Type\ParcelContentType[] $parcelContent
     */
    protected $parcelContent = [
        
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
    public function setParcelContent(array $parcelContent)
    {
        $this->parcelContent = $parcelContent;
        return $this;
    }
}

