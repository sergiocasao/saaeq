<?php

use Illuminate\Database\Seeder;

class SignaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Signature::class, 75 )->create();
    }
}
