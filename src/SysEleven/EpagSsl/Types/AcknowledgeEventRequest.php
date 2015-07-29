<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 14.07.15
 * Time: 21:38
 */

namespace SysEleven\EpagSsl\Types;


class AcknowledgeEventRequest extends AbstractRequest
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
}