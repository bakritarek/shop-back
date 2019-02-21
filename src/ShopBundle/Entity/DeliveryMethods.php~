<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryMethods
 *
 * @ORM\Table(name="delivery_methods")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\DeliveryMethodsRepository")
 */
class DeliveryMethods
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
     * @ORM\Column(name="method", type="string", length=255, nullable=true)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="importid", type="integer", nullable=true)
     */
    private $importid;

    /**
     * @var int
     *
     * @ORM\Column(name="satelliteid", type="integer", nullable=true)
     */
    private $satelliteid;

    /**
     * @var int
     *
     * @ORM\Column(name="sourceid", type="integer", nullable=true)
     */
    private $sourceid;

    /**
     * @ORM\OneToMany(targetEntity="Company", mappedBy="deliverymethod")
     */
    private $companys;


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
     * @return DeliveryMethods
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
     * Set method
     *
     * @param string $method
     *
     * @return DeliveryMethods
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return DeliveryMethods
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set importid
     *
     * @param integer $importid
     *
     * @return DeliveryMethods
     */
    public function setImportid($importid)
    {
        $this->importid = $importid;

        return $this;
    }

    /**
     * Get importid
     *
     * @return int
     */
    public function getImportid()
    {
        return $this->importid;
    }

    /**
     * Set satelliteid
     *
     * @param integer $satelliteid
     *
     * @return DeliveryMethods
     */
    public function setSatelliteid($satelliteid)
    {
        $this->satelliteid = $satelliteid;

        return $this;
    }

    /**
     * Get satelliteid
     *
     * @return int
     */
    public function getSatelliteid()
    {
        return $this->satelliteid;
    }

    /**
     * Set sourceid
     *
     * @param integer $sourceid
     *
     * @return DeliveryMethods
     */
    public function setSourceid($sourceid)
    {
        $this->sourceid = $sourceid;

        return $this;
    }

    /**
     * Get sourceid
     *
     * @return int
     */
    public function getSourceid()
    {
        return $this->sourceid;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->companys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add company
     *
     * @param \ShopBundle\Entity\Company $company
     *
     * @return DeliveryMethods
     */
    public function addCompany(\ShopBundle\Entity\Company $company)
    {
        $this->companys[] = $company;

        return $this;
    }

    /**
     * Remove company
     *
     * @param \ShopBundle\Entity\Company $company
     */
    public function removeCompany(\ShopBundle\Entity\Company $company)
    {
        $this->companys->removeElement($company);
    }

    /**
     * Get companys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanys()
    {
        return $this->companys;
    }
}
