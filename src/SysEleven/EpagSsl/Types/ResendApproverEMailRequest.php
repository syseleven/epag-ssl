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
 * Class ResendApproverEMailRequest
 * @package SysEleven\EpagSsl\Types
 */
class ResendApproverEMailRequest extends AbstractRequest
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