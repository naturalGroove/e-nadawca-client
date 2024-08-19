<?php

namespace Abryb\ENadawca\Type\GetPrintForParcel;

/**
 * Class representing GetPrintForParcelAType
 */
class GetPrintForParcelAType
{
    /**
     * parcels guids
     *
     * @var string[] $guid
     */
    private $guid = [
        
    ];

    /**
     * printout type
     *
     * @var \Abryb\ENadawca\Type\PrintType $type
     */
    private $type = null;

    /**
     * Adds as guid
     *
     * parcels guids
     *
     * @return self
     * @param string $guid
     */
    public function addToGuid($guid)
    {
        $this->guid[] = $guid;
        return $this;
    }

    /**
     * isset guid
     *
     * parcels guids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuid($index)
    {
        return isset($this->guid[$index]);
    }

    /**
     * unset guid
     *
     * parcels guids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuid($index)
    {
        unset($this->guid[$index]);
    }

    /**
     * Gets as guid
     *
     * parcels guids
     *
     * @return string[]
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * parcels guids
     *
     * @param string $guid
     * @return self
     */
    public function setGuid(array $guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Gets as type
     *
     * printout type
     *
     * @return \Abryb\ENadawca\Type\PrintType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * printout type
     *
     * @param \Abryb\ENadawca\Type\PrintType $type
     * @return self
     */
    public function setType(\Abryb\ENadawca\Type\PrintType $type)
    {
        $this->type = $type;
        return $this;
    }
}

