<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Yassine', 
            'email' => 'admin@adminable.com',
            'password' => bcrypt('eRROR404@'),
        ]);
        $superAdmin->assignRole('super admin');
    
        $admin = User::create([
            'name' => 'ahmed', 
            'email' => 'ahmed@gmail.com',
            'password' => bcrypt('eRROR404@'),
        ]);
    
        $admin->assignRole('admin');
    
    }
}
