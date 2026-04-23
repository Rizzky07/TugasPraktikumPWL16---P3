<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    public function loanDetail(){
        return $this->belongsTo(LoanDetail::class, 'loan_detail_id');
    }
}
