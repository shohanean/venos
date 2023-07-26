<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('settings')->count() > 0) {
            return;
        }
        DB::table('settings')->insert(
            [
                [
                    'title' => 'company_name',
                    'value' => 'Venos',
                    'created_at' => Carbon::now()
                ],
                [
                    'title' => 'company_phone',
                    'value' => '+1 000 0000 000',
                    'created_at' => Carbon::now()
                ],
                [
                    'title' => 'default_email_address',
                    'value' => 'hossain_shohan1@live.com',
                    'created_at' => Carbon::now()
                ],
                [
                    'title' => 'currency',
                    'value' => DB::table('currencies')->where('code', 'BDT')->first()->id,
                    'created_at' => Carbon::now()
                ],
                [
                    'title' => 'date_format',
                    'value' => 'd-m-Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'title' => 'time_format',
                    'value' => 'h',
                    'created_at' => Carbon::now()
                ],
            ]
        );
    }
}
