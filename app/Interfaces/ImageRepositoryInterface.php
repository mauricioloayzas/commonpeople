<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ImageRepositoryInterface
{
    public function getAll(): Collection;
    public function getImage(int $productId): ?Model;
    public function createImage(array $newImage): Model;
    public function updateImage(int $productId, array $newImage): int;
    public function changeStatusImage(int $productId, string $status): int;
    public function removeImage(int $productId): void;
}
