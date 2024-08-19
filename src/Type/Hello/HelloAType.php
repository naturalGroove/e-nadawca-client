<?php

namespace Abryb\ENadawca\Type\Hello;

/**
 * Class representing HelloAType
 */
class HelloAType
{
    /**
     * @var string $in
     */
    private $in = null;

    /**
     * Gets as in
     *
     * @return string
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * Sets a new in
     *
     * @param string $in
     * @return self
     */
    public function setIn($in)
    {
        $this->in = $in;
        return $this;
    }
}

