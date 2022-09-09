<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $data = Customer::all();
        return view('customer.index',compact('data'));
    }

    public function create()
    {
        return view('customer.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // $this->validate(
        //     $request,
        //         [
        //             'name' => 'required',
        //         ],
        //         [
        //             'name.required' => 'Customer category is required!!',
        //         ]
        //     );
        $customer = Customer::create($request->all());
        return redirect()->route('customer.index',$customer->id)
        ->with('status','Customer Created Successfully');
          
    }
    public function user(){
        $user = user::all();
       return view('customer.customerlist',compact('user'));
    }
}
