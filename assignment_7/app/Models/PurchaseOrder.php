<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    public function suppliers(){
        return $this->hasMany(Supplier::class);
    }

    public function business_location(){
        return $this->hasOne(BusinessLocation::class);
    }

}
