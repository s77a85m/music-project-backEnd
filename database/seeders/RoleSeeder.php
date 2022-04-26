<?php

namespace Database\Seeders;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::query()->create([
            'title'=>'admin-all'
        ]);

        $role->permissions()->attach(Permission::all());

        $role=Role::query()->insert([
            [
                'title'=>'user-normal'
            ]
        ]);
    }
}
