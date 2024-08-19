<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing KartaType
 *
 *
 * XSD Type: kartaType
 */
class KartaType
{
    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var bool $aktywna
     */
    protected $aktywna = null;

    /**
     * Typ karty. Dopuszczalne wartości: 1-do
     *  nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych
     *  wartości może być rozszerzona w przyszłości.
     *
     * @var int $typ
     */
    protected $typ = null;

    /**
     * Lista dostępnych produktów dla karty
     *
     * @var \Abryb\ENadawca\Type\ProduktInKartaType[] $produktyInKarta
     */
    protected $produktyInKarta = null;

    /**
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @var \Abryb\ENadawca\Type\AdresKorespondencyjnyType[] $adresKorespondencyjny
     */
    protected $adresKorespondencyjny = [
        
    ];

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;
        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }

    /**
     * Gets as aktywna
     *
     * @return bool
     */
    public function getAktywna()
    {
        return $this->aktywna;
    }

    /**
     * Sets a new aktywna
     *
     * @param bool $aktywna
     * @return self
     */
    public function setAktywna($aktywna)
    {
        $this->aktywna = $aktywna;
        return $this;
    }

    /**
     * Gets as typ
     *
     * Typ karty. Dopuszczalne wartości: 1-do
     *  nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych
     *  wartości może być rozszerzona w przyszłości.
     *
     * @return int
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ
     *
     * Typ karty. Dopuszczalne wartości: 1-do
     *  nadawania, 2-do definicji adresów OPNA. Lista obsługiwanych
     *  wartości może być rozszerzona w przyszłości.
     *
     * @param int $typ
     * @return self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;
        return $this;
    }

    /**
     * Adds as produktInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ProduktInKartaType $produktInKarta
     */
    public function addToProduktyInKarta(\Abryb\ENadawca\Type\ProduktInKartaType $produktInKarta)
    {
        $this->produktyInKarta[] = $produktInKarta;
        return $this;
    }

    /**
     * isset produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduktyInKarta($index)
    {
        return isset($this->produktyInKarta[$index]);
    }

    /**
     * unset produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduktyInKarta($index)
    {
        unset($this->produktyInKarta[$index]);
    }

    /**
     * Gets as produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @return \Abryb\ENadawca\Type\ProduktInKartaType[]
     */
    public function getProduktyInKarta()
    {
        return $this->produktyInKarta;
    }

    /**
     * Sets a new produktyInKarta
     *
     * Lista dostępnych produktów dla karty
     *
     * @param \Abryb\ENadawca\Type\ProduktInKartaType[] $produktyInKarta
     * @return self
     */
    public function setProduktyInKarta(array $produktyInKarta = null)
    {
        $this->produktyInKarta = $produktyInKarta;
        return $this;
    }

    /**
     * Adds as adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @return self
     * @param \Abryb\ENadawca\Type\AdresKorespondencyjnyType $adresKorespondencyjny
     */
    public function addToAdresKorespondencyjny(\Abryb\ENadawca\Type\AdresKorespondencyjnyType $adresKorespondencyjny)
    {
        $this->adresKorespondencyjny[] = $adresKorespondencyjny;
        return $this;
    }

    /**
     * isset adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdresKorespondencyjny($index)
    {
        return isset($this->adresKorespondencyjny[$index]);
    }

    /**
     * unset adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdresKorespondencyjny($index)
    {
        unset($this->adresKorespondencyjny[$index]);
    }

    /**
     * Gets as adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @return \Abryb\ENadawca\Type\AdresKorespondencyjnyType[]
     */
    public function getAdresKorespondencyjny()
    {
        return $this->adresKorespondencyjny;
    }

    /**
     * Sets a new adresKorespondencyjny
     *
     * Lista adresów korespondencyjnych dla kart typu
     *  2
     *
     * @param \Abryb\ENadawca\Type\AdresKorespondencyjnyType[] $adresKorespondencyjny
     * @return self
     */
    public function setAdresKorespondencyjny(array $adresKorespondencyjny = null)
    {
        $this->adresKorespondencyjny = $adresKorespondencyjny;
        return $this;
    }
}

