<?php

namespace Abryb\ENadawca\Type\GetChecklistTemplateList;

/**
 * Class representing GetChecklistTemplateListAType
 */
class GetChecklistTemplateListAType
{
    /**
     * @var int[] $idChecklistTemplate
     */
    private $idChecklistTemplate = [
        
    ];

    /**
     * Adds as idChecklistTemplate
     *
     * @return self
     * @param int $idChecklistTemplate
     */
    public function addToIdChecklistTemplate($idChecklistTemplate)
    {
        $this->idChecklistTemplate[] = $idChecklistTemplate;
        return $this;
    }

    /**
     * isset idChecklistTemplate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdChecklistTemplate($index)
    {
        return isset($this->idChecklistTemplate[$index]);
    }

    /**
     * unset idChecklistTemplate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdChecklistTemplate($index)
    {
        unset($this->idChecklistTemplate[$index]);
    }

    /**
     * Gets as idChecklistTemplate
     *
     * @return int[]
     */
    public function getIdChecklistTemplate()
    {
        return $this->idChecklistTemplate;
    }

    /**
     * Sets a new idChecklistTemplate
     *
     * @param int[] $idChecklistTemplate
     * @return self
     */
    public function setIdChecklistTemplate(array $idChecklistTemplate = null)
    {
        $this->idChecklistTemplate = $idChecklistTemplate;
        return $this;
    }
}

