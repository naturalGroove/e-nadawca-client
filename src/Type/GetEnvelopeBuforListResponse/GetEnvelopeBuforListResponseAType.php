<?php

namespace Abryb\ENadawca\Type\GetEnvelopeBuforListResponse;

/**
 * Class representing GetEnvelopeBuforListResponseAType
 */
class GetEnvelopeBuforListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\BuforType[] $bufor
     */
    protected $bufor = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * Adds as bufor
     *
     * @return self
     * @param \Abryb\ENadawca\Type\BuforType $bufor
     */
    public function addToBufor(\Abryb\ENadawca\Type\BuforType $bufor)
    {
        $this->bufor[] = $bufor;
        return $this;
    }

    /**
     * isset bufor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBufor($index)
    {
        return isset($this->bufor[$index]);
    }

    /**
     * unset bufor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBufor($index)
    {
        unset($this->bufor[$index]);
    }

    /**
     * Gets as bufor
     *
     * @return \Abryb\ENadawca\Type\BuforType[]
     */
    public function getBufor()
    {
        return $this->bufor;
    }

    /**
     * Sets a new bufor
     *
     * @param \Abryb\ENadawca\Type\BuforType[] $bufor
     * @return self
     */
    public function setBufor(array $bufor = null)
    {
        $this->bufor = $bufor;
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

