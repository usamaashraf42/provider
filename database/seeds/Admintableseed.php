<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class Admintableseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password'   => Hash::make('password'),
            
        ]);
    }
}
