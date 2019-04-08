<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group5
 *
 * @ORM\Table(name="group5")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\Group5Repository")
 */
class Group5
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
     * @ORM\Column(name="itemgroup5", type="string", length=255, nullable=true)
     */
    private $itemgroup5;

    /**
     * @ORM\ManyToOne(targetEntity="Group4", inversedBy="itemgroups")
     */
    private $parent;



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
     * Set itemgroup5
     *
     * @param string $itemgroup5
     *
     * @return Group5
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
     * Set parent
     *
     * @param \ShopBundle\Entity\Group4 $parent
     *
     * @return Group5
     */
    public function setParent(\ShopBundle\Entity\Group4 $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \ShopBundle\Entity\Group4
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add item
     *
     * @param \ShopBundle\Entity\Items $item
     *
     * @return Group5
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
