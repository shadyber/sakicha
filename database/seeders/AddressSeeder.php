<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->insert([
            'email' => 'admin@sakicha.com',
            'tel' => '+251-11-6631381',
            'tel2' => '+251-911-490397',
            'address1' => 'lebu Addis Ababa',
            'address2' => '',
            'city' => 'Addis Ababa',
            'country' => 'Ethiopia',
            'fax' => '+251-11-6631382',
            'facebook' => 'https://facebook.com/Sakicha',
            'twitter' => 'https://twitter.com/Sakicha',
            'instagram' => 'https://instagram.com/wonerta',

        ]);

    }
}
