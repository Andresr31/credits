<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_amount',
        'number_fees',
        'partial_amount',
        'date_finish',
        'date_lastpay',
        'status',
        'fees_amount',
        'customer_id',
        'main_id',
    ];

    public function main()
    {
        return $this->belongsTo(Main::class);
    }

    public function customer()
    {
        $customer = Customer::find($this->customer_id);
        if ($customer) {
            return $customer;
        }else{
            return null;
        }
    }



}
