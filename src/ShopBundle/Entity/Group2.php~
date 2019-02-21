<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group2
 *
 * @ORM\Table(name="group2")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\Group2Repository")
 */
class Group2
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
     * @ORM\Column(name="itemgroup2", type="string", length=255, nullable=true)
     */
    private $itemgroup2;

    /**
     * @ORM\ManyToOne(targetEntity="Group1", inversedBy="itemgroups")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Group3", mappedBy="parent")
     */
    private $itemgroups;

    /**
     * @ORM\OneToMany(targetEntity="Items", mappedBy="gr2")
     */
    private $items;


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
     * Set itemgroup2
     *
     * @param string $itemgroup2
     *
     * @return Group2
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
     * Constructor
     */
    public function __construct()
    {
        $this->itemgroups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set parent
     *
     * @param \ShopBundle\Entity\Group1 $parent
     *
     * @return Group2
     */
    public function setParent(\ShopBundle\Entity\Group1 $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \ShopBundle\Entity\Group1
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add itemgroup
     *
     * @param \ShopBundle\Entity\Group3 $itemgroup
     *
     * @return Group2
     */
    public function addItemgroup(\ShopBundle\Entity\Group3 $itemgroup)
    {
        $this->itemgroups[] = $itemgroup;

        return $this;
    }

    /**
     * Remove itemgroup
     *
     * @param \ShopBundle\Entity\Group3 $itemgroup
     */
    public function removeItemgroup(\ShopBundle\Entity\Group3 $itemgroup)
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
     * @return Group2
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
