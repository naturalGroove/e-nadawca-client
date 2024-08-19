<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: AddressType
 */
class AddressType
{
    /**
     * @var string $firstNameOrCompanyName
     */
    protected $firstNameOrCompanyName = null;

    /**
     * @var string $lastNameOrCompanyNameContinued
     */
    protected $lastNameOrCompanyNameContinued = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var string $apartamentNumber
     */
    protected $apartamentNumber = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * Code (ISO 3166) of the country.
     *
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $mobile
     */
    protected $mobile = null;

    /**
     * @var string $telephone
     */
    protected $telephone = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $contactPerson
     */
    protected $contactPerson = null;

    /**
     * @var string $nip
     */
    protected $nip = null;

    /**
     * Gets as firstNameOrCompanyName
     *
     * @return string
     */
    public function getFirstNameOrCompanyName()
    {
        return $this->firstNameOrCompanyName;
    }

    /**
     * Sets a new firstNameOrCompanyName
     *
     * @param string $firstNameOrCompanyName
     * @return self
     */
    public function setFirstNameOrCompanyName($firstNameOrCompanyName)
    {
        $this->firstNameOrCompanyName = $firstNameOrCompanyName;
        return $this;
    }

    /**
     * Gets as lastNameOrCompanyNameContinued
     *
     * @return string
     */
    public function getLastNameOrCompanyNameContinued()
    {
        return $this->lastNameOrCompanyNameContinued;
    }

    /**
     * Sets a new lastNameOrCompanyNameContinued
     *
     * @param string $lastNameOrCompanyNameContinued
     * @return self
     */
    public function setLastNameOrCompanyNameContinued($lastNameOrCompanyNameContinued)
    {
        $this->lastNameOrCompanyNameContinued = $lastNameOrCompanyNameContinued;
        return $this;
    }

    /**
     * Gets as street
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
     * Gets as apartamentNumber
     *
     * @return string
     */
    public function getApartamentNumber()
    {
        return $this->apartamentNumber;
    }

    /**
     * Sets a new apartamentNumber
     *
     * @param string $apartamentNumber
     * @return self
     */
    public function setApartamentNumber($apartamentNumber)
    {
        $this->apartamentNumber = $apartamentNumber;
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
     * Gets as countryCode
     *
     * Code (ISO 3166) of the country.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * Code (ISO 3166) of the country.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets a new mobile
     *
     * @param string $mobile
     * @return self
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * @param string $telephone
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as contactPerson
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets a new contactPerson
     *
     * @param string $contactPerson
     * @return self
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    /**
     * Gets as nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Sets a new nip
     *
     * @param string $nip
     * @return self
     */
    public function setNip($nip)
    {
        $this->nip = $nip;
        return $this;
    }
}

