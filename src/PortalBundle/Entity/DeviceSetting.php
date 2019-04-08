<?php

namespace PortalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeviceSetting
 *
 * @ORM\Table(name="devicesetting")
 * @ORM\Entity(repositoryClass="PortalBundle\Repository\DeviceSettingRepository")
 */
class DeviceSetting
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
     * @ORM\ManyToOne(targetEntity="DeviceSettingType", inversedBy="devicesetting")
     */
    private $settingid;

    /**
     * @var string
     *
     * @ORM\Column(name="companyid", type="string", length=255, nullable=true)
     */
    private $companyid;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceid", type="string", length=255, nullable=true)
     */
    private $deviceid;

    /**
     * @var string
     *
     * @ORM\Column(name="groupid", type="string", length=255, nullable=true)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=255, nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=true)
     */
    private $value;


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
     * @return DeviceSetting
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
     * Set companyid
     *
     * @param string $companyid
     *
     * @return DeviceSetting
     */
    public function setCompanyid($companyid)
    {
        $this->companyid = $companyid;

        return $this;
    }

    /**
     * Get companyid
     *
     * @return string
     */
    public function getCompanyid()
    {
        return $this->companyid;
    }

    /**
     * Set groupid
     *
     * @param string $groupid
     *
     * @return DeviceSetting
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return string
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set userid
     *
     * @param string $userid
     *
     * @return DeviceSetting
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return DeviceSetting
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set deviceid
     *
     * @param string $deviceid
     *
     * @return DeviceSetting
     */
    public function setDeviceid($deviceid)
    {
        $this->deviceid = $deviceid;

        return $this;
    }

    /**
     * Get deviceid
     *
     * @return string
     */
    public function getDeviceid()
    {
        return $this->deviceid;
    }
}
