<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class PayrollCalculationController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $net=0;
        $gross=0;
        $incomeTax=0;
        $sovergin=0;
        // $type = $request->type;
        // $value = $request->value;
        // $socialInsurance = $request->socialInsurance;

        // $type = 'net';
        // $socialInsurance=0;
        // $value=0;

        $type = 'gross';
        $socialInsurance=0;
        $value=0;
        
        if($type == 'net'){
            $net = $value;
            $gross = $net + $socialInsurance;
        }else{
            $gross = $value;
            $net = $gross - $socialInsurance;
        }


        $payroll = [
            'net' => $net,
            'gross' => $gross,
            'socialInsurance' => $socialInsurance,
            'incomeTax' => $incomeTax,
            'sovergin' => $sovergin,
        ];
        dd($payroll);
        return view('layouts.payroll', compact('payroll'));

    }
}
