<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\ViewModel\PayrollCalculationViewModel;
use App\ViewModel\PayrollNetCalculationViewModel;

class PayrollCalculationController extends Controller
{
    
    // $type = 'gross';
    // $socialInsurance=1100;
    // $salary=10000;
    // // $socialInsurance=1199;
    // // $Salary=70000;
    // // $type = 'net';
    // // $socialInsurance=1199;
    // // $Salary=10000;
    // // $socialInsurance=1199;
    // // $Salary=20000;
    // // $socialInsurance=1199;
    // // $Salary=50000;
    // // $socialInsurance=1199;
    // // $Salary=70000;
    public function __invoke(Request $request)
    {
        
        $payroll=[];
        if($request->all()){
            $type = $request->type;
            $salary = $request->salary;
            $socialInsurance = $request->socialInsurance;  
            if($type == 'net'){
                $payrollCalculation = new PayrollNetCalculationViewModel($salary, $socialInsurance);
            }else{
                $payrollCalculation = new PayrollCalculationViewModel($salary, $socialInsurance);
            }

            $payroll = [
                'socialInsurance' => $payrollCalculation->getemployeeSocialInsurance(),
                'grossSalary' => $payrollCalculation->getGross(),
                'netSalary' => $payrollCalculation->getNetSalary(),
                'incomeTax' => $payrollCalculation->getFinalIncomeTax(),
                'sovergin' => $payrollCalculation->getSovereignValue(),
                'soverginTax' => $payrollCalculation->getSovereignTax(),
            ];
        }

       
        $payroll = array_filter($payroll, function($value) {
            return !is_null($value) && $value !== 0;
        });        
        return view('layouts.payroll', compact('payroll'));
    }
}
