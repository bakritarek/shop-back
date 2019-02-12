<?php

namespace WBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * App
 *
 * @ORM\Table(name="app")
 * @ORM\Entity(repositoryClass="WBBundle\Repository\AppRepository")
 */
class App
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
     * @ORM\Column(name="systemid", type="string", length=255)
     */
    private $systemid;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;


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
     * Set systemid
     *
     * @param string $systemid
     *
     * @return App
     */
    public function setSystemid($systemid)
    {
        $this->systemid = $systemid;

        return $this;
    }

    /**
     * Get systemid
     *
     * @return string
     */
    public function getSystemid()
    {
        return $this->systemid;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return App
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}

