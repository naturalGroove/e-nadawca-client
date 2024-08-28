<?php

namespace Abryb\ENadawca\Type\GetPrintForParcelResponse;

/**
 * Class representing GetPrintForParcelResponseAType
 */
class GetPrintForParcelResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\PrintResultType | \Abryb\ENadawca\Type\PrintResultType[] $printResult
     */
    protected $printResult = [
        
    ];

    /**
     * @var  \Abryb\ENadawca\Type\ErrorType|\Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as printResult
     *
     * @return self
     * @param \Abryb\ENadawca\Type\PrintResultType $printResult
     */
    public function addToPrintResult(\Abryb\ENadawca\Type\PrintResultType $printResult)
    {
        $this->printResult[] = $printResult;
        return $this;
    }

    /**
     * isset printResult
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrintResult($index)
    {
        return isset($this->printResult[$index]);
    }

    /**
     * unset printResult
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrintResult($index)
    {
        unset($this->printResult[$index]);
    }

    /**
     * Gets as printResult
     *
     * @return \Abryb\ENadawca\Type\PrintResultType | \Abryb\ENadawca\Type\PrintResultType[]
     */
    public function getPrintResult()
    {
        return $this->printResult;
    }

    /**
     * Sets a new printResult
     *
     * @param \Abryb\ENadawca\Type\PrintResultType | \Abryb\ENadawca\Type\PrintResultType[] $printResult
     * @return self
     */
    public function setPrintResult(array $printResult = null)
    {
        $this->printResult = $printResult;
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

