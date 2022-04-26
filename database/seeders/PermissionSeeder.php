<?php

namespace Database\Seeders;

use App\Models\Admin\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()->insert([
            [
                'title'=>'مديريت كاربران'
            ],
            [
                'title'=>'مديريت نقش ها و دسترسي ها'
            ],
            [
                'title'=>'مديريت آهنگ ها'
            ],
            [
                'title'=>'مديريت استايل ها'
            ],
            [
                'title'=>'مديريت آلبوم ها'
            ],
            [
                'title'=>'مديريت هنرمندان'
            ],
            [
                'title'=>'مديريت كامنت ها'
            ],
            [
                'title'=>'كاربر معمولي'
            ],
        ]);
    }
}
