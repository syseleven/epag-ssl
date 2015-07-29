<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 19.07.15
 * Time: 13:16
 */

namespace SysEleven\EpagSsl\Types;


class GetApproverEmailListRequest extends AbstractRequest
{

    public $product;

    public $hostName;

    public function __construct($product, $hostname, CertAuth $auth = null)
    {
        $this->product  = $product;
        $this->hostName = $hostname;
        $this->auth = $auth;
    }

}