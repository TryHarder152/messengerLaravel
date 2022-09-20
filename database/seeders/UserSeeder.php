<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vera',
            'email' => 'Vsim@gmail.com',
            'email_verified_at'=>null,
            'remember_token'=>null,
            'created_at'=>null,
            'updated_at'=>null,
            'deleted_at'=>null,
            'role'=>0,
            'last_name'=>'Simonova',
            'avatar'=>null,
            'password' => Hash::make('password'),
        ]);
    }
}