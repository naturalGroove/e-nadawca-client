<?php

namespace Abryb\ENadawca\Type\GetListaZgodEZwrotowResponse;

/**
 * Class representing GetListaZgodEZwrotowResponseAType
 */
class GetListaZgodEZwrotowResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType[] $lista
     */
    protected $lista = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as lista
     *
     * @return self
     * @param \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType $lista
     */
    public function addToLista(\Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType $lista)
    {
        $this->lista[] = $lista;
        return $this;
    }

    /**
     * isset lista
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLista($index)
    {
        return isset($this->lista[$index]);
    }

    /**
     * unset lista
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLista($index)
    {
        unset($this->lista[$index]);
    }

    /**
     * Gets as lista
     *
     * @return \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType[]
     */
    public function getLista()
    {
        return $this->lista;
    }

    /**
     * Sets a new lista
     *
     * @param \Abryb\ENadawca\Type\OczekujeNaZgodeEZwrotType[] $lista
     * @return self
     */
    public function setLista(array $lista = null)
    {
        $this->lista = $lista;
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

