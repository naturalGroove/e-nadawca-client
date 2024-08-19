<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing EZDOPakietType
 *
 *
 * XSD Type: EZDOPakietType
 */
class EZDOPakietType
{
    /**
     * @var int $idEZDOPakiet
     */
    protected $idEZDOPakiet = null;

    /**
     * @var \DateTime $exported
     */
    protected $exported = null;

    /**
     * @var string $idEZDOFile
     */
    protected $idEZDOFile = null;

    /**
     * Gets as idEZDOPakiet
     *
     * @return int
     */
    public function getIdEZDOPakiet()
    {
        return $this->idEZDOPakiet;
    }

    /**
     * Sets a new idEZDOPakiet
     *
     * @param int $idEZDOPakiet
     * @return self
     */
    public function setIdEZDOPakiet($idEZDOPakiet)
    {
        $this->idEZDOPakiet = $idEZDOPakiet;
        return $this;
    }

    /**
     * Gets as exported
     *
     * @return \DateTime
     */
    public function getExported()
    {
        return $this->exported;
    }

    /**
     * Sets a new exported
     *
     * @param \DateTime $exported
     * @return self
     */
    public function setExported(\DateTime $exported)
    {
        $this->exported = $exported;
        return $this;
    }

    /**
     * Gets as idEZDOFile
     *
     * @return string
     */
    public function getIdEZDOFile()
    {
        return $this->idEZDOFile;
    }

    /**
     * Sets a new idEZDOFile
     *
     * @param string $idEZDOFile
     * @return self
     */
    public function setIdEZDOFile($idEZDOFile)
    {
        $this->idEZDOFile = $idEZDOFile;
        return $this;
    }
}

