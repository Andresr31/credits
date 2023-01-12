<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'address',
        'phone',
        'main_id',
    ];

    public function main()
    {
        return $this->belongsTo(Main::class);
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }



}
