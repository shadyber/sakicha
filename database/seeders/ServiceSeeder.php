<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->insert([
            'name' => 'Export',
            'detail' => 'We export all types of washed and unwashed Ethiopian green coffees,',
            'icon' => 'bx bx-upload',
        ]);

        \DB::table('services')->insert([
            'name' => 'Export',
            'detail' => 'We export all types of washed and unwashed Ethiopian green coffees,',
            'icon' => 'bx bx-upload',
        ]);

    }
}
