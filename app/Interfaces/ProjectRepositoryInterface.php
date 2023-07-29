<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ProjectRepositoryInterface
{
    public function getAll(): Collection;
    public function getProject(int $productId): ?Model;
    public function createProject(array $newProject): Model;
    public function updateProject(int $productId, array $newProject): int;
    public function changeStatusProject(int $productId, string $status): int;
    public function removeProject(int $productId): void;
}
