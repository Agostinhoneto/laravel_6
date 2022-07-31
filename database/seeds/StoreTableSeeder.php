<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(\App\User::class,40)->create()->each(function($user){
         //   $user->store()->save(factory(\App\Store::class)->make());
        //});

        factory(\App\User::class,10)->create()->each(function($user){
          $user->store()->save(factory(\App\Store::class));
       });

       // $stores = \App\Store::all();
        //foreach ($stores as $store){
          //  $store->products()->save(factory(\App\Product::class)->make());
   //     }

       //factory(\App\Store::class,10)->create();
    }
}
