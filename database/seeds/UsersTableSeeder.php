<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $users = [
            [
                'name' => 'Juan',
                'email' => 'juan@test.com',
                'password' => Hash::make('test')
            ]
        ];

        foreach($users as $user) {
            User::create($user);
        }

    }
}
