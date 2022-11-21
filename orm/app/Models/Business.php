<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function tradeLicense()
    {
        return $this->hasOne(TradeLicense::class);
    }

    public function businessAddress(){
        return $this->hasOneThrough(Address::class, TradeLicense::class);
    }

    
}
