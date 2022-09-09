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
        $data = Customer::latest()->get();
        return view('customer.index',compact('data'));
    }

    public function create()
    {
        return view('customer.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(
            $request,
                [
                    'name' => 'required',
                ],
                [
                    'name.required' => 'Customer category is required!!',
                ]
            );
        $customer = Customer::create($request->all());
        return redirect()->route('customer.index',$customer->id)
        ->with('status','Customer Created Successfully');
          
    }
    public function user(){
       $user = user::all();
       return view('user.userlist',compact('user'));  
    }
    public function edit($id)
    {
        $customers = Customer::findorFail($id);
        return view('customer.edit')->with('customers', $customers);
    }
    public function update(Request $request , $id){
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone_number'] = $request->phone_number;
        $data['description'] = $request->description;
        $customers = Customer::whereId($id)->update($data);
        return redirect()->route('customer.index', $customers)->with('message','Customers updated successfully');
    }

    public function destroy($id)
    {
        $Customer = Customer::findOrfail($id);
        $Customer->delete();
        return redirect()->back();
    }
}
