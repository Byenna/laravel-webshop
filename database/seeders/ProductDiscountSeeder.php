<?php

namespace Database\Seeders;

use App\Models\ProductDiscount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductDiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('product_discount')->insert([
            'id'            => 1,
            'name'          => '30% SALE',
            'discount'      => 0.3,
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_discount')->insert([
            'id'            => 2,
            'name'          => '50% SALE',
            'discount'      => 0.5,
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 3,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 4,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 5,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 6,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 7,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 8,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 9,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 10,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 11,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 12,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 13,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 14,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 15,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 16,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 17,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 18,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 19,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 20,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 21,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 22,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 23,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 24,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 25,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 26,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 27,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 28,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 29,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 30,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 31,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 32,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 33,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 34,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 35,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 36,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 37,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 38,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 39,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 40,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 41,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 42,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 43,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 44,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 45,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 46,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 47,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 48,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 49,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 50,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 51,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 52,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 53,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 54,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 55,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 56,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 57,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 58,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 59,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 60,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 61,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 62,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 63,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 64,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 65,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 66,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 67,
        //     'name'          => '30% SALE',
        //     'discount'      => 0.3,
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

    }
}
