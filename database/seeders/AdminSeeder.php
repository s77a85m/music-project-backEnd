<?php

namespace Database\Seeders;

use App\Models\Admin\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::query()->where('title', 'admin-all');
        $user=User::query()->create([
            'name'=>'adminUser',
            'email'=>'alimusavi77@gmail.com',
            'password'=>bcrypt('Ali123456789')
        ]);
        $user->roles()->attach($role->id);
    }
}
