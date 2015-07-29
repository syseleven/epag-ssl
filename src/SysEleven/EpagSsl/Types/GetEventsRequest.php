<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 14.07.15
 * Time: 21:33
 */

namespace SysEleven\EpagSsl\Types;


class GetEventsRequest extends AbstractRequest
{
    /**
     * @var CertGetEventsFilter
     */
    public $filters;

    public function __construct(CertGetEventsFilter $filters, CertAuth $auth)
    {
        $this->filters = $filters;
        $this->auth = $auth;
    }

    /**
     * @return CertGetEventsFilter
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param CertGetEventsFilter $filters
     *
     * @return $this
     */
    public function setFilters(CertGetEventsFilter $filters)
    {
        $this->filters = $filters;

        return $this;
    }



}