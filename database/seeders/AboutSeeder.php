<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('abouts')->insert([
            'name' => 'Sakicha Coffee Export plc',
            'about' => 'Sakicha is  supply of both washed and unwashed coffee from its washing and hulling stations located in Oromiya Regional State. Sakicha Employs over 900 employees on a temporary basis and provides housing and health care to the dependents',
             'mission' => 'To ensure production and serving quality coffee to the world with emphasis on environmental conservation, applying latest technology, value addition to existing products, diversifying while giving utmost care to the interest of our valued customers.',
             'vision' => 'To be a market leader in producing and serving quality coffee and related products to the world.',
             'value' => 'value',
             'goal' => '',
             'background' => 'Sakicha Coffee Export P.L.C were officially established in 2007 and 1996 respectively with operational sites in Oromiya National Regional States.',
             'photo' => '/img/banner.jpg',
             'video' => 'https://youtube.com/watch/sakicha',

             ]);

    }
}
