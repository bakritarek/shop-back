<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiscountList
 *
 * @ORM\Table(name="discount_list")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\DiscountListRepository")
 */
class DiscountList
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
     * @var int
     *
     * @ORM\Column(name="globalid", type="integer", nullable=true)
     */
    private $globalid;

    /**
     * @var string
     *
     * @ORM\Column(name="companygroup", type="text", nullable=true)
     */
    private $companygroup;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", nullable=true)
     */
    private $discount;

    /**
     * @var string
     *
     * @ORM\Column(name="companyno", type="text", nullable=true)
     */
    private $companyno;

    /**
     * @var string
     *
     * @ORM\Column(name="itemno", type="text", nullable=true)
     */
    private $itemno;

    /**
     * @var string
     *
     * @ORM\Column(name="importid", type="text", nullable=true)
     */
    private $importid;

    /**
     * @var string
     *
     * @ORM\Column(name="itempgroup2", type="text", nullable=true)
     */
    private $itempgroup2;

    /**
     * @var string
     *
     * @ORM\Column(name="itemgroup3", type="text", nullable=true)
     */
    private $itemgroup3;


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
     * @param integer $globalid
     *
     * @return DiscountList
     */
    public function setGlobalid($globalid)
    {
        $this->globalid = $globalid;

        return $this;
    }

    /**
     * Get globalid
     *
     * @return int
     */
    public function getGlobalid()
    {
        return $this->globalid;
    }

    /**
     * Set companygroup
     *
     * @param string $companygroup
     *
     * @return DiscountList
     */
    public function setCompanygroup($companygroup)
    {
        $this->companygroup = $companygroup;

        return $this;
    }

    /**
     * Get companygroup
     *
     * @return string
     */
    public function getCompanygroup()
    {
        return $this->companygroup;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return DiscountList
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set companyno
     *
     * @param string $companyno
     *
     * @return DiscountList
     */
    public function setCompanyno($companyno)
    {
        $this->companyno = $companyno;

        return $this;
    }

    /**
     * Get companyno
     *
     * @return string
     */
    public function getCompanyno()
    {
        return $this->companyno;
    }

    /**
     * Set itemno
     *
     * @param string $itemno
     *
     * @return DiscountList
     */
    public function setItemno($itemno)
    {
        $this->itemno = $itemno;

        return $this;
    }

    /**
     * Get itemno
     *
     * @return string
     */
    public function getItemno()
    {
        return $this->itemno;
    }

    /**
     * Set importid
     *
     * @param string $importid
     *
     * @return DiscountList
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
     * Set itempgroup2
     *
     * @param string $itempgroup2
     *
     * @return DiscountList
     */
    public function setItempgroup2($itempgroup2)
    {
        $this->itempgroup2 = $itempgroup2;

        return $this;
    }

    /**
     * Get itempgroup2
     *
     * @return string
     */
    public function getItempgroup2()
    {
        return $this->itempgroup2;
    }

    /**
     * Set itemgroup3
     *
     * @param string $itemgroup3
     *
     * @return DiscountList
     */
    public function setItemgroup3($itemgroup3)
    {
        $this->itemgroup3 = $itemgroup3;

        return $this;
    }

    /**
     * Get itemgroup3
     *
     * @return string
     */
    public function getItemgroup3()
    {
        return $this->itemgroup3;
    }
}
