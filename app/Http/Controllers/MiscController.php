<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;

class MiscController extends Controller
{
    public function currencies()
    {
        $currencies = Currency::all();
        return view('backend.misc.currencies', compact('currencies'));
    }
    public function currencies_post(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|unique:currencies,name',
            'code' => 'required|max:50|unique:currencies,code',
            'symbol' => 'required|max:5',
        ]);
        Currency::create($request->except('_token'));
        return back()->with('success', 'Currency added successfully!');
    }
}
