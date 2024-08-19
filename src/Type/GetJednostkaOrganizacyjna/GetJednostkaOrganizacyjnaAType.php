<?php

namespace Abryb\ENadawca\Type\GetJednostkaOrganizacyjna;

/**
 * Class representing GetJednostkaOrganizacyjnaAType
 */
class GetJednostkaOrganizacyjnaAType
{
    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka
     */
    private $jednostka = null;

    /**
     * Gets as jednostka
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType
     */
    public function getJednostka()
    {
        return $this->jednostka;
    }

    /**
     * Sets a new jednostka
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka
     * @return self
     */
    public function setJednostka(?\Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this->jednostka = $jednostka;
        return $this;
    }
}

