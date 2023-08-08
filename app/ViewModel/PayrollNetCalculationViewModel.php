<?php

namespace App\ViewModel;

use App\Models\IncomeTaxLayer;
use App\ViewModel\PayrollCalculationViewModel;

class PayrollNetCalculationViewModel extends PayrollCalculationViewModel
{

    public $sovereignTax = 0;

    public function getNetTaxBase(){
        return $this->getAnnualNetSalary() - $this->getPersonalExemption();
    }

    public function calIncomeTax(){

        $taxbase = 0;
        $totalIncomeTax = 0;
        $taxbase = $this->getNetTaxBase();
        $condition = $this->getNetTaxBase();

        foreach ($this->getIncomeTaxSlices() as $Slice) {

            $diff = 0;
            $total = 0;
            if ($condition > 0) {

                $diff = $Slice->maximum_net - $Slice->minimum_net;

                $ratio = number_format($Slice->ratio, 12, '.', ' ');

                if ($taxbase >= $diff) {
                    $total = $diff * $ratio / 100;
                } else {

                    $this->incomeTaxSlice = $Slice;

                    $total = $taxbase * $ratio / 100;
                }

                $totalIncomeTax += $total;

                $taxbase -= $diff;
            }

            $condition = $condition - $diff;
        }
        $this->incomeTax = $totalIncomeTax / 12;
    }

    public function getIncomeTaxSlices(){
        $incomeTaxLayer = IncomeTaxLayer::where([
            ['net_min', '<=', $this->getNetTaxBase()],
            ['net_max', '>=', $this->getNetTaxBase()],
            ])->first();
        if ($incomeTaxLayer) {
            return $incomeTaxLayer->incomeTaxLayerSlice;
        }
        return [];
    }

    public function getTaxBase(){
        return $this->getAnnualNetSalary() + ($this->getIncomeTax() * 12);
    }

    public function getAnnualGross(){

        $this->annualGross = ($this->getTaxBase() + $this->getAnuualEmployeeSocialInsurance());
        return $this->annualGross;
    }

    public function getMonthGross(){
        if ($this->annualGross == 0) {
            $this->getAnnualGross();
        }
       

        return $this->annualGross / 12;
    }

    public function getIncomeTax(){
        if ($this->incomeTax == 0) {
            $this->calIncomeTax();
        }
        return $this->incomeTax;
    }

    public function getNetSalary(){

        return $this->totalEarning;
    }

    public function getAnnualNetSalary(){
        return $this->getNetSalary() * 12;
    }

    //Sovereign

    public function getSovereignValue(){
        return $this->getMonthGross() * 0.0005;
    }

    public function getTotalGrossSovereignElement(){
        $sliceRate = $this->incomeTaxSlice ? $this->incomeTaxSlice->rate : 0;
        return $this->getSovereignValue() * (100 / (100 - $sliceRate));
    }

    public function getSovereignTax(){
        $this->sovereignTax = ($this->getTotalGrossSovereignElement() - $this->getSovereignValue());
        return $this->sovereignTax;
    }

    public function getFinalIncomeTax(){
        if ($this->sovereignTax == 0) { $this->getSovereignTax(); }

        return $this->getIncomeTax() + $this->sovereignTax;
    }

    public function getGross(){
        return $this->getMonthGross() + $this->getSovereignTax() + $this->getSovereignValue();
    }



}
