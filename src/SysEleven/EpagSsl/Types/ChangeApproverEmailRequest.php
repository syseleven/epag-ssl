<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 19.07.15
 * Time: 12:22
 */

namespace SysEleven\EpagSsl\Types;


class ChangeApproverEmailRequest extends AbstractRequest
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $email;

    public function __construct($orderId, $email, CertAuth $auth)
    {
        $this->orderId = $orderId;
        $this->email = $email;

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

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}