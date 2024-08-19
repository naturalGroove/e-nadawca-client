<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing LibraryForLegalDepositType
 *
 *
 * XSD Type: LibraryForLegalDepositType
 */
class LibraryForLegalDepositType
{
    /**
     * Library ID to use for shipment data in the
     *  <idLibraryForLegalDeposit/> element
     *
     * @var string $idLibraryForLegalDeposit
     */
    protected $idLibraryForLegalDeposit = null;

    /**
     * @var string $libraryName
     */
    protected $libraryName = null;

    /**
     * For a P.O. Box, this item includes a string
     *  &quot;skr. poczt.&quot; and box_number
     *
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var string $apartmentNumber
     */
    protected $apartmentNumber = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * Gets as idLibraryForLegalDeposit
     *
     * Library ID to use for shipment data in the
     *  <idLibraryForLegalDeposit/> element
     *
     * @return string
     */
    public function getIdLibraryForLegalDeposit()
    {
        return $this->idLibraryForLegalDeposit;
    }

    /**
     * Sets a new idLibraryForLegalDeposit
     *
     * Library ID to use for shipment data in the
     *  <idLibraryForLegalDeposit/> element
     *
     * @param string $idLibraryForLegalDeposit
     * @return self
     */
    public function setIdLibraryForLegalDeposit($idLibraryForLegalDeposit)
    {
        $this->idLibraryForLegalDeposit = $idLibraryForLegalDeposit;
        return $this;
    }

    /**
     * Gets as libraryName
     *
     * @return string
     */
    public function getLibraryName()
    {
        return $this->libraryName;
    }

    /**
     * Sets a new libraryName
     *
     * @param string $libraryName
     * @return self
     */
    public function setLibraryName($libraryName)
    {
        $this->libraryName = $libraryName;
        return $this;
    }

    /**
     * Gets as street
     *
     * For a P.O. Box, this item includes a string
     *  &quot;skr. poczt.&quot; and box_number
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * For a P.O. Box, this item includes a string
     *  &quot;skr. poczt.&quot; and box_number
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Sets a new houseNumber
     *
     * @param string $houseNumber
     * @return self
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * Gets as apartmentNumber
     *
     * @return string
     */
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    /**
     * Sets a new apartmentNumber
     *
     * @param string $apartmentNumber
     * @return self
     */
    public function setApartmentNumber($apartmentNumber)
    {
        $this->apartmentNumber = $apartmentNumber;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
}

