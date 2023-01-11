<?php

namespace Database\Seeders;

use App\Models\Environment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Environment::factory(10)->create([
            'project_id' => 1
        ]);
    }
}
