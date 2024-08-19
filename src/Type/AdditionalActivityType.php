<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing AdditionalActivityType
 *
 * Czynność do wykonania w ramach np. przesyłki
 *  proceduralnej
 * XSD Type: additionalActivityType
 */
class AdditionalActivityType
{
    /**
     * identyfikator czynności
     *
     * @var int $idActivity
     */
    protected $idActivity = null;

    /**
     * Nazwa czynności do wykonania
     *
     * @var string $name
     */
    protected $name = null;

    /**
     * opis czynności do wykonania
     *
     * @var string $description
     */
    protected $description = null;

    /**
     * znacznik czy czynnośc jest krytyczna. brak
     *  wykonania czynności oznaczonej jako krytyczna przerywa proces
     *  doręczenia.
     *
     * @var bool $critical
     */
    protected $critical = null;

    /**
     * Element określa kolejność dla czynności do
     *  wykonania w sekwecji czynności.
     *
     * @var int $order
     */
    protected $order = null;

    /**
     * Termin ważności, należy podać datę od kiedy
     *  dana czynność jest dostępna, liczone jest od godziny 0:00:00.0
     *
     * @var \DateTime $validFrom
     */
    protected $validFrom = null;

    /**
     * Termin ważności, należy podać datę do kiedy
     *  dana czynność jest dostępna, liczone jest do godziny
     *  23:59:59.999
     *
     * @var \DateTime $validTo
     */
    protected $validTo = null;

    /**
     * Gets as idActivity
     *
     * identyfikator czynności
     *
     * @return int
     */
    public function getIdActivity()
    {
        return $this->idActivity;
    }

    /**
     * Sets a new idActivity
     *
     * identyfikator czynności
     *
     * @param int $idActivity
     * @return self
     */
    public function setIdActivity($idActivity)
    {
        $this->idActivity = $idActivity;
        return $this;
    }

    /**
     * Gets as name
     *
     * Nazwa czynności do wykonania
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Nazwa czynności do wykonania
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * opis czynności do wykonania
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * opis czynności do wykonania
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as critical
     *
     * znacznik czy czynnośc jest krytyczna. brak
     *  wykonania czynności oznaczonej jako krytyczna przerywa proces
     *  doręczenia.
     *
     * @return bool
     */
    public function getCritical()
    {
        return $this->critical;
    }

    /**
     * Sets a new critical
     *
     * znacznik czy czynnośc jest krytyczna. brak
     *  wykonania czynności oznaczonej jako krytyczna przerywa proces
     *  doręczenia.
     *
     * @param bool $critical
     * @return self
     */
    public function setCritical($critical)
    {
        $this->critical = $critical;
        return $this;
    }

    /**
     * Gets as order
     *
     * Element określa kolejność dla czynności do
     *  wykonania w sekwecji czynności.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Element określa kolejność dla czynności do
     *  wykonania w sekwecji czynności.
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as validFrom
     *
     * Termin ważności, należy podać datę od kiedy
     *  dana czynność jest dostępna, liczone jest od godziny 0:00:00.0
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom
     *
     * Termin ważności, należy podać datę od kiedy
     *  dana czynność jest dostępna, liczone jest od godziny 0:00:00.0
     *
     * @param \DateTime $validFrom
     * @return self
     */
    public function setValidFrom(?\DateTime $validFrom = null)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Gets as validTo
     *
     * Termin ważności, należy podać datę do kiedy
     *  dana czynność jest dostępna, liczone jest do godziny
     *  23:59:59.999
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Sets a new validTo
     *
     * Termin ważności, należy podać datę do kiedy
     *  dana czynność jest dostępna, liczone jest do godziny
     *  23:59:59.999
     *
     * @param \DateTime $validTo
     * @return self
     */
    public function setValidTo(?\DateTime $validTo = null)
    {
        $this->validTo = $validTo;
        return $this;
    }
}

