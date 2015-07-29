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
 * Class CertOrderData
 * @package SysEleven\EpagSsl\Types
 */
class CertOrderData
{

    /**
     * @var string
     */
    public $product = '';

    /**
     * @var string
     */
    public $orderType = 'Register';

    /**
     * @var int
     */
    public $period = 1;

    /**
     * @var string
     */
    public $contactEmail = '';

    /**
     * @var string
     */
    public $csr = '';

    /**
     * @var string
     */
    public $hostName = '';

    /**
     * @var array
     */
    public $dnsNames = [];

    /**
     * @var string
     */
    public $webserverType = 'Other';

    /**
     * @var null
     */
    public $codeSigningType = null;

    /**
     * @var string
     */
    public $approverEmail = '';

    /**
     * @param string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
    }

    /**
     * @param int $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * @param string $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }

    /**
     * @param string $csr
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
    }

    /**
     * @param string $hostName
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
    }

    /**
     * @param array $dnsNames
     */
    public function setDnsNames($dnsNames)
    {
        $this->dnsNames = $dnsNames;
    }

    /**
     * @param string $webserverType
     */
    public function setWebserverType($webserverType)
    {
        $this->webserverType = $webserverType;
    }

    /**
     * @param null $codeSigningType
     */
    public function setCodeSigningType($codeSigningType)
    {
        $this->codeSigningType = $codeSigningType;
    }

    /**
     * @param string $approverEmail
     */
    public function setApproverEmail($approverEmail)
    {
        $this->approverEmail = $approverEmail;
    }



}