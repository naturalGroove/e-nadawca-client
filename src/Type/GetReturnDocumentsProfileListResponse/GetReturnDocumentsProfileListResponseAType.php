<?php

namespace Abryb\ENadawca\Type\GetReturnDocumentsProfileListResponse;

/**
 * Class representing GetReturnDocumentsProfileListResponseAType
 */
class GetReturnDocumentsProfileListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ReturnDocumentProfileType[] $profile
     */
    protected $profile = [
        
    ];

    /**
     * @var  \Abryb\ENadawca\Type\ErrorType|\Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as profile
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ReturnDocumentProfileType $profile
     */
    public function addToProfile(\Abryb\ENadawca\Type\ReturnDocumentProfileType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * @return \Abryb\ENadawca\Type\ReturnDocumentProfileType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param \Abryb\ENadawca\Type\ReturnDocumentProfileType[] $profile
     * @return self
     */
    public function setProfile(array $profile = null)
    {
        $this->profile = $profile;
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

