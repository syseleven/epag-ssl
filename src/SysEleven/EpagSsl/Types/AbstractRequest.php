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
 * Class AbstractRequest
 * @package SysEleven\EpagSsl\Types
 */
class AbstractRequest
{
    /**
     * @var CertAuth
     */
    public $auth;

    /**
     * @return CertAuth
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @param CertAuth $auth
     */
    public function setAuth(CertAuth $auth)
    {
        $this->auth = $auth;
    }


}