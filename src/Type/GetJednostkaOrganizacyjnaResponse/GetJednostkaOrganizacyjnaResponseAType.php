<?php

namespace Abryb\ENadawca\Type\GetJednostkaOrganizacyjnaResponse;

/**
 * Class representing GetJednostkaOrganizacyjnaResponseAType
 */
class GetJednostkaOrganizacyjnaResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    private $jednostkaOrganizacyjna = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as jednostkaOrganizacyjna
     *
     * @return self
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     */
    public function addToJednostkaOrganizacyjna(\Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna[] = $jednostkaOrganizacyjna;
        return $this;
    }

    /**
     * isset jednostkaOrganizacyjna
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJednostkaOrganizacyjna($index)
    {
        return isset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * unset jednostkaOrganizacyjna
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJednostkaOrganizacyjna($index)
    {
        unset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * Gets as jednostkaOrganizacyjna
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna()
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * Sets a new jednostkaOrganizacyjna
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return self
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna = null)
    {
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
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

