<?php


namespace model;


class Wage
{
    private $wage;
    private $name;
    private $payDate;
    private $payRate;

    public function __construct($wageInput, $nameInput, $payDateInput, $payRateInput)
    {
        $this->setWage($wageInput);
        $this->setName($nameInput);
        $this->setPayDate($payDateInput);
        $this->setPayRate($payRateInput);
    }

    /**
     * @return int
     */
    public function getWage()
    {
        return $this->wage;
    }

    /**
     * @param int $wage
     */
    public function setWage($wage): void
    {
        $this->wage = $wage;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPayDate()
    {
        return $this->payDate;
    }

    /**
     *
     * @param mixed $payDate
     */
    public function setPayDate($payDate): void
    {
        $this->payDate = $payDate;
    }

    /**
     * @return mixed
     */
    public function getPayRate()
    {
        return $this->payRate;
    }

    /**
     * @param mixed $payRate
     */
    public function setPayRate($payRate): void
    {
        $this->payRate = $payRate;
    }


}