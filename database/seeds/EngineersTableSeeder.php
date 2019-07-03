<?php

use Illuminate\Database\Seeder;

use App\Engineers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class EngineerssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Engineers::truncate();
        
        $engineers = [
            [
                'name' => 'Roy',
                'email' => 'roy@sample.com'
            ]
        ];

        foreach($engineers as $engineer) {
            Engineers::create($engineer);
        }

    }
}
