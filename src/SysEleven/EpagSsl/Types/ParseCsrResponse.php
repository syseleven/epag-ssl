<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 25.06.15
 * Time: 14:23
 */

namespace SysEleven\EpagSsl\Types;


/**
 * Class ParseCsrAbstractResponse
 * @package SysEleven\EpagSsl\Types
 */
class ParseCsrResponse extends AbstractResponse
{
    /**
     * @var CertCsrInfo
     */
    public $result;

    /**
     * @return CertCsrInfo
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param CsrInfo $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }
}