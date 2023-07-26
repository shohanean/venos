<?php

use App\Models\Profile;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Store;
use App\Models\User;
use App\Models\Warehouse;
use App\Models\Setting;
use Carbon\Carbon;

function profile_compleation($id)
{
    $percentage = 10; // if anyone opens an account get 10 points
    if (Profile::where('user_id', $id)->exists()) {
        $profile = Profile::where('user_id', $id)->first();
        if ($profile->phone_number) {
            $percentage += 20;
        }
        if ($profile->country_id) {
            $percentage += 5;
        }
        if ($profile->city_id) {
            $percentage += 5;
        }
        if ($profile->address) {
            $percentage += 10;
        }
        if ($profile->fb_link) {
            $percentage += 5;
        }
        if ($profile->ig_link) {
            $percentage += 5;
        }
        if ($profile->li_link) {
            $percentage += 5;
        }
    }
    if (User::find($id)->avatar) {
        $percentage += 35;
    }
    return $percentage;
}

function total_categories()
{
    return Category::count();
}
function total_customers()
{
    return Customer::count();
}
function total_suppliers()
{
    return Supplier::count();
}
function total_stores()
{
    return Store::count();
}
function total_warehouses()
{
    return Warehouse::count();
}
function setting_last_changed()
{
    return Setting::where('title', 'company_name')->first()->updated_at;
}
function setting($title)
{
    if (Setting::where('title', $title)->exists()) {
        return Setting::where('title', $title)->first()->value;
    } else {
        return "Wrong Settings";
    }
}

//v_date_time: Venos Custom Date Time Format
function v_date_time($datetime = "")
{
    if ($datetime) {
        if(setting('date_format') == 'diffForHumans'){
            return Carbon::parse($datetime)->diffForHumans();
        }else{
            return Carbon::parse($datetime)->setTimezone(auth()->user()->timezone)->format(setting('date_format') . ' ' . setting('time_format') . ':i:s A');
        }
    } else {
        return "Date Time Not Given";
    }
}
