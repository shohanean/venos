<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route, Auth};
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\{HomeController, SocialController, ProfileController, BackupController, RoleController, UserController, CategoryController, CustomerController, SupplierController, StoreController, WarehouseController, ProductController};
use App\Http\Controllers\{ExpenseController, BrandController, UnitController, MiscController};

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/import', [HomeController::class, 'import'])->name('import');

//Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent again!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Socialite Routes
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook'])->name('auth.facebook.callback');

Route::middleware(['auth'])->group(function () {
    //Profile Routes
    Route::resource('profile', ProfileController::class);

    //Backup Routes
    Route::resource('backup', BackupController::class);

    //Role Routes
    Route::resource('role', RoleController::class);

    //User Routes
    Route::resource('user', UserController::class);

    //Category Routes
    Route::resource('category', CategoryController::class);
    Route::post('subcategory', [CategoryController::class, 'subcategory_store'])->name('subcategory.store');

    //Customer Routes
    Route::resource('customer', CustomerController::class);

    //Supplier Routes
    Route::resource('supplier', SupplierController::class);

    //Store Routes
    Route::resource('store', StoreController::class);

    //Store Routes
    Route::resource('warehouse', WarehouseController::class);

    //Product Routes
    Route::resource('product', ProductController::class);

    //Expense Routes
    Route::resource('expense', ExpenseController::class);
    Route::post('expensecategory', [ExpenseController::class, 'expensecategory_store'])->name('expensecategory.store');
    Route::delete('expensecategory/destroy/{id}', [ExpenseController::class, 'expensecategory_destroy'])->name('expensecategory.destroy');

    //Brand Routes
    Route::resource('brand', BrandController::class);

    //Unit Routes
    Route::resource('unit', UnitController::class);

    //Miscellaneous Routes
    Route::get('currencies', [MiscController::class, 'currencies'])->name('currencies.index');
    Route::post('currencies', [MiscController::class, 'currencies_post'])->name('currencies.store');
});
