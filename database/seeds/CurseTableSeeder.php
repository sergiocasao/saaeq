<?php

use Illuminate\Database\Seeder;

class CurseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Curse::class, 15 )->create();
    }
}
