<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectTaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
   

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'project_id' => Project::pluck('id')->random(),
        'task_id' => Task::pluck('id')->random(),
        'status' => $this->faker->word,
       
        ];
    }
}
