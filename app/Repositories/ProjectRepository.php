<?php

namespace App\Repositories;

use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;
use Illuminate\Support\Collection;

class ProjectRepository implements ProjectRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Project::all();
    }

    /**
     * @param int $productId
     * @return Project|null
     */
    public function getProject(int $productId): ?Project
    {
        $product = Project::findOrFail($productId);
        return $product;
    }

    /**
     * @param string $productName
     * @return Project|null
     */
    public function getProjectByName(string $productName): ?Project
    {
        $product = Project::where("name", $productName)->first();
        return $product;
    }

    /**
     * @param array $newProject
     * @return Project
     */
    public function createProject(array $newProject): Project
    {
        return Project::create($newProject);
    }

    /**
     * @param int $productId
     * @param array $newProject
     * @return int
     */
    public function updateProject(int  $productId, array $newProject): int
    {
        return Project::whereId($productId)->update($newProject);
    }

    /**
     * @param int $productId
     * @param string $status
     * @return int
     */
    public function changeStatusProject(int $productId, string $status): int
    {
        return Project::whereId($productId)->update(['status' => $status]);
    }

    /**
     * @param int $productId
     * @return void
     */
    public function removeProject(int $productId): void
    {
        Project::destroy($productId);
    }
}
