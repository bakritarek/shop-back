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
     * @ORM\OneToMany(targetEntity="ShopBundle\Entity\Picture", mappedBy="item")
     */
    private $pictures;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=255, nullable=true)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;


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
     * Add picture
     *
     * @param \ShopBundle\Entity\Picture $picture
     *
     * @return Items
     */
    public function addPicture(\ShopBundle\Entity\Picture $picture)
    {
        $this->pictures[] = $picture;

        return $this;
    }

    /**
     * Remove picture
     *
     * @param \ShopBundle\Entity\Picture $picture
     */
    public function removePicture(\ShopBundle\Entity\Picture $picture)
    {
        $this->pictures->removeElement($picture);
    }

    /**
     * Get pictures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Set ean
     *
     * @param string $ean
     *
     * @return Items
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Items
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
