<?php

namespace Abryb\ENadawca\Type\GetZapowiedziFakturResponse;

/**
 * Class representing GetZapowiedziFakturResponseAType
 */
class GetZapowiedziFakturResponseAType
{
    /**
     * @var string[] $zapowiedzFakturyZipFile
     */
    private $zapowiedzFakturyZipFile = [
        
    ];

    /**
     * Adds as zapowiedzFakturyZipFile
     *
     * @return self
     * @param string $zapowiedzFakturyZipFile
     */
    public function addToZapowiedzFakturyZipFile($zapowiedzFakturyZipFile)
    {
        $this->zapowiedzFakturyZipFile[] = $zapowiedzFakturyZipFile;
        return $this;
    }

    /**
     * isset zapowiedzFakturyZipFile
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZapowiedzFakturyZipFile($index)
    {
        return isset($this->zapowiedzFakturyZipFile[$index]);
    }

    /**
     * unset zapowiedzFakturyZipFile
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZapowiedzFakturyZipFile($index)
    {
        unset($this->zapowiedzFakturyZipFile[$index]);
    }

    /**
     * Gets as zapowiedzFakturyZipFile
     *
     * @return string[]
     */
    public function getZapowiedzFakturyZipFile()
    {
        return $this->zapowiedzFakturyZipFile;
    }

    /**
     * Sets a new zapowiedzFakturyZipFile
     *
     * @param string[] $zapowiedzFakturyZipFile
     * @return self
     */
    public function setZapowiedzFakturyZipFile(array $zapowiedzFakturyZipFile = null)
    {
        $this->zapowiedzFakturyZipFile = $zapowiedzFakturyZipFile;
        return $this;
    }
}

