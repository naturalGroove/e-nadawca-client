<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing AccountType
 *
 *
 * XSD Type: accountType
 */
class AccountType
{
    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Abryb\ENadawca\Type\KartaType[] $karta
     */
    protected $karta = [
        
    ];

    /**
     * @var string[] $permision
     */
    protected $permision = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\ProfilType[] $profil
     */
    protected $profil = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostka
     */
    protected $jednostka = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $domyslnaJednostka
     */
    protected $domyslnaJednostka = null;

    /**
     * @var \Abryb\ENadawca\Type\ProfilType $domyslnyProfil
     */
    protected $domyslnyProfil = null;

    /**
     * @var string[] $dostepPoAdresieIP
     */
    protected $dostepPoAdresieIP = [
        
    ];

    /**
     * @var int $idDomyslnyProfilDokZwrKlient
     */
    protected $idDomyslnyProfilDokZwrKlient = null;

    /**
     * @var int $idDomyslnyProfilDokZwrUzytk
     */
    protected $idDomyslnyProfilDokZwrUzytk = null;

    /**
     * @var string[] $rodzajPrzypisania
     */
    protected $rodzajPrzypisania = [
        
    ];

    /**
     * Gets as userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
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
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as karta
     *
     * @return self
     * @param \Abryb\ENadawca\Type\KartaType $karta
     */
    public function addToKarta(\Abryb\ENadawca\Type\KartaType $karta)
    {
        $this->karta[] = $karta;
        return $this;
    }

    /**
     * isset karta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKarta($index)
    {
        return isset($this->karta[$index]);
    }

    /**
     * unset karta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKarta($index)
    {
        unset($this->karta[$index]);
    }

    /**
     * Gets as karta
     *
     * @return \Abryb\ENadawca\Type\KartaType[]
     */
    public function getKarta()
    {
        return $this->karta;
    }

    /**
     * Sets a new karta
     *
     * @param \Abryb\ENadawca\Type\KartaType[] $karta
     * @return self
     */
    public function setKarta(array $karta = null)
    {
        $this->karta = $karta;
        return $this;
    }

    /**
     * Adds as permision
     *
     * @return self
     * @param string $permision
     */
    public function addToPermision($permision)
    {
        $this->permision[] = $permision;
        return $this;
    }

    /**
     * isset permision
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPermision($index)
    {
        return isset($this->permision[$index]);
    }

    /**
     * unset permision
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPermision($index)
    {
        unset($this->permision[$index]);
    }

    /**
     * Gets as permision
     *
     * @return string[]
     */
    public function getPermision()
    {
        return $this->permision;
    }

    /**
     * Sets a new permision
     *
     * @param string $permision
     * @return self
     */
    public function setPermision(array $permision = null)
    {
        $this->permision = $permision;
        return $this;
    }

    /**
     * Adds as profil
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ProfilType $profil
     */
    public function addToProfil(\Abryb\ENadawca\Type\ProfilType $profil)
    {
        $this->profil[] = $profil;
        return $this;
    }

    /**
     * isset profil
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfil($index)
    {
        return isset($this->profil[$index]);
    }

    /**
     * unset profil
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfil($index)
    {
        unset($this->profil[$index]);
    }

    /**
     * Gets as profil
     *
     * @return \Abryb\ENadawca\Type\ProfilType[]
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Sets a new profil
     *
     * @param \Abryb\ENadawca\Type\ProfilType[] $profil
     * @return self
     */
    public function setProfil(array $profil)
    {
        $this->profil = $profil;
        return $this;
    }

    /**
     * Adds as jednostka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka
     */
    public function addToJednostka(\Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka)
    {
        $this->jednostka[] = $jednostka;
        return $this;
    }

    /**
     * isset jednostka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJednostka($index)
    {
        return isset($this->jednostka[$index]);
    }

    /**
     * unset jednostka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJednostka($index)
    {
        unset($this->jednostka[$index]);
    }

    /**
     * Gets as jednostka
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[]
     */
    public function getJednostka()
    {
        return $this->jednostka;
    }

    /**
     * Sets a new jednostka
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostka
     * @return self
     */
    public function setJednostka(array $jednostka = null)
    {
        $this->jednostka = $jednostka;
        return $this;
    }

    /**
     * Gets as domyslnaJednostka
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType
     */
    public function getDomyslnaJednostka()
    {
        return $this->domyslnaJednostka;
    }

    /**
     * Sets a new domyslnaJednostka
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $domyslnaJednostka
     * @return self
     */
    public function setDomyslnaJednostka(?\Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $domyslnaJednostka = null)
    {
        $this->domyslnaJednostka = $domyslnaJednostka;
        return $this;
    }

    /**
     * Gets as domyslnyProfil
     *
     * @return \Abryb\ENadawca\Type\ProfilType
     */
    public function getDomyslnyProfil()
    {
        return $this->domyslnyProfil;
    }

    /**
     * Sets a new domyslnyProfil
     *
     * @param \Abryb\ENadawca\Type\ProfilType $domyslnyProfil
     * @return self
     */
    public function setDomyslnyProfil(?\Abryb\ENadawca\Type\ProfilType $domyslnyProfil = null)
    {
        $this->domyslnyProfil = $domyslnyProfil;
        return $this;
    }

    /**
     * Adds as dostepPoAdresieIP
     *
     * @return self
     * @param string $dostepPoAdresieIP
     */
    public function addToDostepPoAdresieIP($dostepPoAdresieIP)
    {
        $this->dostepPoAdresieIP[] = $dostepPoAdresieIP;
        return $this;
    }

    /**
     * isset dostepPoAdresieIP
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDostepPoAdresieIP($index)
    {
        return isset($this->dostepPoAdresieIP[$index]);
    }

    /**
     * unset dostepPoAdresieIP
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDostepPoAdresieIP($index)
    {
        unset($this->dostepPoAdresieIP[$index]);
    }

    /**
     * Gets as dostepPoAdresieIP
     *
     * @return string[]
     */
    public function getDostepPoAdresieIP()
    {
        return $this->dostepPoAdresieIP;
    }

    /**
     * Sets a new dostepPoAdresieIP
     *
     * @param string[] $dostepPoAdresieIP
     * @return self
     */
    public function setDostepPoAdresieIP(array $dostepPoAdresieIP = null)
    {
        $this->dostepPoAdresieIP = $dostepPoAdresieIP;
        return $this;
    }

    /**
     * Gets as idDomyslnyProfilDokZwrKlient
     *
     * @return int
     */
    public function getIdDomyslnyProfilDokZwrKlient()
    {
        return $this->idDomyslnyProfilDokZwrKlient;
    }

    /**
     * Sets a new idDomyslnyProfilDokZwrKlient
     *
     * @param int $idDomyslnyProfilDokZwrKlient
     * @return self
     */
    public function setIdDomyslnyProfilDokZwrKlient($idDomyslnyProfilDokZwrKlient)
    {
        $this->idDomyslnyProfilDokZwrKlient = $idDomyslnyProfilDokZwrKlient;
        return $this;
    }

    /**
     * Gets as idDomyslnyProfilDokZwrUzytk
     *
     * @return int
     */
    public function getIdDomyslnyProfilDokZwrUzytk()
    {
        return $this->idDomyslnyProfilDokZwrUzytk;
    }

    /**
     * Sets a new idDomyslnyProfilDokZwrUzytk
     *
     * @param int $idDomyslnyProfilDokZwrUzytk
     * @return self
     */
    public function setIdDomyslnyProfilDokZwrUzytk($idDomyslnyProfilDokZwrUzytk)
    {
        $this->idDomyslnyProfilDokZwrUzytk = $idDomyslnyProfilDokZwrUzytk;
        return $this;
    }

    /**
     * Adds as rodzajPrzypisania
     *
     * @return self
     * @param string $rodzajPrzypisania
     */
    public function addToRodzajPrzypisania($rodzajPrzypisania)
    {
        $this->rodzajPrzypisania[] = $rodzajPrzypisania;
        return $this;
    }

    /**
     * isset rodzajPrzypisania
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRodzajPrzypisania($index)
    {
        return isset($this->rodzajPrzypisania[$index]);
    }

    /**
     * unset rodzajPrzypisania
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRodzajPrzypisania($index)
    {
        unset($this->rodzajPrzypisania[$index]);
    }

    /**
     * Gets as rodzajPrzypisania
     *
     * @return string[]
     */
    public function getRodzajPrzypisania()
    {
        return $this->rodzajPrzypisania;
    }

    /**
     * Sets a new rodzajPrzypisania
     *
     * @param string $rodzajPrzypisania
     * @return self
     */
    public function setRodzajPrzypisania(array $rodzajPrzypisania = null)
    {
        $this->rodzajPrzypisania = $rodzajPrzypisania;
        return $this;
    }
}

