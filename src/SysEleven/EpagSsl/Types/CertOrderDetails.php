<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 25.06.15
 * Time: 12:48
 */

namespace SysEleven\EpagSsl\Types;

/**
 * Class CertOrderDetails
 *
 * @package SysEleven\EpagSsl\Order
 */
class CertOrderDetails
{
    /**
     * @var CertOrderData
     */
    public $orderData;

    /**
     * @var CertAdminContact
     */
    public $adminContact;

    /**
     * @var CertTechContact
     */
    public $techContact;

    /**
     * @var \DateTime
     */
    public $orderDate;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $vendorId;

    /**
     * @return CertOrderData
     */
    public function getOrderData()
    {
        return $this->orderData;
    }

    /**
     * @return CertAdminContact
     */
    public function getAdminContact()
    {
        return $this->adminContact;
    }

    /**
     * @return CertTechContact
     */
    public function getTechContact()
    {
        return $this->techContact;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * @return string
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }


}