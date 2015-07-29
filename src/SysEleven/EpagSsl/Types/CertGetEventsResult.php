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
 * Class CertGetEventsResult
 * @package SysEleven\EpagSsl\Types
 */
class CertGetEventsResult
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventMsg;

    /**
     * @var \DateTime
     */
    public $eventDate;

    /**
     * @var bool
     */
    public $acknowledged;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var CertError
     */
    public $error;


    public function __construct($data = null)
    {
        if ($data instanceof \StdClass) {
            $data = (array) $data;
        }


        $this->fromArray($data);
    }

    /**
     * @param array $data
     * @return $this
     */
    public function fromArray(array $data = [])
    {
        foreach ($data AS $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }

        return $this;
    }

    public function toArray()
    {
        $r = [];
        foreach (get_class_vars(get_class($this)) AS $k => $v) {
            $r[$k] = $this->$v;
        }

        return $r;
    }

}