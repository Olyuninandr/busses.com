<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\City::class, 300)->create();
        factory(App\Models\Worker::class, 100)->create();
    }
}
