<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('admin.dashboard.index');
    }

    public function table(Request $request){

        $headers = ["ALPHA", "BRAVO", "CHARLIE", "DELTA"];
        $rows = [
            ["A", "B", "C", "D"],
            ["ONE", "TOW", "THREE", "FOUR"], 
            ["ONE", "TOW", "THREE", "FOUR"], 
            ["ONE", "TOW", "THREE", "FOUR"], 

        ];

        return view('admin.dashboard.table', ["headers" => $headers, "rows" => $rows]);
    }

    public function menu(Request $request){

        $nav_items = ["Main Layout"];
        $nav_links = ["Sub Menu"];

        return view('admin.dashboard.menu', ["nav_items" => $nav_items, "nav_links" => $nav_links]);
    }
}
