<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 23.06.15
 * Time: 18:51
 */

namespace SysEleven\EpagSsl;

use SysEleven\EpagSsl\Types\AcknowledgeEventRequest;
use SysEleven\EpagSsl\Types\CancelOrderRequest;
use SysEleven\EpagSsl\Types\CertAdminContact;
use SysEleven\EpagSsl\Types\CertAuth;
use SysEleven\EpagSsl\Types\CertGetEventsFilter;
use SysEleven\EpagSsl\Types\CertGetOrdersFilter;
use SysEleven\EpagSsl\Types\CertGetOrdersSort;
use SysEleven\EpagSsl\Types\CertOrderData;
use SysEleven\EpagSsl\Types\CertOrderRequest;
use SysEleven\EpagSsl\Types\CertTechContact;
use SysEleven\EpagSsl\Types\ChangeApproverEmailRequest;
use SysEleven\EpagSsl\Types\GetApproverEmailListRequest;
use SysEleven\EpagSsl\Types\GetEventsRequest;
use SysEleven\EpagSsl\Types\GetOrderDetailsRequest;
use SysEleven\EpagSsl\Types\GetOrdersRequest;
use SysEleven\EpagSsl\Types\ParseCsrRequest;
use SysEleven\EpagSsl\Types\ParseCsrResponse;
use SysEleven\EpagSsl\Types\ResendApproverEMailRequest;
use Zend\Soap\Client;

class Epag
{
    /**
     * @var string
     */
    private $wsdl = null;

    /**
     * @var string
     */
    private $username = null;

    /**
     * @var string
     */
    private $password = null;

    /**
     * @var boolean
     */
    private $testmode = false;

    /**
     * @var Client
     */
    private $soapClient = null;

    /**
     * @var Mapping $mapping
     */
    private $mapping = null;

    /**
     * @param $username
     * @param $password
     * @param bool|false $testMode
     * @param null $wsdl
     * @param null $mapping
     */
    public function __construct($username, $password, $testMode = false, $wsdl = null, $mapping = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->testmode = $testMode;

        if (!is_null($wsdl)) {
            $this->wsdl = $wsdl;
        }

        if (!is_null($mapping) && $mapping instanceof Mapping) {
            $this->mapping = $mapping;
        }
    }


    /**
     * @param $csr
     * @param $product
     * @param CertAuth|null $auth
     * @return ParseCsrResponse
     */
    public function parseCsr($csr, $product, CertAuth $auth = null)
    {
        if (empty($csr)) {
            throw new \BadMethodCallException('You must provide a csr to parse');
        }

        if (empty($product)) {
            throw new \BadMethodCallException('You must provide a product');
        }

        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new ParseCsrRequest($auth, $csr, $product);

        $response = $this->getClient()->parseCSR($request);

        return $response;
    }


    /**
     * @param CertOrderData $orderData
     * @param CertAdminContact $adminContact
     * @param CertTechContact $techContact
     * @param bool|false $testOrder
     * @param CertAuth $auth
     * @return CertOrderResponse
     */
    public function certOrder(CertOrderData $orderData, CertAdminContact $adminContact, CertTechContact $techContact, $testOrder = false, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new CertOrderRequest($orderData, $adminContact, $techContact, $auth, $testOrder);

        return $this->getClient()->certOrder($request);
    }

    /**
     * @param CertGetOrdersFilter $filter
     * @param CertGetOrdersSort $sort
     * @param CertAuth|null $auth
     * @return mixed
     */
    public function getOrders(CertGetOrdersFilter $filter, CertGetOrdersSort $sort, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new GetOrdersRequest($filter, $sort, $auth);

        return $this->getClient()->getOrders($request);
    }

    /**
     * @param $orderId
     * @param CertAuth|null $auth
     * @return mixed
     */
    public function getOrderDetails($orderId, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new GetOrderDetailsRequest($orderId, $auth);

        return $this->getClient()->getOrderDetails($request);
    }

    public function getEvents(CertGetEventsFilter $filter, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }
        $request = new GetEventsRequest($filter, $auth);

        return $this->getClient()->getEvents($request);
    }

    public function acknowledgeEvent($eventId, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new AcknowledgeEventRequest($eventId, $auth);

        return $this->getClient()->acknowledgeEvent($request);
    }

    public function resendApproverEMail($orderId, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new ResendApproverEMailRequest($orderId, $auth);

        return $this->getClient()->resendApproverEMail($request);
    }

    public function changeApproverEMail($orderId, $email, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new ChangeApproverEmailRequest($orderId, $email, $auth);

        return $this->getClient()->changeApproverEMail($request);
    }

    public function getApproverEmailList($product, $hostname, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new GetApproverEmailListRequest($product, $hostname, $auth);

        return $this->getClient()->getApproverEmailList($request);
    }

    public function cancelOrder($orderId, $reason = null, CertAuth $auth = null)
    {
        if (is_null($auth)) {
            $auth = $this->getAuth();
        }

        $request = new CancelOrderRequest($orderId, $auth, $reason);

        return $this->getClient()->cancelOrder($request);
    }

    /**
     * @return CertAuth
     */
    public function getAuth()
    {
        if (is_null($this->username)) {
            throw new \RuntimeException('No username configured');
        }

        if (is_null($this->password)) {
            throw new \RuntimeException('No password configured');
        }

        $auth = new CertAuth($this->username, $this->password);

        return $auth;
    }

    /**
     * @param $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->soapClient = $client;

        return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        if (!is_null($this->soapClient) && is_object($this->soapClient)) {
            return $this->soapClient;
        }

        if (is_null($this->getWsdl())) {
            throw new \BadMethodCallException('No wsdl given');
        }


        $options = [];

        if (!is_null($this->mapping) && $this->mapping instanceof Mapping) {
            $options['classmap'] = $this->mapping->getMapping();
        }

        $client = new Client($this->getWsdl(), $options);

        $this->soapClient = $client;

        return $this->soapClient;
    }

    /**
     * @return string
     */
    public function getWsdl()
    {
        return $this->wsdl;
    }

    /**
     * @param string $wsdl
     */
    public function setWsdl($wsdl)
    {
        $this->wsdl = $wsdl;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return boolean
     */
    public function isTestmode()
    {
        return $this->testmode;
    }

    /**
     * @param boolean $testmode
     */
    public function setTestmode($testmode)
    {
        $this->testmode = $testmode;
    }

    /**
     * @return Mapping
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * @param Mapping $mapping
     */
    public function setMapping($mapping)
    {
        $this->mapping = $mapping;
    }

}