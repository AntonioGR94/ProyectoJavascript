<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 2)->create();
        factory(App\Brand::class, 5)->create();
        $sneakers = factory(App\Sneaker::class, 50)->create();
        $orders = factory(App\Order::class, 5)->create();

        
        
        
        // foreach($sneakers as $sneaker){
        //     $sneaker->orders()->attach(
        //         $orders->random(random_int(1,3))
        //     );
        // }


        $sneakers->each(function(App\Sneaker $sneaker) use ($orders){
            $sneaker->orders()->attach(
                $orders->random(random_int(1,5))
            );
        });


    }
}
