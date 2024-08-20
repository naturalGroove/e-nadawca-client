<?php

namespace Abryb\ENadawca\Type\GetAdditionalActivitiesListResponse;

/**
 * Class representing GetAdditionalActivitiesListResponseAType
 */
class GetAdditionalActivitiesListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\AdditionalActivityType[] $additionalActivity
     */
    protected $additionalActivity = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as additionalActivity
     *
     * @return self
     * @param \Abryb\ENadawca\Type\AdditionalActivityType $additionalActivity
     */
    public function addToAdditionalActivity(\Abryb\ENadawca\Type\AdditionalActivityType $additionalActivity)
    {
        $this->additionalActivity[] = $additionalActivity;
        return $this;
    }

    /**
     * isset additionalActivity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalActivity($index)
    {
        return isset($this->additionalActivity[$index]);
    }

    /**
     * unset additionalActivity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalActivity($index)
    {
        unset($this->additionalActivity[$index]);
    }

    /**
     * Gets as additionalActivity
     *
     * @return \Abryb\ENadawca\Type\AdditionalActivityType[]
     */
    public function getAdditionalActivity()
    {
        return $this->additionalActivity;
    }

    /**
     * Sets a new additionalActivity
     *
     * @param \Abryb\ENadawca\Type\AdditionalActivityType[] $additionalActivity
     * @return self
     */
    public function setAdditionalActivity(array $additionalActivity = null)
    {
        $this->additionalActivity = $additionalActivity;
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

