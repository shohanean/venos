<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Imports\UsersImport;
use App\Models\Subcategory;
use App\Models\Expense;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Permission::create([
        //   'name' => 'can restore user'
        // ]);
        // User::find(1)->assignRole('Super Admin');
        // Role::count();
        // Permission::count();

        $todays_expense = Expense::where([
            'date' => Carbon::now()->format('Y-m-d')
        ])->sum('amount');
        return view('home',[
            'roles' => Role::count(),
            'permissions' => Permission::count(),
            'subcategories' => Subcategory::count(),
            'users' => User::latest()->paginate(10),
            'todays_expense' => $todays_expense
        ]);
    }
    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('import'));
        return back();
    }
}
