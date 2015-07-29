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
 * Class GetApproverEmailListRequest
 * @package SysEleven\EpagSsl\Types
 */
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