<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group1
 *
 * @ORM\Table(name="group1")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\Group1Repository")
 */
class Group1
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
     * @ORM\Column(name="itemgroup1", type="string", length=255, nullable=true)
     */
    private $itemgroup1;

    /**
     * @ORM\OneToMany(targetEntity="Group2", mappedBy="parent")
     */
    private $itemgroups;

    /**
     * @ORM\OneToMany(targetEntity="ShopBundle\Entity\Items", mappedBy="gr1")
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
     * Set itemgroup1
     *
     * @param string $itemgroup1
     *
     * @return Group1
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
     * Constructor
     */
    public function __construct()
    {
        $this->itemgroups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add itemgroup
     *
     * @param \ShopBundle\Entity\Group2 $itemgroup
     *
     * @return Group1
     */
    public function addItemgroup(\ShopBundle\Entity\Group2 $itemgroup)
    {
        $this->itemgroups[] = $itemgroup;

        return $this;
    }

    /**
     * Remove itemgroup
     *
     * @param \ShopBundle\Entity\Group2 $itemgroup
     */
    public function removeItemgroup(\ShopBundle\Entity\Group2 $itemgroup)
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
     * @return Group1
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
