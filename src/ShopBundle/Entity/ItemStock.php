<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemStock
 *
 * @ORM\Table(name="item_stock")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\ItemStockRepository")
 */
class ItemStock
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
     * @var string
     *
     * @ORM\Column(name="locationid", type="text", nullable=true)
     */
    private $locationid;

    /**
     * @ORM\ManyToOne(targetEntity="Items", inversedBy="itemStocks")
     */
    private $itemno;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="float", nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="text", nullable=true)
     */
    private $unit;


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
     * @return ItemStock
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
     * Set locationid
     *
     * @param string $locationid
     *
     * @return ItemStock
     */
    public function setLocationid($locationid)
    {
        $this->locationid = $locationid;

        return $this;
    }

    /**
     * Get locationid
     *
     * @return string
     */
    public function getLocationid()
    {
        return $this->locationid;
    }



    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return ItemStock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }



    /**
     * Set unit
     *
     * @param string $unit
     *
     * @return ItemStock
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
     * Set itemno
     *
     * @param \ShopBundle\Entity\Items $itemno
     *
     * @return ItemStock
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
