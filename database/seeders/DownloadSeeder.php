<?php

namespace Database\Seeders;

use App\Models\Admin\Download;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $download=Download::query()->create([
            'number'=>0
        ]);
    }
}
