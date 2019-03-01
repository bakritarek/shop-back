<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group3
 *
 * @ORM\Table(name="group3")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\Group3Repository")
 */
class Group3
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
     * @ORM\Column(name="itemgroup3", type="string", length=255, nullable=true)
     */
    private $itemgroup3;

    /**
     * @ORM\ManyToOne(targetEntity="Group2", inversedBy="itemgroups")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Group4", mappedBy="parent")
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
     * Set itemgroup3
     *
     * @param string $itemgroup3
     *
     * @return Group3
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
     * Constructor
     */
    public function __construct()
    {
        $this->itemgroups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set parent
     *
     * @param \ShopBundle\Entity\Group2 $parent
     *
     * @return Group3
     */
    public function setParent(\ShopBundle\Entity\Group2 $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \ShopBundle\Entity\Group2
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add itemgroup
     *
     * @param \ShopBundle\Entity\Group4 $itemgroup
     *
     * @return Group3
     */
    public function addItemgroup(\ShopBundle\Entity\Group4 $itemgroup)
    {
        $this->itemgroups[] = $itemgroup;

        return $this;
    }

    /**
     * Remove itemgroup
     *
     * @param \ShopBundle\Entity\Group4 $itemgroup
     */
    public function removeItemgroup(\ShopBundle\Entity\Group4 $itemgroup)
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
     * @return Group3
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
