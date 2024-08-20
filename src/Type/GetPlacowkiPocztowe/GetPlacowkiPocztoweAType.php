<?php

namespace Abryb\ENadawca\Type\GetPlacowkiPocztowe;

/**
 * Class representing GetPlacowkiPocztoweAType
 */
class GetPlacowkiPocztoweAType
{
    /**
     * @var string $idWojewodztwo
     */
    protected $idWojewodztwo = null;

    /**
     * Gets as idWojewodztwo
     *
     * @return string
     */
    public function getIdWojewodztwo()
    {
        return $this->idWojewodztwo;
    }

    /**
     * Sets a new idWojewodztwo
     *
     * @param string $idWojewodztwo
     * @return self
     */
    public function setIdWojewodztwo($idWojewodztwo)
    {
        $this->idWojewodztwo = $idWojewodztwo;
        return $this;
    }
}

