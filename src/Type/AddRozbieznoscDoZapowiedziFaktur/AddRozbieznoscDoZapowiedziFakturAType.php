<?php

namespace Abryb\ENadawca\Type\AddRozbieznoscDoZapowiedziFaktur;

/**
 * Class representing AddRozbieznoscDoZapowiedziFakturAType
 */
class AddRozbieznoscDoZapowiedziFakturAType
{
    /**
     * @var string[] $rozbieznosciZipFile
     */
    private $rozbieznosciZipFile = [
        
    ];

    /**
     * Adds as rozbieznosciZipFile
     *
     * @return self
     * @param string $rozbieznosciZipFile
     */
    public function addToRozbieznosciZipFile($rozbieznosciZipFile)
    {
        $this->rozbieznosciZipFile[] = $rozbieznosciZipFile;
        return $this;
    }

    /**
     * isset rozbieznosciZipFile
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRozbieznosciZipFile($index)
    {
        return isset($this->rozbieznosciZipFile[$index]);
    }

    /**
     * unset rozbieznosciZipFile
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRozbieznosciZipFile($index)
    {
        unset($this->rozbieznosciZipFile[$index]);
    }

    /**
     * Gets as rozbieznosciZipFile
     *
     * @return string[]
     */
    public function getRozbieznosciZipFile()
    {
        return $this->rozbieznosciZipFile;
    }

    /**
     * Sets a new rozbieznosciZipFile
     *
     * @param string[] $rozbieznosciZipFile
     * @return self
     */
    public function setRozbieznosciZipFile(array $rozbieznosciZipFile)
    {
        $this->rozbieznosciZipFile = $rozbieznosciZipFile;
        return $this;
    }
}

