<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/create');
    }

    public function view()
    {
        $customers = Customer::all();
        return view('about', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'testimonial' =>'required'
        ]);

        // return $request->input();
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->profession = $request->profession;
        $customer->facebook = $request->facebook;
        $customer->instagram = $request->instagram;
        $customer->twitter = $request->twitter;
        $customer->testimonial = $request->testimonial;
        $customer->photo1 = $request->photo1;
        $customer->photo2 = $request->photo2;
        $customer->photo3 = $request->photo3;
        $customer->photo4 = $request->photo4;
        $customer->photo5 = $request->photo5;

        if($request->hasFile('photo1')){
            $request->file('photo1')->move('assets/images/',$request->file('photo1')->getClientOriginalName());
            $customer->photo1 = $request->file('photo1')->getClientOriginalName();
            $customer->save();
        }

        if($request->hasFile('photo2')){
            $request->file('photo2')->move('assets/images/',$request->file('photo2')->getClientOriginalName());
            $customer->photo2 = $request->file('photo2')->getClientOriginalName();
            $customer->save();
        }

        if($request->hasFile('photo3')){
            $request->file('photo3')->move('assets/images/',$request->file('photo3')->getClientOriginalName());
            $customer->photo3 = $request->file('photo3')->getClientOriginalName();
            $customer->save();
        }

        if($request->hasFile('photo4')){
            $request->file('photo4')->move('assets/images/',$request->file('photo4')->getClientOriginalName());
            $customer->photo4 = $request->file('photo4')->getClientOriginalName();
            $customer->save();
        }

        if($request->hasFile('photo5')){
            $request->file('photo5')->move('assets/images/',$request->file('photo5')->getClientOriginalName());
            $customer->photo5 = $request->file('photo5')->getClientOriginalName();
            $customer->save();
        }
        
        $customer->save();

        return redirect()->route('customerlist');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // return $customer;
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $datas = [
            
            'name' => $request->name,
            'profession' => $request->profession,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'testimonial' => $request->testimonial,
            'photo1' => $request->photo1,
            'photo2' => $request->photo2,
            'photo3' => $request->photo3,
            'photo4' => $request->photo4,
            'photo5' => $request->photo5
               ];
               $datas2 = [
                   
            'name' => $request->name,
            'profession' => $request->profession,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'testimonial' => $request->testimonial
                  ];
       
               $customer::where('id', $customer->id)
                  ->update(
                  $request->hasFile('photo1')?  $datas : $datas2
               );
            if($request->hasFile('photo1')){
                $request->file('photo1')->move('assets/images/',$request->file('photo1')->getClientOriginalName());
                $customer->photo1 = $request->file('photo1')->getClientOriginalName();
                $customer->save();
            }
    
            if($request->hasFile('photo2')){
                $request->file('photo2')->move('assets/images/',$request->file('photo2')->getClientOriginalName());
                $customer->photo2 = $request->file('photo2')->getClientOriginalName();
                $customer->save();
            }
    
            if($request->hasFile('photo3')){
                $request->file('photo3')->move('assets/images/',$request->file('photo3')->getClientOriginalName());
                $customer->photo3 = $request->file('photo3')->getClientOriginalName();
                $customer->save();
            }
    
            if($request->hasFile('photo4')){
                $request->file('photo4')->move('assets/images/',$request->file('photo4')->getClientOriginalName());
                $customer->photo4 = $request->file('photo4')->getClientOriginalName();
                $customer->save();
            }
    
            if($request->hasFile('photo5')){
             $request->file('photo5')->move('assets/images/',$request->file('photo5')->getClientOriginalName());
             $customer->photo5 = $request->file('photo5')->getClientOriginalName();
             $customer->save();
         }
    
            return redirect()->route('editcustomer', [$customer->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);
        return redirect()->route('customerlist');
    }
}