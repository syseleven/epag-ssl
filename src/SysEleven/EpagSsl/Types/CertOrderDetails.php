<?php
/**
 * This file is part of the syseleven/epag-ssl package
 * (c) SysEleven GmbH <info@syseleven.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author M. Seifert <m.seifert@syseleven.de
 * @version 0.9.1
 * @package SysEleven\EpagSsl\Types
 */

namespace SysEleven\EpagSsl\Types;

/**
 * Class CertOrderDetails
 * @package SysEleven\EpagSsl\Types
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