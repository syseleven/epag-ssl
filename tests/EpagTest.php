<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 12.07.15
 * Time: 12:04
 */

namespace SysEleven\EpagSsl\Tests;


use SysEleven\EpagSsl\Epag;
use SysEleven\EpagSsl\Mapping;
use SysEleven\EpagSsl\Types\CertAdminContact;
use SysEleven\EpagSsl\Types\CertError;
use SysEleven\EpagSsl\Types\CertGetEventsFilter;
use SysEleven\EpagSsl\Types\CertGetOrdersFilter;
use SysEleven\EpagSsl\Types\CertGetOrdersSort;
use SysEleven\EpagSsl\Types\CertOrderData;
use SysEleven\EpagSsl\Types\CertOrderRequest;
use SysEleven\EpagSsl\Types\CertParam;
use SysEleven\EpagSsl\Types\CertTechContact;
use SysEleven\EpagSsl\Types\GetOrderDetailsResponse;
use SysEleven\EpagSsl\Types\GetOrdersRequest;
use SysEleven\EpagSsl\Types\ParseCsrRequest;
use SysEleven\EpagSsl\Types\ParseCsrResponse;

class EpagTest extends \PHPUnit_Framework_TestCase
{

    public $wsdl = 'https://soap.epnic.net/cert_order/?wsdl';

    public $username = 'username';

    public $password = 'password';

    public $testMode = true;


    public function testGetClient()
    {

        $client = $this->getEpagClient();

        $this->assertEquals($this->username, $client->getUsername());
        $this->assertEquals($this->password, $client->getPassword());
        $this->assertEquals($this->wsdl, $client->getWsdl());
        $this->assertEquals($this->getMapping(), $client->getMapping());
        $this->assertEquals($this->testMode, $client->isTestmode());

        $soapClient = $client->getClient();

        $classMap = $soapClient->getClassmap();

        $this->assertNotCount(0, $classMap);
    }

    public function testGetAuth()
    {
        $client = $this->getEpagClient();

        $auth = $client->getAuth();

        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\CertAuth', $auth);
        $this->assertEquals($this->username, $auth->getUsername());
        $this->assertEquals($this->password, $auth->getPassword());
    }

    public function testParseCSR()
    {
        $csr = file_get_contents(dirname(__FILE__).'/fixtures/csr.pem');
        $product = 'SSLWebServerWC';

        $client = $this->getEpagClient();
        $soap = $this->getMockClient();
        $client->setClient($soap);

        /**
         * @var ParseCsrRequest $request
         */
        $request = $client->parseCsr($csr, $product);

        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\ParseCsrRequest', $request);
        $this->assertEquals($csr, $request->getCsr());
        $this->assertEquals($product, $request->getProduct());
        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\CertAuth', $request->getAuth());

    }

    public function testCertOrder()
    {
        $client = $this->getEpagClient();
        $soap = $this->getMockClient();
        $client->setClient($soap);

        $orderData = new CertOrderData();
        $adminContact = new CertAdminContact();
        $techContact = new CertTechContact();

        /**
         * @var CertOrderRequest $request
         */
        $request = $client->certOrder($orderData, $adminContact, $techContact, true);

        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\CertOrderRequest', $request);
        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\CertAuth', $request->getAuth());
        $this->assertEquals(true, $request->isTestOrder());
    }

    public function testGetOrders()
    {
        $client = $this->getEpagClient();
        $soap = $this->getMockClient();
        $client->setClient($soap);

        /**
         * @var GetOrdersRequest $request
         */
        $request = $client->getOrders(new CertGetOrdersFilter(), new CertGetOrdersSort('orderDate', 'DESC'));
        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\GetOrdersRequest', $request);
        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\CertGetOrdersSort', $request->getSort());
        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\CertGetOrdersFilter', $request->getFilters());

        $this->assertEquals('orderDate', $request->getSort()->getSortBy());
        $this->assertEquals('DESC', $request->getSort()->getSortOrder());
    }

    public function testGetOrderDetails()
    {
        $client = $this->getEpagClient();
        $soap = $this->getMockClient();
        $client->setClient($soap);

        /**
         * @var GetOrderDetailsResponse $request
         */
        $request = $client->getOrderDetails(1);

        $this->assertInstanceOf('\SysEleven\EpagSsl\Types\GetOrderDetailsRequest', $request);
    }


    public function getMockClient()
    {
        return new MockSoap();
    }

    public function getEpagClient()
    {

        $username = 'username';
        $password = 'password';
        $testMode = true;


        $client = new Epag($username, $password, $testMode, $this->wsdl, $this->getMapping());

        return $client;
    }

    public function getMapping()
    {
        $mapping = new Mapping();

        return $mapping;
    }
}

class MockSoap
{
    public function parseCSR($arg)
    {
        return $arg;
    }

    public function certOrder($arg)
    {
        return $arg;
    }

    public function getOrders($arg)
    {
        return $arg;
    }

    public function getOrderDetails($arg)
    {
        return $arg;
    }


}