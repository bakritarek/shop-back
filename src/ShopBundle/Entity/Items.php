<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\ItemsRepository")
 */
class Items
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
     * @ORM\Column(name="itemno", type="string", length=255, nullable=true)
     */
    private $itemno;

    /**
     * @var string
     *
     * @ORM\Column(name="text1", type="string", length=255, nullable=true)
     */
    private $text1;

    /**
     * @var string
     *
     * @ORM\Column(name="text2", type="string", length=255, nullable=true)
     */
    private $text2;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=255, nullable=true)
     */
    private $unit;

    /**
     * @var string
     *
     * @ORM\Column(name="itemgroup1", type="string", length=255, nullable=true)
     */
    private $itemgroup1;

    /**
     * @var string
     *
     * @ORM\Column(name="itemgroup2", type="string", length=255, nullable=true)
     */
    private $itemgroup2;

    /**
     * @var string
     *
     * @ORM\Column(name="itemgroup3", type="string", length=255, nullable=true)
     */
    private $itemgroup3;

    /**
     * @var string
     *
     * @ORM\Column(name="itemgroup4", type="string", length=255, nullable=true)
     */
    private $itemgroup4;

    /**
     * @var string
     *
     * @ORM\Column(name="itemgroup5", type="string", length=255, nullable=true)
     */
    private $itemgroup5;

    /**
     * @var string
     *
     * @ORM\Column(name="vattype", type="string", length=255, nullable=true)
     */
    private $vattype;

    /**
     * @var int
     *
     * @ORM\Column(name="haspermission", type="integer", nullable=true)
     */
    private $haspermission;

    /**
     * @ORM\OneToOne(targetEntity="ItemDescription", cascade={"persist", "remove"})
     */
    private $itemdescription;

    /**
     * @ORM\OneToMany(targetEntity="PriceList", mappedBy="itemno")
     */
    private $priceLists;

    /**
     * @ORM\OneToMany(targetEntity="ItemStock", mappedBy="itemno")
     */
    private $itemStocks;

    /**
     * @ORM\OneToMany(targetEntity="DiscountList", mappedBy="itemno")
     */
    private $discountLists;


    /**
     * @ORM\ManyToOne(targetEntity="ShopBundle\Entity\Group1", inversedBy="items")
     */
    private $gr1;

    /**
     * @ORM\ManyToOne(targetEntity="ShopBundle\Entity\Group2", inversedBy="items")
     */
    private $gr2;

    /**
     * @ORM\ManyToOne(targetEntity="ShopBundle\Entity\Group3", inversedBy="items")
     */
    private $gr3;

    /**
     * @ORM\ManyToOne(targetEntity="ShopBundle\Entity\Group4", inversedBy="items")
     */
    private $gr4;

    /**
     * @ORM\ManyToOne(targetEntity="ShopBundle\Entity\Group5", inversedBy="items")
     */
    private $gr5;

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
     * Set itemno
     *
     * @param string $itemno
     *
     * @return Items
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
     * Set text1
     *
     * @param string $text1
     *
     * @return Items
     */
    public function setText1($text1)
    {
        $this->text1 = $text1;

        return $this;
    }

    /**
     * Get text1
     *
     * @return string
     */
    public function getText1()
    {
        return $this->text1;
    }

    /**
     * Set text2
     *
     * @param string $text2
     *
     * @return Items
     */
    public function setText2($text2)
    {
        $this->text2 = $text2;

        return $this;
    }

    /**
     * Get text2
     *
     * @return string
     */
    public function getText2()
    {
        return $this->text2;
    }

    /**
     * Set unit
     *
     * @param string $unit
     *
     * @return Items
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
     * Set itemgroup1
     *
     * @param string $itemgroup1
     *
     * @return Items
     */
    public function setItemgroup1($itemgroup1)
    {
        $this->itemgroup1 = $itemgroup1;

        return $this;
    }

    /**
     * Get itemgroup1
     *
     * @return string
     */
    public function getItemgroup1()
    {
        return $this->itemgroup1;
    }

    /**
     * Set itemgroup2
     *
     * @param string $itemgroup2
     *
     * @return Items
     */
    public function setItemgroup2($itemgroup2)
    {
        $this->itemgroup2 = $itemgroup2;

        return $this;
    }

    /**
     * Get itemgroup2
     *
     * @return string
     */
    public function getItemgroup2()
    {
        return $this->itemgroup2;
    }

    /**
     * Set vattype
     *
     * @param string $vattype
     *
     * @return Items
     */
    public function setVattype($vattype)
    {
        $this->vattype = $vattype;

        return $this;
    }

    /**
     * Get vattype
     *
     * @return string
     */
    public function getVattype()
    {
        return $this->vattype;
    }

    /**
     * Set haspermission
     *
     * @param integer $haspermission
     *
     * @return Items
     */
    public function setHaspermission($haspermission)
    {
        $this->haspermission = $haspermission;

        return $this;
    }

    /**
     * Get haspermission
     *
     * @return int
     */
    public function getHaspermission()
    {
        return $this->haspermission;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->priceLists = new \Doctrine\Common\Collections\ArrayCollection();
        $this->itemStocks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->discountLists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set itemdescription
     *
     * @param \ShopBundle\Entity\ItemDescription $itemdescription
     *
     * @return Items
     */
    public function setItemdescription(\ShopBundle\Entity\ItemDescription $itemdescription = null)
    {
        $this->itemdescription = $itemdescription;

        return $this;
    }

    /**
     * Get itemdescription
     *
     * @return \ShopBundle\Entity\ItemDescription
     */
    public function getItemdescription()
    {
        return $this->itemdescription;
    }

    /**
     * Add priceList
     *
     * @param \ShopBundle\Entity\PriceList $priceList
     *
     * @return Items
     */
    public function addPriceList(\ShopBundle\Entity\PriceList $priceList)
    {
        $this->priceLists[] = $priceList;

        return $this;
    }

    /**
     * Remove priceList
     *
     * @param \ShopBundle\Entity\PriceList $priceList
     */
    public function removePriceList(\ShopBundle\Entity\PriceList $priceList)
    {
        $this->priceLists->removeElement($priceList);
    }

    /**
     * Get priceLists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPriceLists()
    {
        return $this->priceLists;
    }

    /**
     * Add itemStock
     *
     * @param \ShopBundle\Entity\ItemStock $itemStock
     *
     * @return Items
     */
    public function addItemStock(\ShopBundle\Entity\ItemStock $itemStock)
    {
        $this->itemStocks[] = $itemStock;

        return $this;
    }

    /**
     * Remove itemStock
     *
     * @param \ShopBundle\Entity\ItemStock $itemStock
     */
    public function removeItemStock(\ShopBundle\Entity\ItemStock $itemStock)
    {
        $this->itemStocks->removeElement($itemStock);
    }

    /**
     * Get itemStocks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItemStocks()
    {
        return $this->itemStocks;
    }

    /**
     * Add discountList
     *
     * @param \ShopBundle\Entity\DiscountList $discountList
     *
     * @return Items
     */
    public function addDiscountList(\ShopBundle\Entity\DiscountList $discountList)
    {
        $this->discountLists[] = $discountList;

        return $this;
    }

    /**
     * Remove discountList
     *
     * @param \ShopBundle\Entity\DiscountList $discountList
     */
    public function removeDiscountList(\ShopBundle\Entity\DiscountList $discountList)
    {
        $this->discountLists->removeElement($discountList);
    }

    /**
     * Get discountLists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiscountLists()
    {
        return $this->discountLists;
    }

    /**
     * Set itemgroup3
     *
     * @param string $itemgroup3
     *
     * @return Items
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

    /**
     * Set itemgroup4
     *
     * @param string $itemgroup4
     *
     * @return Items
     */
    public function setItemgroup4($itemgroup4)
    {
        $this->itemgroup4 = $itemgroup4;

        return $this;
    }

    /**
     * Get itemgroup4
     *
     * @return string
     */
    public function getItemgroup4()
    {
        return $this->itemgroup4;
    }

    /**
     * Set itemgroup5
     *
     * @param string $itemgroup5
     *
     * @return Items
     */
    public function setItemgroup5($itemgroup5)
    {
        $this->itemgroup5 = $itemgroup5;

        return $this;
    }

    /**
     * Get itemgroup5
     *
     * @return string
     */
    public function getItemgroup5()
    {
        return $this->itemgroup5;
    }


    /**
     * Set gr1
     *
     * @param \ShopBundle\Entity\Group1 $gr1
     *
     * @return Items
     */
    public function setGr1(\ShopBundle\Entity\Group1 $gr1 = null)
    {
        $this->gr1 = $gr1;

        return $this;
    }

    /**
     * Get gr1
     *
     * @return \ShopBundle\Entity\Group1
     */
    public function getGr1()
    {
        return $this->gr1;
    }

    /**
     * Set gr2
     *
     * @param \ShopBundle\Entity\Group2 $gr2
     *
     * @return Items
     */
    public function setGr2(\ShopBundle\Entity\Group2 $gr2 = null)
    {
        $this->gr2 = $gr2;

        return $this;
    }

    /**
     * Get gr2
     *
     * @return \ShopBundle\Entity\Group2
     */
    public function getGr2()
    {
        return $this->gr2;
    }

    /**
     * Set gr3
     *
     * @param \ShopBundle\Entity\Group3 $gr3
     *
     * @return Items
     */
    public function setGr3(\ShopBundle\Entity\Group3 $gr3 = null)
    {
        $this->gr3 = $gr3;

        return $this;
    }

    /**
     * Get gr3
     *
     * @return \ShopBundle\Entity\Group3
     */
    public function getGr3()
    {
        return $this->gr3;
    }

    /**
     * Set gr4
     *
     * @param \ShopBundle\Entity\Group4 $gr4
     *
     * @return Items
     */
    public function setGr4(\ShopBundle\Entity\Group4 $gr4 = null)
    {
        $this->gr4 = $gr4;

        return $this;
    }

    /**
     * Get gr4
     *
     * @return \ShopBundle\Entity\Group4
     */
    public function getGr4()
    {
        return $this->gr4;
    }

    /**
     * Set gr5
     *
     * @param \ShopBundle\Entity\Group5 $gr5
     *
     * @return Items
     */
    public function setGr5(\ShopBundle\Entity\Group5 $gr5 = null)
    {
        $this->gr5 = $gr5;

        return $this;
    }

    /**
     * Get gr5
     *
     * @return \ShopBundle\Entity\Group5
     */
    public function getGr5()
    {
        return $this->gr5;
    }
}
