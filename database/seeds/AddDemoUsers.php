<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class AddDemoUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->count() === 0) {
            User::firstOrCreate([
                'name' => 'admin',
                'email' => 'admin@demo.com',
                'password' => bcrypt('092u394ui9'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            User::firstOrCreate([
                'name' => 'nonpriv',
                'email' => 'nonpriv@demo.com',
                'password' => bcrypt('2893u4234'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            User::firstOrCreate([
                'name' => 'guest',
                'email' => 'guest@demo.com',
                'password' => bcrypt('2j3kerjksdf'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
