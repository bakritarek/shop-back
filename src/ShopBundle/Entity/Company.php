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
     * @var string
     * @ORM\Column(name="paymentterms", type="string", nullable=true)
     */
    private $paymentterms;

    /**
     * @var string
     * @ORM\Column(name="deliveryterms", type="string", nullable=true)
     */
    private $deliveryterms;

    /**
     * @var string
     * @ORM\Column(name="deliverymethod", type="string", nullable=true)
     */
    private $deliverymethod;



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
     * @param string $paymentterms
     *
     * @return Company
     */
    public function setPaymentterms($paymentterms)
    {
        $this->paymentterms = $paymentterms;

        return $this;
    }

    /**
     * Get paymentterms
     *
     * @return string
     */
    public function getPaymentterms()
    {
        return $this->paymentterms;
    }

    /**
     * Set deliveryterms
     *
     * @param string $deliveryterms
     *
     * @return Company
     */
    public function setDeliveryterms($deliveryterms)
    {
        $this->deliveryterms = $deliveryterms;

        return $this;
    }

    /**
     * Get deliveryterms
     *
     * @return string
     */
    public function getDeliveryterms()
    {
        return $this->deliveryterms;
    }

    /**
     * Set deliverymethod
     *
     * @param string $deliverymethod
     *
     * @return Company
     */
    public function setDeliverymethod($deliverymethod)
    {
        $this->deliverymethod = $deliverymethod;

        return $this;
    }

    /**
     * Get deliverymethod
     *
     * @return string
     */
    public function getDeliverymethod()
    {
        return $this->deliverymethod;
    }
}
