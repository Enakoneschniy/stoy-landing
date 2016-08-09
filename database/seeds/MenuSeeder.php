<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'title' => 'Главная',
                'url' => '/',
                'active' => 1,
                'sort' => 1
            ],
            [
                'title' => 'Портфолило',
                'url' => '#portfolio',
                'active' => 1,
                'sort' => 3
            ],
            [
                'title' => 'Виды работ',
                'url' => '#services',
                'active' => 1,
                'sort' => 2
            ],
            [
                'title' => 'Блог',
                'url' => '#blog',
                'active' => 1,
                'sort' => 4
            ]
        ]);
    }
}
