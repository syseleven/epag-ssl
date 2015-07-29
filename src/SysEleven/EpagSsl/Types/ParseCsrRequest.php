<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 25.06.15
 * Time: 13:38
 */

namespace SysEleven\EpagSsl\Types;


class ParseCsrRequest extends AbstractRequest
{
    /**
     * @var string
     */
    public $csr;

    /**
     * @var string
     */
    public $product;


    public function __construct(CertAuth $auth, $csr, $product)
    {
        $this->setAuth($auth);
        $this->setCsr($csr);
        $this->setProduct($product);
    }

    /**
     * @return string
     */
    public function getCsr()
    {
        return $this->csr;
    }

    /**
     * @param string $csr
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }


}