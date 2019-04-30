<?php

use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;



$factory->define(Product::class, function (Faker $faker) {
    return [
       
          'name'=> $faker->name,
          'slug'=> Str::slug($faker->name),
          'category_id'=> random_int(1,3),
          'description'=> $faker->text,
          'purchase_price'=> random_int(100, 10000),
          'sales_price'=> random_int(1000, 10000),
          'quantity'=> random_int(1, 10),
    ];
});


$factory->afterCreating(Product::class,function($pp,$faker)
{
	$pp->photos()->create(['image'=>$faker->imageUrl()]);
});

