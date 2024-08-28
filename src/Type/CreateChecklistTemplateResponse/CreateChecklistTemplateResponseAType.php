<?php

namespace Abryb\ENadawca\Type\CreateChecklistTemplateResponse;

/**
 * Class representing CreateChecklistTemplateResponseAType
 */
class CreateChecklistTemplateResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ChecklistTemplateType[] $checklistTemplate
     */
    protected $checklistTemplate = [
        
    ];

    /**
     * @var  \Abryb\ENadawca\Type\ErrorType|\Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as checklistTemplate
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ChecklistTemplateType $checklistTemplate
     */
    public function addToChecklistTemplate(\Abryb\ENadawca\Type\ChecklistTemplateType $checklistTemplate)
    {
        $this->checklistTemplate[] = $checklistTemplate;
        return $this;
    }

    /**
     * isset checklistTemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChecklistTemplate($index)
    {
        return isset($this->checklistTemplate[$index]);
    }

    /**
     * unset checklistTemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChecklistTemplate($index)
    {
        unset($this->checklistTemplate[$index]);
    }

    /**
     * Gets as checklistTemplate
     *
     * @return \Abryb\ENadawca\Type\ChecklistTemplateType[]
     */
    public function getChecklistTemplate()
    {
        return $this->checklistTemplate;
    }

    /**
     * Sets a new checklistTemplate
     *
     * @param \Abryb\ENadawca\Type\ChecklistTemplateType[] $checklistTemplate
     * @return self
     */
    public function setChecklistTemplate(array $checklistTemplate = null)
    {
        $this->checklistTemplate = $checklistTemplate;
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

