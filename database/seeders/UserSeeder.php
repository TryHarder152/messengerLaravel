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
        
        $data = [
            ['id'=>1, 'name'=>'Oleg', 'last_name'=>'Kudelkin', 'email'=>'Oleg@mail.ru', 'password'=>'$2y$10$l8zNRsNAm0uVm9EqnMJHe.zpnpVkNbNDjZmefLEy3m67SCMoZZPZ6', 'created_at'=>"2022-09-16 17:08:20", 'updated_at'=>"2022-09-16 17:08:20", 'role'=>0],
            ['id'=>2, 'name'=>'Maria', 'last_name'=>'Ro', 'email'=>'Oleg@mail.ru', 'password'=>'$2y$10$l8zNRsNAm0uVm9EqnMJHe.zpnpVkNbNDjZmefLEy3m67SCMoZZPZ6', 'created_at'=>"2022-09-16 17:08:20", 'updated_at'=>"2022-09-16 17:08:20", 'role'=>0],
            ['id'=>3, 'name'=>'Nina', 'last_name'=>'Richi', 'email'=>'Oleg@mail.ru', 'password'=>'$2y$10$l8zNRsNAm0uVm9EqnMJHe.zpnpVkNbNDjZmefLEy3m67SCMoZZPZ6', 'created_at'=>"2022-09-16 17:08:20", 'updated_at'=>"2022-09-16 17:08:20", 'role'=>0]
        ];
        
        DB::table('users')->insert($data);
    }
}