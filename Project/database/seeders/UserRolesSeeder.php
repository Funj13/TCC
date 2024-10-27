<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolesSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run()
    {
        // Cria os roles (se não existirem)
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Cria os usuários e associa os roles
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->roles()->attach($adminRole);

        $user = User::create([
            'name' => 'Usuário Comum',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->roles()->attach($userRole);
    }
}