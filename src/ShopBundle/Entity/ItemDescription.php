<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemDescription
 *
 * @ORM\Table(name="item_description")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\ItemDescriptionRepository")
 */
class ItemDescription
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
     * @var int
     *
     * @ORM\Column(name="sortorder", type="integer", nullable=true)
     */
    private $sortorder;

    /**
     * @var string
     *
     * @ORM\Column(name="itemno", type="text", nullable=true)
     */
    private $itemno;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="textgroup", type="text", nullable=true)
     */
    private $textgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;


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
     * @return ItemDescription
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
     * Set sortorder
     *
     * @param integer $sortorder
     *
     * @return ItemDescription
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    /**
     * Get sortorder
     *
     * @return int
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }

    /**
     * Set itemno
     *
     * @param string $itemno
     *
     * @return ItemDescription
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
     * Set type
     *
     * @param string $type
     *
     * @return ItemDescription
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set textgroup
     *
     * @param string $textgroup
     *
     * @return ItemDescription
     */
    public function setTextgroup($textgroup)
    {
        $this->textgroup = $textgroup;

        return $this;
    }

    /**
     * Get textgroup
     *
     * @return string
     */
    public function getTextgroup()
    {
        return $this->textgroup;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return ItemDescription
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
}
