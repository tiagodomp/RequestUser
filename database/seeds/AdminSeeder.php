<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
            ['name' => 'Admin', 'created_at' => now()->toDateTimeString()],
            ['name' => 'basic', 'created_at' => now()->toDateTimeString()]
        ]);

        $user = new User();
        $user->first_name           = 'Admin';
        $user->last_name            = 'Users';
        $user->email                = 'eve.holt@reqres.in';
        $user->email_verified_at    = now();
        $user->avatar               = 'https://images.unsplash.com/photo-1551026395-44699d859bbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=100';
        $user->password             = Hash::make('cityslicka');
        $user->rule_id              = 1;
        $user->save();
    }
}
