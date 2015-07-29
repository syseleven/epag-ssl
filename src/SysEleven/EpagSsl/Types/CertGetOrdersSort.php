<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 12.07.15
 * Time: 22:02
 */

namespace SysEleven\EpagSsl\Types;


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