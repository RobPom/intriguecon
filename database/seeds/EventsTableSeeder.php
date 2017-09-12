<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'IntrigueCon 2017',
            'description' => 'The Latest IntrigueCon',
            'location' => '0',
            'event_image' => 'noimage.jpg'
        ]);

    }
}