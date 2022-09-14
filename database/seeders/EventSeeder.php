<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 10 events with sample data for the user_id 1
        \App\Models\Event::factory()->count(10)->create([
            'user_id' => 1,
        ]);
    }
}
