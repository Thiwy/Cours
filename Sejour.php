<?php
/**
 * Created by PhpStorm.
 * User: ANNICK
 * Date: 24/02/2016
 * Time: 15:11
 */

/**
 * Class sejour
 * @package stpaul
 */
class Sejour {

    private $sejNo;
    private $sejIntitule;
    private $sejMontantMBI;
    private $sejDteDeb;
    private $sejDuree;

    /**
     * @return mixed
     */
    public function getSejNo()
    {
        return $this->sejNo;
    }

    /**
     * @param mixed $sejNo
     */
    public function setSejNo($sejNo)
    {
        $this->sejNo = $sejNo;
    }

    /**
     * @return mixed
     */
    public function getSejIntitule()
    {
        return $this->sejIntitule;
    }

    /**
     * @param mixed $sejIntitule
     */
    public function setSejIntitule($sejIntitule)
    {
        $this->sejIntitule = $sejIntitule;
    }

    /**
     * @return mixed
     */
    public function getSejMontantMBI()
    {
        return $this->sejMontantMBI;
    }

    /**
     * @param mixed $sejMontantMBI
     */
    public function setSejMontantMBI($sejMontantMBI)
    {
        $this->sejMontantMBI = $sejMontantMBI;
    }

    /**
     * @return mixed
     */
    public function getSejDteDeb()
    {
        return $this->sejDteDeb;
    }

    /**
     * @param mixed $sejDteDeb
     */
    public function setSejDteDeb($sejDteDeb)
    {
        $this->sejDteDeb = $sejDteDeb;
    }

    /**
     * @return mixed
     */
    public function getSejDuree()
    {
        return $this->sejDuree;
    }

    /**
     * @param mixed $dejDuree
     */
    public function setSejDuree($sejDuree)
    {
        $this->sejDuree = $sejDuree;
    }



}