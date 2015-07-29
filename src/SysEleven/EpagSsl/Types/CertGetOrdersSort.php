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
 * Class CertGetOrdersSort
 * @package SysEleven\EpagSsl\Types
 */
class CertGetOrdersSort
{

    public $sortBy;

    public $sortOrder;


    public function __construct($sortBy, $sortOrder)
    {
        $this->sortBy = $sortBy;
        $this->sortOrder = $sortOrder;
    }

    /**
     * @return mixed
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * @param mixed $sortBy
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param mixed $sortOrder
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }



}