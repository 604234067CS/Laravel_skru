<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //จำลองข้อมูลในฐานข้อมูล
        factory(App\Article::class,1000)->create();
    }
}
