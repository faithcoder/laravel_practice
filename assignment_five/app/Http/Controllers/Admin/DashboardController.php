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
        $headers = ["HTML", "CSS", "PHP", "JAVA"];
        $rows = [
            ["A", "B", "C", "D"],
            ["one", "two", "three", "four"]

        ];
        return view('admin.dashboard.table', ["headers" => $headers, "rows" => $rows]);
    }
}
