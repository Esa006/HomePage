<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

abstract class Controller
{
    public function store(Request $request)
    {
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Customer added!');
    }

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

}
