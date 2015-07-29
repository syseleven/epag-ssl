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
 * Class CancelOrderRequest
 * @package SysEleven\EpagSsl\Types
 */
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