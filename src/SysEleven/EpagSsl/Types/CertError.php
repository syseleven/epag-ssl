<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 25.06.15
 * Time: 14:19
 */

namespace SysEleven\EpagSsl\Types;


class CertError
{

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var CertParam
     */
    public $parameters;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return CertParam
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param CertParam $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }



}