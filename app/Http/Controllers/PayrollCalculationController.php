<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class PayrollCalculationController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $netSalary=0;
        $grossSalary=0;
        $incomeTax=0;
        $sovergin=0;
        // $type = $request->type;
        // $Salary = $request->Salary;
        // $socialInsurance = $request->socialInsurance;

        // $type = 'net';
        // $socialInsurance=0;
        // $Salary=0;

        $type = 'gross';
        $socialInsurance=0;
        $Salary=0;

        if($type == 'net'){
            $netSalary = $Salary;
            $grossSalary = $netSalary + $socialInsurance;
        }else{
            $grossSalary = $Salary;
            $netSalary = $grossSalary - $socialInsurance;
        }


        $payroll = [
            'netSalary' => $netSalary,
            'grossSalary' => $grossSalary,
            'socialInsurance' => $socialInsurance,
            'incomeTax' => $incomeTax,
            'sovergin' => $sovergin,
        ];
        dd($payroll);
        return view('layouts.payroll', compact('payroll'));

    }
}
