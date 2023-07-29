<?php

namespace Database\Seeders;

use App\Enums\Status;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var Project $project */
        foreach (Project::all() as $project){
            $counter = 1;
            while($counter <= 4){
                Image::factory()->create([
                    'folder'        => "images",
                    'name'          => "slider-image-{$counter}.jpg",
                    'status'        => Status::ACTIVE,
                    'order'         => $counter,
                    'project_id'    => $project->id
                ]);

                $counter++;
            }
        }
    }
}
