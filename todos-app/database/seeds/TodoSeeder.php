<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating 10 instances of called apptodo factory
        factory(App\Todo::class, 5)->create();
    }
}
