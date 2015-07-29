<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 13.07.15
 * Time: 22:24
 */

namespace SysEleven\EpagSsl\Types;


class GetOrderDetailsResponse extends AbstractResponse
{
    /**
     * @var CertOrderDetails
     */
    public $result;
}