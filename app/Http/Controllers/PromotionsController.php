<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotion/index', compact('promotions'));
    }

    public function view()
    {
        $promotions = Promotion::all();
        return view('index', compact('promotions'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promotion/create');
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
            'category' =>'required',
            'price' =>'required'
        ]);

        // return $request->input();
        $promotion = new Promotion;
        $promotion->name = $request->name;
        $promotion->category = $request->category;
        $promotion->price = $request->price;
        $promotion->disc_price = $request->disc_price;
        $promotion->shop_link = $request->shop_link;
        $promotion->description = $request->description;
        $promotion->image1 = $request->image1;

        if($request->hasFile('image1')){
            $request->file('image1')->move('assets/images/',$request->file('image1')->getClientOriginalName());
            $promotion->image1 = $request->file('image1')->getClientOriginalName();
            $promotion->save();
        }
        
        $promotion->save();

        return redirect()->route('promotionlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        return view('promotion.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        $datas = [
            
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'disc_price' => $request->disc_price,
            'shop_link' => $request->shop_link,
            'description' => $request->description,
            'image1' => $request->image1,
               ];
               $datas2 = [
                   
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'disc_price' => $request->disc_price,
            'shop_link' => $request->shop_link,
            'description' => $request->description
                  ];
       
               $promotion::where('id', $promotion->id)
                  ->update(
                  $request->hasFile('image1')?  $datas : $datas2
               );
            if($request->hasFile('image1')){
                $request->file('image1')->move('assets/images/',$request->file('image1')->getClientOriginalName());
                $promotion->image1 = $request->file('image1')->getClientOriginalName();
                $promotion->save();
            }
    
            return redirect()->route('editpromotion', [$promotion->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        Promotion::destroy($promotion->id);
        return redirect()->route('promotionlist');
    }
}