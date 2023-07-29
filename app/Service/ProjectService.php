<?php

namespace App\Service;

use App\Repositories\ProjectRepository;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class ProjectService
{
    /** @var ProjectRepository */
    protected $projectRepository;

    /**
     * ProjectService constructor.
     *
     * @param ProjectRepository $projectRepository
     *
     */
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * Get all battles.
     *
     * @return Collection
     *
     */
    public function getAll(): Collection
    {
        return $this->projectRepository->getAll();
    }

    /**
     * @param int $id
     * @return Project
     */
    public function getProject(int $id): Project
    {
        return  $this->projectRepository->getProject($id);
    }

    /**
     * @param string $name
     * @return Project
     */
    public function getProjectByName(string $name): Project
    {
        return  $this->projectRepository->getProjectByName($name);
    }

    /**
     * Create a project.
     *
     * @param mixed $newProject
     *
     * @return Project|JsonResponse
     *
     */
    public function createProject(mixed $newProject): Project|JsonResponse
    {
        return $this->projectRepository->createProject($newProject);
    }

    /**
     * Update a project.
     *
     * @param int $projectId
     * @param mixed $newProject
     *
     * @return int
     *
     */
    public function updateProject(int $projectId, mixed $newProject): int
    {
        return  $this->projectRepository->updateProject($projectId, $newProject);
    }

    /**
     * Change a project status.
     *
     * @param int $projectId
     * @param string $status
     *
     * @return int
     *
     */
    public function changeStatusProject(int $projectId, string $status): int
    {
        return  $this->projectRepository->changeStatusProject($projectId, $status);
    }

    /**
     * Remove a project.
     *
     * @param mixed $projectId
     *
     * @return void
     *
     */
    public function removeProject($projectId): void
    {
        $this->projectRepository->removeProject($projectId);
    }
}
