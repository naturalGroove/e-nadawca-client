<?php

namespace Abryb\ENadawca\Type\SetStatusZgodyNaEZwrot;

/**
 * Class representing SetStatusZgodyNaEZwrotAType
 */
class SetStatusZgodyNaEZwrotAType
{
    /**
     * @var \Abryb\ENadawca\Type\StatusZgodyEZwrotType[] $statusZgody
     */
    protected $statusZgody = [
        
    ];

    /**
     * Adds as statusZgody
     *
     * @return self
     * @param \Abryb\ENadawca\Type\StatusZgodyEZwrotType $statusZgody
     */
    public function addToStatusZgody(\Abryb\ENadawca\Type\StatusZgodyEZwrotType $statusZgody)
    {
        $this->statusZgody[] = $statusZgody;
        return $this;
    }

    /**
     * isset statusZgody
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusZgody($index)
    {
        return isset($this->statusZgody[$index]);
    }

    /**
     * unset statusZgody
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusZgody($index)
    {
        unset($this->statusZgody[$index]);
    }

    /**
     * Gets as statusZgody
     *
     * @return \Abryb\ENadawca\Type\StatusZgodyEZwrotType[]
     */
    public function getStatusZgody()
    {
        return $this->statusZgody;
    }

    /**
     * Sets a new statusZgody
     *
     * @param \Abryb\ENadawca\Type\StatusZgodyEZwrotType[] $statusZgody
     * @return self
     */
    public function setStatusZgody(array $statusZgody)
    {
        $this->statusZgody = $statusZgody;
        return $this;
    }
}

