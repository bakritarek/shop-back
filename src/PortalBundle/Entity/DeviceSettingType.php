<?php

namespace PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeviceSettingType
 *
 * @ORM\Table(name="devicesettingtype")
 * @ORM\Entity(repositoryClass="PortalBundle\Repository\DeviceSettingTypeRepository")
 */
class DeviceSettingType
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
     * @ORM\Column(name="settinggroupid", type="string", length=255, nullable=true)
     */
    private $settinggroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="valuetype", type="text", nullable=true)
     */
    private $valuetype;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultvalue", type="text", nullable=true)
     */
    private $defaultvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="text", nullable=true)
     */
    private $priority;

    /**
     * @ORM\OneToMany(targetEntity="DeviceSetting", mappedBy="settingid")
     */
    private $devicesetting;

    /**
     * @ORM\OneToMany(targetEntity="PortalBundle\Entity\DeviceSettingDescription", mappedBy="settingid")
     */
    private $settingdescription;


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
     * Set settinggroupid
     *
     * @param string $settinggroupid
     *
     * @return DeviceSettingType
     */
    public function setSettinggroupid($settinggroupid)
    {
        $this->settinggroupid = $settinggroupid;

        return $this;
    }

    /**
     * Get settinggroupid
     *
     * @return string
     */
    public function getSettinggroupid()
    {
        return $this->settinggroupid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DeviceSettingType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set valuetype
     *
     * @param string $valuetype
     *
     * @return DeviceSettingType
     */
    public function setValuetype($valuetype)
    {
        $this->valuetype = $valuetype;

        return $this;
    }

    /**
     * Get valuetype
     *
     * @return string
     */
    public function getValuetype()
    {
        return $this->valuetype;
    }

    /**
     * Set defaultvalue
     *
     * @param string $defaultvalue
     *
     * @return DeviceSettingType
     */
    public function setDefaultvalue($defaultvalue)
    {
        $this->defaultvalue = $defaultvalue;

        return $this;
    }

    /**
     * Get defaultvalue
     *
     * @return string
     */
    public function getDefaultvalue()
    {
        return $this->defaultvalue;
    }

    /**
     * Set priority
     *
     * @param string $priority
     *
     * @return DeviceSettingType
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->devicesetting = new \Doctrine\Common\Collections\ArrayCollection();
        $this->settingdescription = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add devicesetting
     *
     * @param \PortalBundle\Entity\DeviceSetting $devicesetting
     *
     * @return DeviceSettingType
     */
    public function addDevicesetting(\PortalBundle\Entity\DeviceSetting $devicesetting)
    {
        $this->devicesetting[] = $devicesetting;

        return $this;
    }

    /**
     * Remove devicesetting
     *
     * @param \PortalBundle\Entity\DeviceSetting $devicesetting
     */
    public function removeDevicesetting(\PortalBundle\Entity\DeviceSetting $devicesetting)
    {
        $this->devicesetting->removeElement($devicesetting);
    }

    /**
     * Get devicesetting
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDevicesetting()
    {
        return $this->devicesetting;
    }

    /**
     * Add settingdescription
     *
     * @param \PortalBundle\Entity\DeviceSettingDescription $settingdescription
     *
     * @return DeviceSettingType
     */
    public function addSettingdescription(\PortalBundle\Entity\DeviceSettingDescription $settingdescription)
    {
        $this->settingdescription[] = $settingdescription;

        return $this;
    }

    /**
     * Remove settingdescription
     *
     * @param \PortalBundle\Entity\DeviceSettingDescription $settingdescription
     */
    public function removeSettingdescription(\PortalBundle\Entity\DeviceSettingDescription $settingdescription)
    {
        $this->settingdescription->removeElement($settingdescription);
    }

    /**
     * Get settingdescription
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSettingdescription()
    {
        return $this->settingdescription;
    }
}
