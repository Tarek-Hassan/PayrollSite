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
                'grossSalary' => round($payrollCalculation->getGross(),3),
                'netSalary' => round($payrollCalculation->getNetSalary(),3),
                'socialInsurance' => round($payrollCalculation->getemployeeSocialInsurance(),3),
                'incomeTax' => round($payrollCalculation->getFinalIncomeTax(),3),
                'sovergin' => round($payrollCalculation->getSovereignValue(),3),
                'soverginTax' => $payrollCalculation->getSovereignTax()
                                         ? round($payrollCalculation->getSovereignTax()??0,3)
                                         : null ,
            ];
        }

       
        $payroll = array_filter($payroll, function($value) {
            return !is_null($value) && $value !== 0;
        });        
        return view('layouts.payroll', compact('payroll'));
    }
}
