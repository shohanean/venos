<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('customers')->count() > 0) {
            return;
        }
        DB::table('customers')->insert([
            'name' => 'Walk in Customer',
            'phone_number' => '01700000000',
            'added_by' => 1,
            'created_at' => Carbon::now()
        ]);
    }
}
