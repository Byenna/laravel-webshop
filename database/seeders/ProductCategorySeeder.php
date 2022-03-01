<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'id'            => 1, 
            'name'          => 'machine',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_categories')->insert([
            'id'            => 2, 
            'name'          => 'bean',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_categories')->insert([
            'id'            => 3, 
            'name'          => 'cup',
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 2, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 3, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 4, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 5, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 6, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 7, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 8, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 9, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 10, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 11, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 12, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 13, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 14, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 15, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 16, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 17, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 18, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 19, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 20, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 21, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 22, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 23, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 24, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 25, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 26, 
        //     'name'          => 'machine',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 27, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 28, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 29, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 30, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 31, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 32, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 33, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 34, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 35, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 36, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 37, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 38, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 39, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 40, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 41, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 42, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 43, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 44, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 45, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);


        // DB::table('product_categories')->insert([
        //     'id'            => 46, 
        //     'name'          => 'beans',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 47, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 48, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 49, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 50, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 51, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 52, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 53, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 54, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 55, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 56, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 57, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 58, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 59, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 60, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 61, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 62, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 63, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 64, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 65, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 66, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // DB::table('product_categories')->insert([
        //     'id'            => 67, 
        //     'name'          => 'cups',
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

    }
}
