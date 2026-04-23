<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    public function returnData(){
        return $this->hasOne(Returns::class, 'loan_detail_id');
    }
}
