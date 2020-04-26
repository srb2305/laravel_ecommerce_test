<?php

use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OrderItem::class, 150)->create()->each(function ($order) {
	        $order->posts()->save(factory(App\OrderItem::class)->make());
	    });
    }
}
