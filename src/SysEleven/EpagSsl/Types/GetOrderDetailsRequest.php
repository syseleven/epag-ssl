<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 13.07.15
 * Time: 22:21
 */

namespace SysEleven\EpagSsl\Types;


class GetOrderDetailsRequest extends AbstractRequest
{

    /**
     * @var int
     */
    public $orderId;

    public function __construct($orderId, CertAuth $auth)
    {
        $this->orderId = $orderId;
        $this->auth = $auth;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
}