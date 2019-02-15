<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\AddressRepository")
 */
class Address
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="globalid", type="string", length=255, nullable=true)
     */
    private $globalid;

    /**
     * @var string
     *
     * @ORM\Column(name="addressno", type="string", length=255, nullable=true)
     */
    private $addressno;

    /**
     * @var string
     *
     * @ORM\Column(name="companyrefno", type="string", length=255, nullable=true)
     */
    private $companyrefno;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255, nullable=true)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="gpslat", type="string", length=255, nullable=true)
     */
    private $gpslat;

    /**
     * @var string
     *
     * @ORM\Column(name="gpslong", type="string", length=255, nullable=true)
     */
    private $gpslong;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="addresstypeno", type="string", length=255, nullable=true)
     */
    private $addresstypeno;

    /**
     * @var string
     *
     * @ORM\Column(name="personno", type="string", length=255, nullable=true)
     */
    private $personno;

    /**
     * @var int
     *
     * @ORM\Column(name="sourceid", type="integer", nullable=true)
     */
    private $sourceid;

    /**
     * @var bool
     *
     * @ORM\Column(name="isdefault", type="boolean", nullable=true)
     */
    private $isdefault;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set globalid
     *
     * @param string $globalid
     *
     * @return Address
     */
    public function setGlobalid($globalid)
    {
        $this->globalid = $globalid;

        return $this;
    }

    /**
     * Get globalid
     *
     * @return string
     */
    public function getGlobalid()
    {
        return $this->globalid;
    }

    /**
     * Set addressno
     *
     * @param string $addressno
     *
     * @return Address
     */
    public function setAddressno($addressno)
    {
        $this->addressno = $addressno;

        return $this;
    }

    /**
     * Get addressno
     *
     * @return string
     */
    public function getAddressno()
    {
        return $this->addressno;
    }

    /**
     * Set companyrefno
     *
     * @param string $companyrefno
     *
     * @return Address
     */
    public function setCompanyrefno($companyrefno)
    {
        $this->companyrefno = $companyrefno;

        return $this;
    }

    /**
     * Get companyrefno
     *
     * @return string
     */
    public function getCompanyrefno()
    {
        return $this->companyrefno;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set gpslat
     *
     * @param string $gpslat
     *
     * @return Address
     */
    public function setGpslat($gpslat)
    {
        $this->gpslat = $gpslat;

        return $this;
    }

    /**
     * Get gpslat
     *
     * @return string
     */
    public function getGpslat()
    {
        return $this->gpslat;
    }

    /**
     * Set gpslong
     *
     * @param string $gpslong
     *
     * @return Address
     */
    public function setGpslong($gpslong)
    {
        $this->gpslong = $gpslong;

        return $this;
    }

    /**
     * Get gpslong
     *
     * @return string
     */
    public function getGpslong()
    {
        return $this->gpslong;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Address
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set addresstypeno
     *
     * @param string $addresstypeno
     *
     * @return Address
     */
    public function setAddresstypeno($addresstypeno)
    {
        $this->addresstypeno = $addresstypeno;

        return $this;
    }

    /**
     * Get addresstypeno
     *
     * @return string
     */
    public function getAddresstypeno()
    {
        return $this->addresstypeno;
    }

    /**
     * Set personno
     *
     * @param string $personno
     *
     * @return Address
     */
    public function setPersonno($personno)
    {
        $this->personno = $personno;

        return $this;
    }

    /**
     * Get personno
     *
     * @return string
     */
    public function getPersonno()
    {
        return $this->personno;
    }

    /**
     * Set sourceid
     *
     * @param integer $sourceid
     *
     * @return Address
     */
    public function setSourceid($sourceid)
    {
        $this->sourceid = $sourceid;

        return $this;
    }

    /**
     * Get sourceid
     *
     * @return integer
     */
    public function getSourceid()
    {
        return $this->sourceid;
    }

    /**
     * Set isdefault
     *
     * @param boolean $isdefault
     *
     * @return Address
     */
    public function setIsdefault($isdefault)
    {
        $this->isdefault = $isdefault;

        return $this;
    }

    /**
     * Get isdefault
     *
     * @return boolean
     */
    public function getIsdefault()
    {
        return $this->isdefault;
    }
}
