<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Task = [
            [
                'title' => 'Task 1',
                'description' => 'Doing assignment',
                'status' => 'todo',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 2',
                'description' => 'Meeting with team',
                'status' => 'in_progress',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 3',
                'description' => 'Reviewing code',
                'status' => 'done',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 4',
                'description' => 'Planning next sprint',
                'status' => 'todo',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 5',
                'description' => 'Testing new feature',
                'status' => 'in_progress',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 6',
                'description' => 'Documentation update',
                'status' => 'done',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 7',
                'description' => 'Bug fixing',
                'status' => 'todo',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 8',
                'description' => 'Customer support',
                'status' => 'in_progress',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 9',
                'description' => 'Code refactoring',
                'status' => 'done',
                'user_id' => '1'
            ],
            [
                'title' => 'Task 10',
                'description' => 'Team training',
                'status' => 'todo',
                'user_id' => '1'
            ],
            // Add more dummy data as needed
        ];



        foreach ($Task as $key => $value) {
            Task::create($value);
        }
    }
}
