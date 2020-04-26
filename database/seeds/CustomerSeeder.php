<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Customer::class, 200)->create()->each(function ($user) {
	        $user->posts()->save(factory(App\Customer::class)->make());
	    });
    }
}
