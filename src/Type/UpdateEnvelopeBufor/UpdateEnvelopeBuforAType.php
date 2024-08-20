<?php

namespace Abryb\ENadawca\Type\UpdateEnvelopeBufor;

/**
 * Class representing UpdateEnvelopeBuforAType
 */
class UpdateEnvelopeBuforAType
{
    /**
     * @var \Abryb\ENadawca\Type\BuforType[] $bufor
     */
    protected $bufor = [
        
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
    public function setBufor(array $bufor)
    {
        $this->bufor = $bufor;
        return $this;
    }
}

