<?php

namespace Abryb\ENadawca\Type\UpdateReturnDocumentsProfileResponse;

/**
 * Class representing UpdateReturnDocumentsProfileResponseAType
 */
class UpdateReturnDocumentsProfileResponseAType
{
    /**
     * @var bool $result
     */
    protected $result = null;

    /**
     * @var int $idProfile
     */
    protected $idProfile = null;

    /**
     * @var  \Abryb\ENadawca\Type\ErrorType|\Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Gets as result
     *
     * @return bool
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * @param bool $result
     * @return self
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * Gets as idProfile
     *
     * @return int
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Sets a new idProfile
     *
     * @param int $idProfile
     * @return self
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;
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
     * @return \Abryb\ENadawca\Type\ErrorType|\Abryb\ENadawca\Type\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Abryb\ENadawca\Type\ErrorType|\Abryb\ENadawca\Type\ErrorType[] $error
     * @return self
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }
}

