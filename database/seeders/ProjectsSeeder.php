<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory()->create([
            'title'         => "title 1",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'order'         => 1,
            'status'        => Status::PROCESSING,
        ]);

        Project::factory()->create([
            'title'         => "title 2",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'order'         => 2,
            'status'        => Status::PROCESSING,
        ]);

        Project::factory()->create([
            'title'         => "title 3",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'order'         => 3,
            'status'        => Status::PROCESSING,
        ]);

        Project::factory()->create([
            'title'         => "title 4",
            'description'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            'order'         => 4,
            'status'        => Status::PROCESSING,
        ]);
    }
}
