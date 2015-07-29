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
 * Class CertOrderRequest
 * @package SysEleven\EpagSsl\Types
 */
class CertOrderRequest extends AbstractRequest
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
     * @var bool
     */
    public $testOrder = false;

    public function __construct(CertOrderData $orderData, CertAdminContact $adminContact, CertTechContact $techContact, CertAuth $auth ,$testOrder = false)
    {
        $this->orderData = $orderData;
        $this->adminContact = $adminContact;
        $this->techContact = $techContact;
        $this->testOrder = $testOrder;
        $this->auth = $auth;
    }

    /**
     * @return mixed
     */
    public function getOrderData()
    {
        return $this->orderData;
    }

    /**
     * @param mixed $orderData
     */
    public function setOrderData($orderData)
    {
        $this->orderData = $orderData;
    }

    /**
     * @return mixed
     */
    public function getAdminContact()
    {
        return $this->adminContact;
    }

    /**
     * @param mixed $adminContact
     */
    public function setAdminContact($adminContact)
    {
        $this->adminContact = $adminContact;
    }

    /**
     * @return mixed
     */
    public function getTechContact()
    {
        return $this->techContact;
    }

    /**
     * @param mixed $techContact
     */
    public function setTechContact($techContact)
    {
        $this->techContact = $techContact;
    }

    /**
     * @return boolean
     */
    public function isTestOrder()
    {
        return $this->testOrder;
    }

    /**
     * @param boolean $testOrder
     */
    public function setTestOrder($testOrder)
    {
        $this->testOrder = $testOrder;
    }


}