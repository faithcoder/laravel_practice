<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\TradeLicense;
use App\Models\Address;

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

    public function OneToOneDissociate(){
        $license = TradeLicense::find(2);
        $license->business()->dissociate();
        $license->save();

        return view('dataexample.dissociate');
    }

    public function OneToOneDelete(){
        //TradeLicense::find(3);
        $license = TradeLicense::find(3);
        $license->delete();
        return view('dataexample.delete');
    }

    public function OneToOneThreeLevel(){
        $business = Business::find(1);

        $address = new Address;
        $address->road = "cantonment";
        $address->city = "dhaka";

        $business->tradeLicense()->first()->address()->save($address);
        return view('dataexample.threelevel');
    }

    public function hasOneThrough(){
        $business = Business::find(1);
        $road = $business->businessAddress()->first()->road;
        dd($road);
        return view('dataexample.threelevel');
    }
}
