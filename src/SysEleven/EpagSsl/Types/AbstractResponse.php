<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 24.06.15
 * Time: 15:28
 */

namespace SysEleven\EpagSsl\Types;


class AbstractResponse {

    public $resultCode = null;

    public $resultCount = null;

    public $result;

    public $errorCount = null;

    public $error;

    /**
     * @return null
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param null $resultCode
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
    }

    /**
     * @return null
     */
    public function getResultCount()
    {
        return $this->resultCount;
    }

    /**
     * @param null $resultCount
     */
    public function setResultCount($resultCount)
    {
        $this->resultCount = $resultCount;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return null
     */
    public function getErrorCount()
    {
        return $this->errorCount;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        if (1 == $this->errorCount) {
            return [$this->error];
        }

        return $this->error;
    }

    public function hasErrors()
    {
        return (0 == $this->errorCount)? false:true;
    }
}