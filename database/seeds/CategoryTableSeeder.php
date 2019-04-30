<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       Category::insert(
        [
[

'name' => 'Electronics',
'slug' => Str::slug('Electronics'),

],[

'name' => 'Cloths',
'slug' => Str::slug('Cloths'),

],[


'name' => 'Home Appliances',
'slug' => Str::slug('Home Appliances'),

]

]);
    }
}
