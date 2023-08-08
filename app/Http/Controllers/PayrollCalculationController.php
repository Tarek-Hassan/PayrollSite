<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\ViewModel\PayrollCalculationViewModel;
use App\ViewModel\PayrollNetCalculationViewModel;

class PayrollCalculationController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $type = $request->type;
        $Salary = $request->Salary;
        $socialInsurance = $request->socialInsurance;   
        // net-gross
        // // $type = 'gross';
        // // // // $socialInsurance=1100;
        // // // // $Salary=10000;
        // // $socialInsurance=1199;
        // // $Salary=70000;
        // $type = 'net';
        // // $socialInsurance=1199;
        // // $Salary=10000;
        // // $socialInsurance=1199;
        // // $Salary=20000;
        // // $socialInsurance=1199;
        // // $Salary=50000;
        // $socialInsurance=1199;
        // $Salary=70000;

        
        if($type == 'net'){
            $payrollCalculation = new PayrollNetCalculationViewModel($Salary, $socialInsurance);
        }else{
            $payrollCalculation = new PayrollCalculationViewModel($Salary, $socialInsurance);
        }

        $payroll = [
            'socialInsurance' => $payrollCalculation->getemployeeSocialInsurance(),
            'grossSalary' => $payrollCalculation->getGross(),
            'netSalary' => $payrollCalculation->getNetSalary(),
            'incomeTax' => $payrollCalculation->getFinalIncomeTax(),
            'sovergin' => $payrollCalculation->getSovereignValue(),
            'soverginTax' => $payrollCalculation->getSovereignTax(),
        ];
        dd($payroll);
        return view('layouts.payroll', compact('payroll'));

    }
}
