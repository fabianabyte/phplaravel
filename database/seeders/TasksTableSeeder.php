<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        factory(\App\Models\Task::class)->create([
            'name'=> 'teste 1',
            'complete'=> 0
        ]);

        factory(\App\Models\Task::class)->create([
            'name'=> 'teste 2',
            'complete'=> 0
        ]);

        factory(\App\Models\Task::class)->create([
            'name'=> 'teste 3',
            'complete'=> 1
        ]);
    }
}
