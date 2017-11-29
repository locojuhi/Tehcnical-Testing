<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($store_id)
    {
        $store = Store::find($store_id);
        $products = $store->products()->paginate(15);
        return view('products.index', compact('products', 'store_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($store_id)
    {
        return view('products.create', compact('store_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {   
        $store = Store::find($request['store_id']);
        $product = $store->products()->create([
            'name' => $request['name'],
            'sku' => $request['sku'],
            'description' => $request['description'],
            'amount' => $request['amount'],
        ]);
        if($product){
            return  redirect()->route('showProductDetail', ['store_id' => $request['store_id'], 'product_id' => $product->id]);
        }else{

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($store_id, $product_id)
    {
        $product = Product::find($product_id);
        return view('products.show', compact('product', 'store_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($store_id, $product_id)
    {
        $product = Product::find($product_id);
        return view('products.edit', compact('store_id', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->fill($request->all());
        if($product->save()){
            return  redirect()->route('showProductDetail', ['store_id' => $request['store_id'], 'product_id' => $product->id]); 
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $store = $product->store->id;
        if(Product::destroy($id)){
            return redirect()->route('showProductsStore', ['store_id' => $store]);
        }
    }
}

