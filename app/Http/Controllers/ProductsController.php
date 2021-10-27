<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product/index', compact('products'));
    }

    public function view()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');
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
        $product = new Product;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image1 = $request->image1;
        $product->image2 = $request->image2;
        $product->image3 = $request->image3;
        $product->image4 = $request->image4;
        $product->image5 = $request->image5;

        if($request->hasFile('image1')){
            $request->file('image1')->move('assets/images/',$request->file('image1')->getClientOriginalName());
            $product->image1 = $request->file('image1')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image2')){
            $request->file('image2')->move('assets/images/',$request->file('image2')->getClientOriginalName());
            $product->image2 = $request->file('image2')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image3')){
            $request->file('image3')->move('assets/images/',$request->file('image3')->getClientOriginalName());
            $product->image3 = $request->file('image3')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image4')){
            $request->file('image4')->move('assets/images/',$request->file('image4')->getClientOriginalName());
            $product->image4 = $request->file('image4')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image5')){
            $request->file('image5')->move('assets/images/',$request->file('image5')->getClientOriginalName());
            $product->image5 = $request->file('image5')->getClientOriginalName();
            $product->save();
        }
        
        $product->save();

        return redirect()->route('productlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $datas = [
            
        'name' => $request->name,
        'category' => $request->category,
        'price' => $request->price,
        'description' => $request->description,
        'image1' => $request->image1,
        'image2' => $request->image2,
        'image3' => $request->image3,
        'image4' => $request->image4,
        'image5' => $request->image5
           ];
           $datas2 = [
               
        'name' => $request->name,
        'category' => $request->category,
        'price' => $request->price,
        'description' => $request->description
              ];
   
           $product::where('id', $product->id)
              ->update(
              $request->hasFile('image1')?  $datas : $datas2
           );
        if($request->hasFile('image1')){
            $request->file('image1')->move('assets/images/',$request->file('image1')->getClientOriginalName());
            $product->image1 = $request->file('image1')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image2')){
            $request->file('image2')->move('assets/images/',$request->file('image2')->getClientOriginalName());
            $product->image2 = $request->file('image2')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image3')){
            $request->file('image3')->move('assets/images/',$request->file('image3')->getClientOriginalName());
            $product->image3 = $request->file('image3')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image4')){
            $request->file('image4')->move('assets/images/',$request->file('image4')->getClientOriginalName());
            $product->image4 = $request->file('image4')->getClientOriginalName();
            $product->save();
        }

        if($request->hasFile('image5')){
         $request->file('image5')->move('assets/images/',$request->file('image5')->getClientOriginalName());
         $product->image5 = $request->file('image5')->getClientOriginalName();
         $product->save();
     }

        return redirect()->route('editproduct', [$product->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('productlist');
    }
}