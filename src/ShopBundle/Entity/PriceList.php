<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceList
 *
 * @ORM\Table(name="price_list")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\PriceListRepository")
 */
class PriceList
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
     * @ORM\Column(name="globalid", type="text", nullable=true)
     */
    private $globalid;

    /**
     * @ORM\ManyToOne(targetEntity="Items", inversedBy="priceLists")
     */
    private $itemno;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="text", nullable=true)
     */
    private $unit;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="text", nullable=true)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="group1", type="text", nullable=true)
     */
    private $group1;

    /**
     * @var string
     *
     * @ORM\Column(name="group2", type="text", nullable=true)
     */
    private $group2;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="base", type="integer", nullable=true)
     */
    private $base;

    /**
     * @var int
     *
     * @ORM\Column(name="limitdown", type="integer", nullable=true)
     */
    private $limitdown;

    /**
     * @var int
     *
     * @ORM\Column(name="pricetype", type="integer", nullable=true)
     */
    private $pricetype;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="pricelist")
     */
    private $companyno;

    /**
     * @var string
     *
     * @ORM\Column(name="importid", type="text", nullable=true)
     */
    private $importid;

    /**
     * @var int
     *
     * @ORM\Column(name="sourceid", type="integer", nullable=true)
     */
    private $sourceid;

    /**
     * @var int
     *
     * @ORM\Column(name="discountable", type="integer", nullable=true)
     */
    private $discountable;

    /**
     * @var float
     *
     * @ORM\Column(name="minprice", type="float", nullable=true)
     */
    private $minprice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fromdate", type="date", nullable=true)
     */
    private $fromdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="untildate", type="date", nullable=true)
     */
    private $untildate;


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
     * @return PriceList
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
     * Set unit
     *
     * @param string $unit
     *
     * @return PriceList
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return PriceList
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set group1
     *
     * @param string $group1
     *
     * @return PriceList
     */
    public function setGroup1($group1)
    {
        $this->group1 = $group1;

        return $this;
    }

    /**
     * Get group1
     *
     * @return string
     */
    public function getGroup1()
    {
        return $this->group1;
    }

    /**
     * Set group2
     *
     * @param string $group2
     *
     * @return PriceList
     */
    public function setGroup2($group2)
    {
        $this->group2 = $group2;

        return $this;
    }

    /**
     * Get group2
     *
     * @return string
     */
    public function getGroup2()
    {
        return $this->group2;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return PriceList
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set base
     *
     * @param integer $base
     *
     * @return PriceList
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set limitdown
     *
     * @param integer $limitdown
     *
     * @return PriceList
     */
    public function setLimitdown($limitdown)
    {
        $this->limitdown = $limitdown;

        return $this;
    }

    /**
     * Get limitdown
     *
     * @return int
     */
    public function getLimitdown()
    {
        return $this->limitdown;
    }

    /**
     * Set pricetype
     *
     * @param integer $pricetype
     *
     * @return PriceList
     */
    public function setPricetype($pricetype)
    {
        $this->pricetype = $pricetype;

        return $this;
    }

    /**
     * Get pricetype
     *
     * @return int
     */
    public function getPricetype()
    {
        return $this->pricetype;
    }


    /**
     * Set importid
     *
     * @param string $importid
     *
     * @return PriceList
     */
    public function setImportid($importid)
    {
        $this->importid = $importid;

        return $this;
    }

    /**
     * Get importid
     *
     * @return string
     */
    public function getImportid()
    {
        return $this->importid;
    }

    /**
     * Set sourceid
     *
     * @param integer $sourceid
     *
     * @return PriceList
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
     * Set discountable
     *
     * @param integer $discountable
     *
     * @return PriceList
     */
    public function setDiscountable($discountable)
    {
        $this->discountable = $discountable;

        return $this;
    }

    /**
     * Get discountable
     *
     * @return int
     */
    public function getDiscountable()
    {
        return $this->discountable;
    }

    /**
     * Set minprice
     *
     * @param float $minprice
     *
     * @return PriceList
     */
    public function setMinprice($minprice)
    {
        $this->minprice = $minprice;

        return $this;
    }

    /**
     * Get minprice
     *
     * @return float
     */
    public function getMinprice()
    {
        return $this->minprice;
    }

    /**
     * Set fromdate
     *
     * @param \DateTime $fromdate
     *
     * @return PriceList
     */
    public function setFromdate($fromdate)
    {
        $this->fromdate = $fromdate;

        return $this;
    }

    /**
     * Get fromdate
     *
     * @return \DateTime
     */
    public function getFromdate()
    {
        return $this->fromdate;
    }

    /**
     * Set untildate
     *
     * @param \DateTime $untildate
     *
     * @return PriceList
     */
    public function setUntildate($untildate)
    {
        $this->untildate = $untildate;

        return $this;
    }

    /**
     * Get untildate
     *
     * @return \DateTime
     */
    public function getUntildate()
    {
        return $this->untildate;
    }

    /**
     * Set companyno
     *
     * @param \ShopBundle\Entity\Company $companyno
     *
     * @return PriceList
     */
    public function setCompanyno(\ShopBundle\Entity\Company $companyno = null)
    {
        $this->companyno = $companyno;

        return $this;
    }

    /**
     * Get companyno
     *
     * @return \ShopBundle\Entity\Company
     */
    public function getCompanyno()
    {
        return $this->companyno;
    }

    /**
     * Set itemno
     *
     * @param \ShopBundle\Entity\Items $itemno
     *
     * @return PriceList
     */
    public function setItemno(\ShopBundle\Entity\Items $itemno = null)
    {
        $this->itemno = $itemno;

        return $this;
    }

    /**
     * Get itemno
     *
     * @return \ShopBundle\Entity\Items
     */
    public function getItemno()
    {
        return $this->itemno;
    }
}
