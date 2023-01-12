<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capital',
        'global_interest',
        'default_numfees',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
