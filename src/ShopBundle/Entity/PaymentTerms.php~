<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentTerms
 *
 * @ORM\Table(name="payment_terms")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\PaymentTermsRepository")
 */
class PaymentTerms
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
     * @ORM\Column(name="globalid", type="text", nullable=true)
     */
    private $globalid;

    /**
     * @var string
     *
     * @ORM\Column(name="term", type="text", nullable=true)
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
     * @ORM\OneToMany(targetEntity="Company", mappedBy="paymentterms")
     */
    private $companys;


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
     * @return PaymentTerms
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
     * @return PaymentTerms
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
     * @return PaymentTerms
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
     * @return PaymentTerms
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
     * @return PaymentTerms
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
     * @return PaymentTerms
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->companys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add company
     *
     * @param \ShopBundle\Entity\Company $company
     *
     * @return PaymentTerms
     */
    public function addCompany(\ShopBundle\Entity\Company $company)
    {
        $this->companys[] = $company;

        return $this;
    }

    /**
     * Remove company
     *
     * @param \ShopBundle\Entity\Company $company
     */
    public function removeCompany(\ShopBundle\Entity\Company $company)
    {
        $this->companys->removeElement($company);
    }

    /**
     * Get companys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCompanys()
    {
        return $this->companys;
    }
}
