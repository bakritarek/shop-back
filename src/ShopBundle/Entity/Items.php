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
}
