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
 * Class GetOrdersRequest
 * @package SysEleven\EpagSsl\Types
 */
class GetOrdersRequest extends AbstractRequest
{
    /**
     * @var CertGetOrdersFilter
     */
    public $filters;

    /**
     * @var CertGetOrdersSort
     */
    public $sort;

    public function __construct(CertGetOrdersFilter $filters, CertGetOrdersSort $sort, CertAuth $auth)
    {
        $this->filters = $filters;
        $this->sort = $sort;
        $this->auth = $auth;
    }


    /**
     * @return CertGetOrdersFilter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param CertGetOrdersFilter $filters
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;
    }

    /**
     * @return CertGetOrdersSort
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param CertGetOrdersSort $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }




}