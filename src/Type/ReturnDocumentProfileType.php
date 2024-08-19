<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ReturnDocumentProfileType
 *
 * Returned during getting list of profiles
 * XSD Type: returnDocumentProfileType
 */
class ReturnDocumentProfileType
{
    /**
     * Required during updating profile. Returned
     *  during getting list of profiles.
     *
     * @var int $idProfile
     */
    protected $idProfile = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $name2
     */
    protected $name2 = null;

    /**
     * @var string $friendlyName
     */
    protected $friendlyName = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var string $premisesNumber
     */
    protected $premisesNumber = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $mobile
     */
    protected $mobile = null;

    /**
     * @var string $phonenumber
     */
    protected $phonenumber = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var bool $default
     */
    protected $default = null;

    /**
     * Gets as idProfile
     *
     * Required during updating profile. Returned
     *  during getting list of profiles.
     *
     * @return int
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Sets a new idProfile
     *
     * Required during updating profile. Returned
     *  during getting list of profiles.
     *
     * @param int $idProfile
     * @return self
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;
        return $this;
    }

    /**
     * Gets as name
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
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as name2
     *
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Sets a new name2
     *
     * @param string $name2
     * @return self
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
        return $this;
    }

    /**
     * Gets as friendlyName
     *
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    /**
     * Sets a new friendlyName
     *
     * @param string $friendlyName
     * @return self
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
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
     * Gets as premisesNumber
     *
     * @return string
     */
    public function getPremisesNumber()
    {
        return $this->premisesNumber;
    }

    /**
     * Sets a new premisesNumber
     *
     * @param string $premisesNumber
     * @return self
     */
    public function setPremisesNumber($premisesNumber)
    {
        $this->premisesNumber = $premisesNumber;
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
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
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
     * Gets as phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Sets a new phonenumber
     *
     * @param string $phonenumber
     * @return self
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
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
     * Gets as default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }
}

