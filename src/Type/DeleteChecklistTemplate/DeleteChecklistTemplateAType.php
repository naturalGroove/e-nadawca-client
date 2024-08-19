<?php

namespace Abryb\ENadawca\Type\DeleteChecklistTemplate;

/**
 * Class representing DeleteChecklistTemplateAType
 */
class DeleteChecklistTemplateAType
{
    /**
     * @var \Abryb\ENadawca\Type\ChecklistTemplateType[] $checklistTemplate
     */
    private $checklistTemplate = [
        
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
    public function setChecklistTemplate(array $checklistTemplate)
    {
        $this->checklistTemplate = $checklistTemplate;
        return $this;
    }
}

