<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('permission:customer-sidebar');
    // }

    public function customer_form()
    {
        $userEmployees = User::where('status' , 0)->get();
        return view('admin.add_customer' , compact('userEmployees'));
    }

    public function customer_create(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:255',
            'employee'=>'required',
        ]);

        Customer::create([
            'name'=>$request->name,
            'userEmployee_id'=>$request->employee,
        ]);

        return back()->with('success' , 'Customer Added Successfully');
    }
}
