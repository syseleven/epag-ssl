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
 * Class GetEventsRequest
 * @package SysEleven\EpagSsl\Types
 */
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