<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessLocation extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function purchaseOrder(){
        return $this->belongsTo(PurchaseOrder::class);
    }
}
