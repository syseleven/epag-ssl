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