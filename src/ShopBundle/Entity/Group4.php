<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group4
 *
 * @ORM\Table(name="group4")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\Group4Repository")
 */
class Group4
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
     * @ORM\Column(name="itemgroup4", type="string", length=255, nullable=true)
     */
    private $itemgroup4;

    /**
     * @ORM\ManyToOne(targetEntity="Group3", inversedBy="itemgroups")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Group5", mappedBy="parent")
     */
    private $itemgroups;



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
     * Set itemgroup4
     *
     * @param string $itemgroup4
     *
     * @return Group4
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
     * Constructor
     */
    public function __construct()
    {
        $this->itemgroups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set parent
     *
     * @param \ShopBundle\Entity\Group3 $parent
     *
     * @return Group4
     */
    public function setParent(\ShopBundle\Entity\Group3 $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \ShopBundle\Entity\Group3
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add itemgroup
     *
     * @param \ShopBundle\Entity\Group5 $itemgroup
     *
     * @return Group4
     */
    public function addItemgroup(\ShopBundle\Entity\Group5 $itemgroup)
    {
        $this->itemgroups[] = $itemgroup;

        return $this;
    }

    /**
     * Remove itemgroup
     *
     * @param \ShopBundle\Entity\Group5 $itemgroup
     */
    public function removeItemgroup(\ShopBundle\Entity\Group5 $itemgroup)
    {
        $this->itemgroups->removeElement($itemgroup);
    }

    /**
     * Get itemgroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItemgroups()
    {
        return $this->itemgroups;
    }

    /**
     * Add item
     *
     * @param \ShopBundle\Entity\Items $item
     *
     * @return Group4
     */
    public function addItem(\ShopBundle\Entity\Items $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \ShopBundle\Entity\Items $item
     */
    public function removeItem(\ShopBundle\Entity\Items $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }
}
