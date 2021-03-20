<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentResponse extends Model
{
    //
    protected $fillable = [
        'payment_type',
        'item_id',
        'payment_method',
        'merchant_transaction_id',
        'status_msg',
        'payment_response',
        'bank',
        'transaction_status',
    ];
}
