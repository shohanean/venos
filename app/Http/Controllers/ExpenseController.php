<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Expense_category;
use App\Models\Warehouse;
use App\Models\Store;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();
        $warehouses = Warehouse::all();
        $stores = Store::all();
        $expense_categories = Expense_category::all();
        return view('backend.expense.index', compact('expenses', 'warehouses', 'stores', 'expense_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expense_categories = Expense_category::with('user')->latest()->get();
        return view('backend.expense.create', compact('expense_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Expense::create($request->except('_token'));
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        // return view('backend.expense.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        // return view('backend.expense.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        // $expense->delete();
        // return back();
    }

    public function expensecategory_store (Request $request)
    {
        $request->validate([
            'name' => 'required|unique:expense_categories,name|max:100'
        ]);
        Expense_category::create($request->except('_token') + [
            'added_by' => auth()->id()
        ]);
        return back()->withsuccess('Expense Category Added Successfully!');
    }
    public function expensecategory_destroy($id)
    {
        Expense_category::find($id)->delete();
        return back()->with('delete_success', 'Expense Category Deleted Successfully!');
    }
}
