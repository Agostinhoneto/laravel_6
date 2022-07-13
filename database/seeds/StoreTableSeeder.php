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

        factory(\App\User::class,40)->create();
    }
}
