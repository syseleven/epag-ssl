<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 25.06.15
 * Time: 14:17
 */

namespace SysEleven\EpagSsl\Types;


class CertCSRInfo
{
    /**
     * @var string
     */
    public $countryName;

    /**
     * @var string
     */
    public $stateOrProvinceName;

    /**
     * @var string
     */
    public $localityName;

    /**
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $emailAddress;

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    /**
     * @return string
     */
    public function getStateOrProvinceName()
    {
        return $this->stateOrProvinceName;
    }

    /**
     * @param string $stateOrProvinceName
     */
    public function setStateOrProvinceName($stateOrProvinceName)
    {
        $this->stateOrProvinceName = $stateOrProvinceName;
    }

    /**
     * @return string
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * @param string $localityName
     */
    public function setLocalityName($localityName)
    {
        $this->localityName = $localityName;
    }

    /**
     * @return string
     */
    public function getOrganizationalUnitName()
    {
        return $this->organizationalUnitName;
    }

    /**
     * @param string $organizationalUnitName
     */
    public function setOrganizationalUnitName($organizationalUnitName)
    {
        $this->organizationalUnitName = $organizationalUnitName;
    }

    /**
     * @return string
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * @param string $commonName
     */
    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }



}