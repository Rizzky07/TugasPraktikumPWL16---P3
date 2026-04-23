<?php

namespace App\Http\Controllers;

abstract class LoanController
{
    public function show($id)
    {
        $loanDetail = LoanDetail::find($id);
        $returnData = $loanDetail->returnData;

        return view('loan.show', compact('loanDetail', 'returnData'));
    }
}
