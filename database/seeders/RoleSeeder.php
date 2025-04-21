<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roleAdmin = Role::create([
            "name" => "Admin",
        ]);
        $roleCustomer = Role::create([
            "name" => "User",
        ]);

        $userAdmin = User::create([
            "name" => "Ade Tirta Adrianta",
            "email" => "atirtaadrianta@gmail.com",
            "password" => bcrypt("12345678"),
        ]);
        $userCustomer = User::create([
            "name" => "Pasco Degama",
            "email" => "kachoukalhi@gmail.com",
            "password" => bcrypt("12345678"),
        ]);
        
        $userAdmin->assignRole($roleAdmin);
        $userCustomer->assignRole($roleCustomer);
        
    }
}
