<?php

namespace App\ViewModel;

use App\Models\IncomeTax;
use App\Models\IncomeTaxLayer;
use PhpParser\Node\Stmt\Return_;

class PayrollCalculationViewModel
{
    public $annualGross = 0;
    public $totalEarning = 0;
    public $sovereignValue = 0;
    public $taxBase = 0;
    public $incomeTax = 0;
    public $employeeSocialInsurance = 0;
    public $incomeTaxSlice;


    public function __construct($salary,$socialInsurance)
    {
        $this->totalEarning += $salary;
        $this->employeeSocialInsurance += $socialInsurance;
    }


    public function getemployeeSocialInsurance()
    {
        return $this->employeeSocialInsurance;
    }

    public function getAnuualEmployeeSocialInsurance()
    {
        return $this->getemployeeSocialInsurance() * 12;
    }



    public function getGross()
    {
        return $this->totalEarning;
    }



    public function getSovereignValue()
    {
        return $this->getGross() * 0.0005;
    }



    public function getSovereignTax(){
        return null;
    }


    // IncomeTax
    public function getAnnualNetSalary()
    {
        return $this->getNetSalary() * 12;
    }

    public function calTaxBase() {
            $this->taxBase = ($this->totalEarning  - $this->employeeSocialInsurance) * 12;
    }

    public function getTaxBase()
    {
        if ($this->taxBase == 0) {$this->calTaxBase();}
        return $this->taxBase;
    }

    public function getPersonalExemption()
    {
        return optional(IncomeTax::first())->personal_exemption;
    }
    public function getNetTaxBase()
    {
        return $this->getTaxBase() - $this->getPersonalExemption();
    }

    public function calIncomeTax()
    {

        $taxbase = 0;
        $totalIncomeTax = 0;
        $taxbase = $this->getNetTaxBase();
        $condition = $taxbase;

        foreach ($this->getIncomeTaxSlices() as $Slice) {

            $diff = 0;
            $total = 0;

            if ($condition > 0) {

                $diff = $Slice->to - $Slice->from;

                if ($taxbase >= $diff) {
                    $total = $diff * $Slice->rate / 100;
                } else {
                    $this->incomeTaxSlice = $Slice;
                    $total = $taxbase * $Slice->rate / 100;
                }

                $totalIncomeTax += $total;
                $taxbase -= $diff;
            }

            $condition = $condition - $diff;
        }
        $this->incomeTax = $totalIncomeTax / 12;

    }

    public function getIncomeTaxSlices()
    {

        $incomeTaxLayer = IncomeTaxLayer::where([
            ['min', '<=', $this->getNetTaxBase()],
            ['max', '>=', $this->getNetTaxBase()],
        ])->first();

        if ($incomeTaxLayer) {
            return $incomeTaxLayer->incomeTaxLayerSlice;
        }
        return [];
    }

    public function getFinalIncomeTax()
    {
        if ($this->incomeTax == 0) {
            $this->calIncomeTax();
        }
        return $this->incomeTax;
    }

    public function getNetSalary()
    {
        return $this->getGross() - $this->getemployeeSocialInsurance() - $this->getFinalIncomeTax() - $this->getSovereignValue();
    }


}
