<?php

namespace App\Http\Controllers;

use App\Models\{Product, Brand, Category, Inventory, Supplier, Unit, Warehouse};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('inventory')->latest()->get();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $units = Unit::all();
        $warehouses = Warehouse::all();
        $suppliers = Supplier::all();
        return view('backend.product.create', compact('brands', 'categories', 'units', 'warehouses', 'suppliers'));
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
            'code' => 'required|unique:products,code',
            'name' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'cost' => 'required|decimal:0,2|min:0',
            'price' => 'required|decimal:0,2|min:0',
            'unit_id' => 'required',
            'stock_alert' => 'required|numeric|min:0',
            'tax_type' => 'required',
            'order_tax' => 'required|decimal:0,2|min:0',
            'warehouse_id' => 'required',
            'supplier_id' => 'required',
            'quantity' => 'required|numeric|min:0',
            'status' => 'required',
        ]);
        $product = Product::create($request->except([
            '_token',
            'cost',
            'price',
            'tax_type',
            'order_tax',
            'warehouse_id',
            'quantity',
            'status'
        ]));
        $inventory = new Inventory;
        $inventory->product_id = $product->id;
        $inventory->cost = $request->cost;
        $inventory->price = $request->price;
        $inventory->tax_type = $request->tax_type;
        $inventory->order_tax = $request->order_tax;
        $inventory->warehouse_id = $request->warehouse_id;
        $inventory->quantity = $request->quantity;
        $inventory->status = $request->status;
        $inventory->save();
        return back()->with('success', 'Product Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load('inventory');
        return view('backend.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // $product->delete();
        // return back();
    }
}
