<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 11.07.15
 * Time: 14:13
 */

namespace SysEleven\EpagSsl;

/**
 * Mapping information for mapping soap types to php classes
 *
 * @package SysEleven\EpagSsl\Mapping
 */
class Mapping
{

    /**
     * @var array
     */
    public $mapping = [
            'parseCSR-input' => '\SysEleven\EpagSsl\Types\ParseCsrRequest',
            'parseCSR-output' => '\SysEleven\EpagSsl\Types\ParseCsrResponse',
            'certCSRInfo' => '\SysEleven\EpagSsl\Types\CertCSRInfo',
            'certOrderData' => '\SysEleven\EpagSsl\Types\CertOrderData',
            'certAdminContact' => '\SysEleven\EpagSsl\Types\CertAdminContact',
            'certTechContact' => '\SysEleven\EpagSsl\Types\CertTechContact',
            'certOrderResult' => '\SysEleven\EpagSsl\Types\CertOrderResult',
            'certOrder-input' => '\SysEleven\EpagSsl\Types\CertOrderRequest',
            'certOrder-output' => '\SysEleven\EpagSsl\Types\CertOrderResponse',
            'certGetOrdersResult' => '\SysEleven\EpagSsl\Types\CertGetOrdersResult',
            'certGetOrdersFilter' => '\SysEleven\EpagSsl\Types\CertGetOrdersFilter',
            'certGetOrdersSort' => '\SysEleven\EpagSsl\Types\CertGetOrdersSort',
            'getOrders-input' => '\SysEleven\EpagSsl\Types\GetOrdersRequest',
            'getOrders-output' => '\SysEleven\EpagSsl\Types\GetOrdersResponse',
            'getOrderDetails-input' => '\SysEleven\EpagSsl\Types\GetOrderDetailsRequest',
            'getOrderDetails-output' => '\SysEleven\EpagSsl\Types\GetOrderDetailsResponse',
            'certOrderDetails' => '\SysEleven\EpagSsl\Types\CertOrderDetails',
            'getEvents-input' => '\SysEleven\EpagSsl\Types\GetEventsRequest',
            'getEvents-output' => '\SysEleven\EpagSsl\Types\GetEventsResponse',
            'certGetEventsFilter' => '\SysEleven\EpagSsl\Types\CertGetEventsFilter',
            'certGetEventsResult' => '\SysEleven\EpagSsl\Types\CertGetEventsResult',
            'certEvent' => '\SysEleven\EpagSsl\Types\CertGetEventsResult',
            'acknowledgeEvent-input' => '\SysEleven\EpagSsl\Types\AcknowledgeEventRequest',
            'acknowledgeEvent-output' => '\SysEleven\EpagSsl\Types\AcknowledgeEventResponse',
            'resendApproverEMail-input' => '\SysEleven\EpagSsl\Types\ResendApproverEmailRequest',
            'resendApproverEMail-output' => '\SysEleven\EpagSsl\Types\ResendApproverEmailResponse',
            'changeApproverEMail-input' => '\SysEleven\EpagSsl\Types\ChangeApproverEmailRequest',
            'changeApproverEMail-output' => '\SysEleven\EpagSsl\Types\ChangeApproverEmailResponse',
            'getApproverEmailList-input' => '\SysEleven\EpagSsl\Types\GetApproverEmailListRequest',
            'getApproverEmailList-output' => '\SysEleven\EpagSsl\Types\GetApproverEmailListResponse',
            'cancelOrder-input' => '\SysEleven\EpagSsl\Types\CancelOrderRequest',
            'cancelOrder-output' => '\SysEleven\EpagSsl\Types\CancelOrderResponse',
            'certParam' => '\SysEleven\EpagSsl\Types\CertParam',
            'certError' => '\SysEleven\EpagSsl\Types\CertError',
    ];

    /**
     * @param null $key
     * @return array|null
     */
    public function getMapping($key = null)
    {
        if (is_null($key)) {
            return $this->mapping;
        }

        if (!array_key_exists($key, $this->mapping)) {
            return null;
        }

        return $this->mapping[$key];
    }

    /**
     * @param $key
     * @param $className
     * @return $this
     */
    public function add($key, $className)
    {
        if (empty($key)) {
            throw new \BadMethodCallException('You must provide a value for key');
        }

        if (empty($className)) {
            throw new \BadMethodCallException('You must provide a value for classname');
        }

        if (!class_exists($className, true)) {
            throw new \BadMethodCallException('Class '.$className.' does not exist or cannot be autoloaded');
        }

        $this->mapping[$key] = $className;

        return $this;
    }

    /**
     * @param $key
     * @return $this
     */
    public function remove($key)
    {
        if (empty($key)) {
            throw new \BadMethodCallException('You must provide a value for key');
        }

        if (array_key_exists($key, $this->mapping)) {
            unset($this->mapping[$key]);
        }

        return $this;
    }

    /**
     * @param array $mapping
     * @return $this
     */
    public function set(array $mapping = [])
    {
        $this->mapping = $mapping;

        return $this;
    }

}