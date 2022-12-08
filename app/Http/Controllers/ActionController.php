<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Customer;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function action_form()
    {
        $customers = Customer::all();
        return view('admin.add_action' , compact('customers'));
    }

    public function action_create(Request $request)
    {
        $request->validate([
            'phone'=>'required|digits:11|unique:actions',
            'datetime'=>'required',
            'customer'=>'required',
        ]);

        Action::create([
            'phone'=>$request->phone,
            'visit'=>$request->datetime,
            'customer_id'=>$request->customer,
        ]);

        return back()->with('success' , 'Action Added Successfully');
    }
}
