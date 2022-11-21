<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class taskcontroller extends Controller
{
    public function showdata(){
        $showData = crud::paginate(5);
        return view('show_data', compact('showData'));
    }

    public function addData(){
        return view('add_data');
    }
    public function storeData(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email'
        ];
        $custom_message = [
            'name.required' => 'দয়া করে আপনার নাম লিখুন',
            'email.required' => 'দয়া করে আপনার ইমেইল লিখুন',
            'email.email' => 'দয়া করে আপনার সঠিক ইমেইল ঠিকানা লিখুন'
        ];
        $this->validate($request, $rules, $custom_message);

        $tasklist = new crud();
        $tasklist->name = $request->name;
        $tasklist->email = $request->email;
        $tasklist->save();

        Session::flash('msg','Data added successfully');

        return redirect('/');
    }
    public function editData($id=null){
        $editData = Crud::find($id);
        return view('edit_data', compact('editData'));
    }
    public function updateData(Request $request, $id){
        $rules = [
            'name' => 'required',
            'email' => 'required|email'
        ];
        $custom_message = [
            'name.required' => 'দয়া করে আপনার নাম লিখুন',
            'email.required' => 'দয়া করে আপনার ইমেইল লিখুন',
            'email.email' => 'দয়া করে আপনার সঠিক ইমেইল ঠিকানা লিখুন'
        ];
        $this->validate($request, $rules, $custom_message);

        $tasklist = crud::find($id);
        $tasklist->name = $request->name;
        $tasklist->email = $request->email;
        $tasklist->save();

        Session::flash('msg','Data updated successfully');

        return redirect('/');
    }

    public function deleteData($id=null){
        $deleteData = Crud::find($id);
        $deleteData->delete();
        Session::flash('msg','Data deleted successfully');

        return redirect('/');
    }

}
