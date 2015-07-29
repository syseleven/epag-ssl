<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 19.07.15
 * Time: 14:03
 */

namespace SysEleven\EpagSsl\Types;


class CancelOrderRequest extends AbstractRequest
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $reason;

    public function __construct($orderId, CertAuth $auth, $reason = null)
    {
        $this->orderId = $orderId;
        $this->reason  = $reason;
        $this->auth    = $auth;
    }
}