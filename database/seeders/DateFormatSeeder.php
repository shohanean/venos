<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DateFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('date_formats')->count() > 0) {
            return;
        }
        DB::table('date_formats')->insert(
            [
                [
                    'pattern' => 'd-m-Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'm-d-Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'Y-m-d',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'd/m/Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'm/d/Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'Y/m/d',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'd.m.Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'm.d.Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'Y.m.d',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'd M, Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'd F, Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'jS F, Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'F, Y',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'd-m-Y (D)',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'd-m-Y (l)',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'D',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'l',
                    'created_at' => Carbon::now()
                ],
                [
                    'pattern' => 'diffForHumans',
                    'created_at' => Carbon::now()
                ],
            ]
        );
    }
}
