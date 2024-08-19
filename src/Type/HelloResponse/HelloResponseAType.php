<?php

namespace Abryb\ENadawca\Type\HelloResponse;

/**
 * Class representing HelloResponseAType
 */
class HelloResponseAType
{
    /**
     * @var string $out
     */
    private $out = null;

    /**
     * Gets as out
     *
     * @return string
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * Sets a new out
     *
     * @param string $out
     * @return self
     */
    public function setOut($out)
    {
        $this->out = $out;
        return $this;
    }
}

