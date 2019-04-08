<?php

namespace PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeviceSettingDescription
 *
 * @ORM\Table(name="devicesettingdescription")
 * @ORM\Entity(repositoryClass="PortalBundle\Repository\DeviceSettingDescriptionRepository")
 */
class DeviceSettingDescription
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
     * @ORM\JoinColumn(name="settingid")
     * @ORM\ManyToOne(targetEntity="PortalBundle\Entity\DeviceSettingType", inversedBy="settingdescription")
     */
    private $settingid;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="text", nullable=true)
     */
    private $locale;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


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
     * Set settingid
     *
     * @param string $settingid
     *
     * @return DeviceSettingDescription
     */
    public function setSettingid($settingid)
    {
        $this->settingid = $settingid;

        return $this;
    }

    /**
     * Get settingid
     *
     * @return string
     */
    public function getSettingid()
    {
        return $this->settingid;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return DeviceSettingDescription
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return DeviceSettingDescription
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
