<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('currencies')->count() > 0) {
            return;
        }

        DB::table('currencies')->insert([
            ['created_at' => Carbon::now(), 'code' =>'AFN' , 'name' => 'Afghani', 'symbol' => '؋' ],
            ['created_at' => Carbon::now(), 'code' =>'ALL' , 'name' => 'Lek', 'symbol' => 'Lek' ],
            ['created_at' => Carbon::now(), 'code' =>'ANG' , 'name' => 'Netherlands Antillian Guilder', 'symbol' => 'ƒ' ],
            ['created_at' => Carbon::now(), 'code' =>'ARS' , 'name' => 'Argentine Peso', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'AUD' , 'name' => 'Australian Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'AWG' , 'name' => 'Aruban Guilder', 'symbol' => 'ƒ' ],
            ['created_at' => Carbon::now(), 'code' =>'AZN' , 'name' => 'Azerbaijanian Manat', 'symbol' => 'ман' ],
            ['created_at' => Carbon::now(), 'code' =>'BAM' , 'name' => 'Convertible Marks', 'symbol' => 'KM' ],
            ['created_at' => Carbon::now(), 'code' => 'BDT', 'name' => 'Bangladeshi Taka', 'symbol' => '৳'],
            ['created_at' => Carbon::now(), 'code' =>'BBD' , 'name' => 'Barbados Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'BGN' , 'name' => 'Bulgarian Lev', 'symbol' => 'лв' ],
            ['created_at' => Carbon::now(), 'code' =>'BMD' , 'name' => 'Bermudian Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'BND' , 'name' => 'Brunei Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'BOB' , 'name' => 'BOV Boliviano Mvdol', 'symbol' => '$b' ],
            ['created_at' => Carbon::now(), 'code' =>'BRL' , 'name' => 'Brazilian Real', 'symbol' => 'R$' ],
            ['created_at' => Carbon::now(), 'code' =>'BSD' , 'name' => 'Bahamian Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'BWP' , 'name' => 'Pula', 'symbol' => 'P' ],
            ['created_at' => Carbon::now(), 'code' =>'BYR' , 'name' => 'Belarussian Ruble', 'symbol' => '₽' ],
            ['created_at' => Carbon::now(), 'code' =>'BZD' , 'name' => 'Belize Dollar', 'symbol' => 'BZ$' ],
            ['created_at' => Carbon::now(), 'code' =>'CAD' , 'name' => 'Canadian Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'CHF' , 'name' => 'Swiss Franc', 'symbol' => 'CHF' ],
            ['created_at' => Carbon::now(), 'code' =>'CLP' , 'name' => 'CLF Chilean Peso Unidades de fomento', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'CNY' , 'name' => 'Yuan Renminbi', 'symbol' => '¥' ],
            ['created_at' => Carbon::now(), 'code' =>'COP' , 'name' => 'COU Colombian Peso Unidad de Valor Real', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'CRC' , 'name' => 'Costa Rican Colon', 'symbol' => '₡' ],
            ['created_at' => Carbon::now(), 'code' =>'CUP' , 'name' => 'CUC Cuban Peso Peso Convertible', 'symbol' => '₱' ],
            ['created_at' => Carbon::now(), 'code' =>'CZK' , 'name' => 'Czech Koruna', 'symbol' => 'Kč' ],
            ['created_at' => Carbon::now(), 'code' =>'DKK' , 'name' => 'Danish Krone', 'symbol' => 'kr' ],
            ['created_at' => Carbon::now(), 'code' =>'DOP' , 'name' => 'Dominican Peso', 'symbol' => 'RD$' ],
            ['created_at' => Carbon::now(), 'code' =>'EGP' , 'name' => 'Egyptian Pound', 'symbol' => '£' ],
            ['created_at' => Carbon::now(), 'code' =>'EUR' , 'name' => 'Euro', 'symbol' => '€' ],
            ['created_at' => Carbon::now(), 'code' =>'FJD' , 'name' => 'Fiji Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'FKP' , 'name' => 'Falkland Islands Pound', 'symbol' => '£' ],
            ['created_at' => Carbon::now(), 'code' =>'GBP' , 'name' => 'Pound Sterling', 'symbol' => '£' ],
            ['created_at' => Carbon::now(), 'code' =>'GIP' , 'name' => 'Gibraltar Pound', 'symbol' => '£' ],
            ['created_at' => Carbon::now(), 'code' =>'GTQ' , 'name' => 'Quetzal', 'symbol' => 'Q' ],
            ['created_at' => Carbon::now(), 'code' =>'GYD' , 'name' => 'Guyana Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'HKD' , 'name' => 'Hong Kong Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'HNL' , 'name' => 'Lempira', 'symbol' => 'L' ],
            ['created_at' => Carbon::now(), 'code' =>'HRK' , 'name' => 'Croatian Kuna', 'symbol' => 'kn' ],
            ['created_at' => Carbon::now(), 'code' =>'HUF' , 'name' => 'Forint', 'symbol' => 'Ft' ],
            ['created_at' => Carbon::now(), 'code' =>'IDR' , 'name' => 'Rupiah', 'symbol' => 'Rp' ],
            ['created_at' => Carbon::now(), 'code' =>'ILS' , 'name' => 'New Israeli Sheqel', 'symbol' => '₪' ],
            ['created_at' => Carbon::now(), 'code' =>'IRR' , 'name' => 'Iranian Rial', 'symbol' => '﷼' ],
            ['created_at' => Carbon::now(), 'code' =>'ISK' , 'name' => 'Iceland Krona', 'symbol' => 'kr' ],
            ['created_at' => Carbon::now(), 'code' =>'JMD' , 'name' => 'Jamaican Dollar', 'symbol' => 'J$' ],
            ['created_at' => Carbon::now(), 'code' =>'JPY' , 'name' => 'Yen', 'symbol' => '¥' ],
            ['created_at' => Carbon::now(), 'code' =>'KGS' , 'name' => 'Som', 'symbol' => 'лв' ],
            ['created_at' => Carbon::now(), 'code' =>'KHR' , 'name' => 'Riel', 'symbol' => '៛' ],
            ['created_at' => Carbon::now(), 'code' =>'KPW' , 'name' => 'North Korean Won', 'symbol' => '₩' ],
            ['created_at' => Carbon::now(), 'code' =>'KRW' , 'name' => 'Won', 'symbol' => '₩' ],
            ['created_at' => Carbon::now(), 'code' =>'KYD' , 'name' => 'Cayman Islands Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'KZT' , 'name' => 'Tenge', 'symbol' => 'лв' ],
            ['created_at' => Carbon::now(), 'code' =>'LAK' , 'name' => 'Kip', 'symbol' => '₭' ],
            ['created_at' => Carbon::now(), 'code' =>'LBP' , 'name' => 'Lebanese Pound', 'symbol' => '£' ],
            ['created_at' => Carbon::now(), 'code' =>'LKR' , 'name' => 'Sri Lanka Rupee', 'symbol' => '₨' ],
            ['created_at' => Carbon::now(), 'code' =>'LRD' , 'name' => 'Liberian Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'LTL' , 'name' => 'Lithuanian Litas', 'symbol' => 'Lt' ],
            ['created_at' => Carbon::now(), 'code' =>'LVL' , 'name' => 'Latvian Lats', 'symbol' => 'Ls' ],
            ['created_at' => Carbon::now(), 'code' =>'MKD' , 'name' => 'Denar', 'symbol' => 'ден' ],
            ['created_at' => Carbon::now(), 'code' =>'MNT' , 'name' => 'Tugrik', 'symbol' => '₮' ],
            ['created_at' => Carbon::now(), 'code' =>'MUR' , 'name' => 'Mauritius Rupee', 'symbol' => '₨' ],
            ['created_at' => Carbon::now(), 'code' =>'MXN' , 'name' => 'MXV Mexican Peso Mexican Unidad de Inversion (UDI]', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'MYR' , 'name' => 'Malaysian Ringgit', 'symbol' => 'RM' ],
            ['created_at' => Carbon::now(), 'code' =>'MZN' , 'name' => 'Metical', 'symbol' => 'MT' ],
            ['created_at' => Carbon::now(), 'code' =>'NGN' , 'name' => 'Naira', 'symbol' => '₦' ],
            ['created_at' => Carbon::now(), 'code' =>'NIO' , 'name' => 'Cordoba Oro', 'symbol' => 'C$' ],
            ['created_at' => Carbon::now(), 'code' =>'NOK' , 'name' => 'Norwegian Krone', 'symbol' => 'kr' ],
            ['created_at' => Carbon::now(), 'code' =>'NPR' , 'name' => 'Nepalese Rupee', 'symbol' => '₨' ],
            ['created_at' => Carbon::now(), 'code' =>'NZD' , 'name' => 'New Zealand Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'OMR' , 'name' => 'Rial Omani', 'symbol' => '﷼' ],
            ['created_at' => Carbon::now(), 'code' =>'PAB' , 'name' => 'USD Balboa US Dollar', 'symbol' => 'B/.' ],
            ['created_at' => Carbon::now(), 'code' =>'PEN' , 'name' => 'Nuevo Sol', 'symbol' => 'S/.' ],
            ['created_at' => Carbon::now(), 'code' =>'PHP' , 'name' => 'Philippine Peso', 'symbol' => 'Php' ],
            ['created_at' => Carbon::now(), 'code' =>'PKR' , 'name' => 'Pakistan Rupee', 'symbol' => '₨' ],
            ['created_at' => Carbon::now(), 'code' =>'PLN' , 'name' => 'Zloty', 'symbol' => 'zł' ],
            ['created_at' => Carbon::now(), 'code' =>'PYG' , 'name' => 'Guarani', 'symbol' => 'Gs' ],
            ['created_at' => Carbon::now(), 'code' =>'QAR' , 'name' => 'Qatari Rial', 'symbol' => '﷼' ],
            ['created_at' => Carbon::now(), 'code' =>'RON' , 'name' => 'New Leu', 'symbol' => 'lei' ],
            ['created_at' => Carbon::now(), 'code' =>'RSD' , 'name' => 'Serbian Dinar', 'symbol' => 'Дин.' ],
            ['created_at' => Carbon::now(), 'code' =>'RUB' , 'name' => 'Russian Ruble', 'symbol' => 'руб' ],
            ['created_at' => Carbon::now(), 'code' =>'SAR' , 'name' => 'Saudi Riyal', 'symbol' => '﷼' ],
            ['created_at' => Carbon::now(), 'code' =>'SBD' , 'name' => 'Solomon Islands Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'SCR' , 'name' => 'Seychelles Rupee', 'symbol' => '₨' ],
            ['created_at' => Carbon::now(), 'code' =>'SEK' , 'name' => 'Swedish Krona', 'symbol' => 'kr' ],
            ['created_at' => Carbon::now(), 'code' =>'SGD' , 'name' => 'Singapore Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'SHP' , 'name' => 'Saint Helena Pound', 'symbol' => '£' ],
            ['created_at' => Carbon::now(), 'code' =>'SOS' , 'name' => 'Somali Shilling', 'symbol' => 'S' ],
            ['created_at' => Carbon::now(), 'code' =>'SRD' , 'name' => 'Surinam Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'SVC' , 'name' => 'USD El Salvador Colon US Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'SYP' , 'name' => 'Syrian Pound', 'symbol' => '£' ],
            ['created_at' => Carbon::now(), 'code' =>'THB' , 'name' => 'Baht', 'symbol' => '฿' ],
            ['created_at' => Carbon::now(), 'code' =>'TRY' , 'name' => 'Turkish Lira', 'symbol' => 'TL' ],
            ['created_at' => Carbon::now(), 'code' =>'TTD' , 'name' => 'Trinidad and Tobago Dollar', 'symbol' => 'TT$' ],
            ['created_at' => Carbon::now(), 'code' =>'TWD' , 'name' => 'New Taiwan Dollar', 'symbol' => 'NT$' ],
            ['created_at' => Carbon::now(), 'code' =>'UAH' , 'name' => 'Hryvnia', 'symbol' => '₴' ],
            ['created_at' => Carbon::now(), 'code' =>'USD' , 'name' => 'US Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'UYU' , 'name' => 'UYI Uruguay Peso en Unidades Indexadas', 'symbol' => '$U' ],
            ['created_at' => Carbon::now(), 'code' =>'UZS' , 'name' => 'Uzbekistan Sum', 'symbol' => 'лв' ],
            ['created_at' => Carbon::now(), 'code' =>'VEF' , 'name' => 'Bolivar Fuerte', 'symbol' => 'Bs' ],
            ['created_at' => Carbon::now(), 'code' =>'VND' , 'name' => 'Dong', 'symbol' => '₫' ],
            ['created_at' => Carbon::now(), 'code' =>'XCD' , 'name' => 'East Caribbean Dollar', 'symbol' => '$' ],
            ['created_at' => Carbon::now(), 'code' =>'YER' , 'name' => 'Yemeni Rial', 'symbol' => '﷼' ],
            ['created_at' => Carbon::now(), 'code' =>'ZAR' , 'name' => 'Rand', 'symbol' => 'R' ],
        ]);
    }
}
