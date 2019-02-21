<?php

namespace ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="ShopBundle\Repository\CompanyRepository")
 */
class Company
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
     * @ORM\Column(name="companyno", type="string", nullable=true)
     */
    private $companyno;

    /**
     * @var string
     * @ORM\Column(name="companyname", type="string", nullable=true)
     */
    private $companyname;

    /**
     * @var string
     * @ORM\Column(name="salesman", type="string", nullable=true)
     */
        private $salesman;

    /**
     * @var string
     * @ORM\Column(name="businesstype", type="string", nullable=true)
     */
    private $businesstype;

    /**
     * @var string
     * @ORM\Column(name="pricegroup", type="string", nullable=true)
     */
    private $pricegroup;

    /**
     * @var string
     * @ORM\Column(name="discountgroup1", type="string", nullable=true)
     */
    private $discountgroup1;

    /**
     * @var string
     * @ORM\Column(name="discountgroup2", type="string", nullable=true)
     */
    private $discountgroup2;

    /**
     * @ORM\ManyToOne(targetEntity="PaymentTerms", inversedBy="companys")
     */
    private $paymentterms;

    /**
     * @ORM\ManyToOne(targetEntity="DeliveryTerms", inversedBy="companys")
     */
    private $deliveryterms;

    /**
     * @ORM\ManyToOne(targetEntity="DeliveryMethods", inversedBy="companys")
     */
    private $deliverymethod;

    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="companyrefno")
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="DiscountList", mappedBy="companyno")
     */
    private $discountLists;

    /**
     * @ORM\OneToMany(targetEntity="PriceList", mappedBy="companyno")
     */
    private $pricelist;




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
     * Constructor
     */
    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->discountLists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set companyno
     *
     * @param string $companyno
     *
     * @return Company
     */
    public function setCompanyno($companyno)
    {
        $this->companyno = $companyno;

        return $this;
    }

    /**
     * Get companyno
     *
     * @return string
     */
    public function getCompanyno()
    {
        return $this->companyno;
    }

    /**
     * Set companyname
     *
     * @param string $companyname
     *
     * @return Company
     */
    public function setCompanyname($companyname)
    {
        $this->companyname = $companyname;

        return $this;
    }

    /**
     * Get companyname
     *
     * @return string
     */
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Set salesman
     *
     * @param string $salesman
     *
     * @return Company
     */
    public function setSalesman($salesman)
    {
        $this->salesman = $salesman;

        return $this;
    }

    /**
     * Get salesman
     *
     * @return string
     */
    public function getSalesman()
    {
        return $this->salesman;
    }

    /**
     * Set businesstype
     *
     * @param string $businesstype
     *
     * @return Company
     */
    public function setBusinesstype($businesstype)
    {
        $this->businesstype = $businesstype;

        return $this;
    }

    /**
     * Get businesstype
     *
     * @return string
     */
    public function getBusinesstype()
    {
        return $this->businesstype;
    }

    /**
     * Set pricegroup
     *
     * @param string $pricegroup
     *
     * @return Company
     */
    public function setPricegroup($pricegroup)
    {
        $this->pricegroup = $pricegroup;

        return $this;
    }

    /**
     * Get pricegroup
     *
     * @return string
     */
    public function getPricegroup()
    {
        return $this->pricegroup;
    }

    /**
     * Set discountgroup1
     *
     * @param string $discountgroup1
     *
     * @return Company
     */
    public function setDiscountgroup1($discountgroup1)
    {
        $this->discountgroup1 = $discountgroup1;

        return $this;
    }

    /**
     * Get discountgroup1
     *
     * @return string
     */
    public function getDiscountgroup1()
    {
        return $this->discountgroup1;
    }

    /**
     * Set discountgroup2
     *
     * @param string $discountgroup2
     *
     * @return Company
     */
    public function setDiscountgroup2($discountgroup2)
    {
        $this->discountgroup2 = $discountgroup2;

        return $this;
    }

    /**
     * Get discountgroup2
     *
     * @return string
     */
    public function getDiscountgroup2()
    {
        return $this->discountgroup2;
    }

    /**
     * Set paymentterms
     *
     * @param \ShopBundle\Entity\PaymentTerms $paymentterms
     *
     * @return Company
     */
    public function setPaymentterms(\ShopBundle\Entity\PaymentTerms $paymentterms = null)
    {
        $this->paymentterms = $paymentterms;

        return $this;
    }

    /**
     * Get paymentterms
     *
     * @return \ShopBundle\Entity\PaymentTerms
     */
    public function getPaymentterms()
    {
        return $this->paymentterms;
    }

    /**
     * Set deliveryterms
     *
     * @param \ShopBundle\Entity\DeliveryTerms $deliveryterms
     *
     * @return Company
     */
    public function setDeliveryterms(\ShopBundle\Entity\DeliveryTerms $deliveryterms = null)
    {
        $this->deliveryterms = $deliveryterms;

        return $this;
    }

    /**
     * Get deliveryterms
     *
     * @return \ShopBundle\Entity\DeliveryTerms
     */
    public function getDeliveryterms()
    {
        return $this->deliveryterms;
    }

    /**
     * Set deliverymethod
     *
     * @param \ShopBundle\Entity\DeliveryMethods $deliverymethod
     *
     * @return Company
     */
    public function setDeliverymethod(\ShopBundle\Entity\DeliveryMethods $deliverymethod = null)
    {
        $this->deliverymethod = $deliverymethod;

        return $this;
    }

    /**
     * Get deliverymethod
     *
     * @return \ShopBundle\Entity\DeliveryMethods
     */
    public function getDeliverymethod()
    {
        return $this->deliverymethod;
    }

    /**
     * Add address
     *
     * @param \ShopBundle\Entity\Address $address
     *
     * @return Company
     */
    public function addAddress(\ShopBundle\Entity\Address $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \ShopBundle\Entity\Address $address
     */
    public function removeAddress(\ShopBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add discountList
     *
     * @param \ShopBundle\Entity\DiscountList $discountList
     *
     * @return Company
     */
    public function addDiscountList(\ShopBundle\Entity\DiscountList $discountList)
    {
        $this->discountLists[] = $discountList;

        return $this;
    }

    /**
     * Remove discountList
     *
     * @param \ShopBundle\Entity\DiscountList $discountList
     */
    public function removeDiscountList(\ShopBundle\Entity\DiscountList $discountList)
    {
        $this->discountLists->removeElement($discountList);
    }

    /**
     * Get discountLists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiscountLists()
    {
        return $this->discountLists;
    }

    /**
     * Add pricelist
     *
     * @param \ShopBundle\Entity\PriceList $pricelist
     *
     * @return Company
     */
    public function addPricelist(\ShopBundle\Entity\PriceList $pricelist)
    {
        $this->pricelist[] = $pricelist;

        return $this;
    }

    /**
     * Remove pricelist
     *
     * @param \ShopBundle\Entity\PriceList $pricelist
     */
    public function removePricelist(\ShopBundle\Entity\PriceList $pricelist)
    {
        $this->pricelist->removeElement($pricelist);
    }

    /**
     * Get pricelist
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPricelist()
    {
        return $this->pricelist;
    }
}
