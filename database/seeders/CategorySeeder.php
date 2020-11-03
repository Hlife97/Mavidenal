<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Bilgisayar', 'Kameralar', 'Diğer Ürünler'];
        foreach ($categories as $category) {
        	DB::table('categories')->insert([
        		'name'=>$category,
            'created_at'=>now(),
            'updated_at'=>now()
        	]);
        }
    }
}
