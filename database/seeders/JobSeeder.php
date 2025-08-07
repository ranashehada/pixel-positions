<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags =Tag::factory()->count(3)->create();
        Job::factory(20)->hasAttached($tags)->create(new Sequence([
            'featured'=> false,
            'schedule'=>'Full Time',
        ],[
            'featured'=> true,
            'schedule'=> 'Part Time',
        ]));
    }
}
