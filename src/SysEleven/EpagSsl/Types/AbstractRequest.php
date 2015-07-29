<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 25.06.15
 * Time: 13:40
 */

namespace SysEleven\EpagSsl\Types;


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