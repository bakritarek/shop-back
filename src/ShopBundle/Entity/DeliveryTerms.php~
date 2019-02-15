<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryTerms
 *
 * @ORM\Table(name="delivery_terms")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\DeliveryTermsRepository")
 */
class DeliveryTerms
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
     * @ORM\Column(name="globalid", type="string", length=255, nullable=true)
     */
    private $globalid;

    /**
     * @var string
     *
     * @ORM\Column(name="term", type="string", length=255, nullable=true)
     */
    private $term;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="importid", type="text", nullable=true)
     */
    private $importid;

    /**
     * @var int
     *
     * @ORM\Column(name="satelliteid", type="integer", nullable=true)
     */
    private $satelliteid;

    /**
     * @var int
     *
     * @ORM\Column(name="sourceid", type="integer", nullable=true)
     */
    private $sourceid;


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
     * Set globalid
     *
     * @param string $globalid
     *
     * @return DeliveryTerms
     */
    public function setGlobalid($globalid)
    {
        $this->globalid = $globalid;

        return $this;
    }

    /**
     * Get globalid
     *
     * @return string
     */
    public function getGlobalid()
    {
        return $this->globalid;
    }

    /**
     * Set term
     *
     * @param string $term
     *
     * @return DeliveryTerms
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return DeliveryTerms
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set importid
     *
     * @param string $importid
     *
     * @return DeliveryTerms
     */
    public function setImportid($importid)
    {
        $this->importid = $importid;

        return $this;
    }

    /**
     * Get importid
     *
     * @return string
     */
    public function getImportid()
    {
        return $this->importid;
    }

    /**
     * Set satelliteid
     *
     * @param integer $satelliteid
     *
     * @return DeliveryTerms
     */
    public function setSatelliteid($satelliteid)
    {
        $this->satelliteid = $satelliteid;

        return $this;
    }

    /**
     * Get satelliteid
     *
     * @return int
     */
    public function getSatelliteid()
    {
        return $this->satelliteid;
    }

    /**
     * Set sourceid
     *
     * @param integer $sourceid
     *
     * @return DeliveryTerms
     */
    public function setSourceid($sourceid)
    {
        $this->sourceid = $sourceid;

        return $this;
    }

    /**
     * Get sourceid
     *
     * @return int
     */
    public function getSourceid()
    {
        return $this->sourceid;
    }
}
