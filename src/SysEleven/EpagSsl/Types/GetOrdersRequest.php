<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 12.07.15
 * Time: 22:49
 */

namespace SysEleven\EpagSsl\Types;


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