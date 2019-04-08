<?php

namespace PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * accountsystems
 *
 * @ORM\Table(name="accountsystems")
 * @ORM\Entity(repositoryClass="PortalBundle\Repository\accountsystemsRepository")
 */
class accountsystems
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
     * @var bool
     *
     * @ORM\Column(name="shopapp", type="boolean", nullable=true)
     */
    private $shopApp;


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
     * Set shopApp
     *
     * @param boolean $shopApp
     *
     * @return accountsystems
     */
    public function setShopApp($shopApp)
    {
        $this->shopApp = $shopApp;

        return $this;
    }

    /**
     * Get shopApp
     *
     * @return boolean
     */
    public function getShopApp()
    {
        return $this->shopApp;
    }
}
