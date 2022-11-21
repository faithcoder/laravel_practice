<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\TradeLicense;

class DataExampleController extends Controller
{
    public function OneToOneInsert()
    {
        $business = new Business;
        $business->name = "FaithCoder";
        $business->save();

        $license = new TradeLicense;
        $license->issue_date = now();
        $business->tradeLicense()->save($license);

        return view('dataexample.complete');
    }

    public function oneToOneAssociate()
    {
            $business = Business::find(1);

            $license = new TradeLicense;
            $license->issue_date = now();
            $license->business()->associate($business);
            $license->save();
        
            return view('dataexample.associate');
    }
}
