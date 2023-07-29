<?php

namespace App\Service;

use App\Repositories\ImageRepository;
use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class ImageService
{
    /** @var ImageRepository */
    protected $imageRepository;

    /**
     * ImageService constructor.
     *
     * @param ImageRepository $imageRepository
     *
     */
    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    /**
     * Get all battles.
     *
     * @return Collection
     *
     */
    public function getAll(): Collection
    {
        return $this->imageRepository->getAll();
    }

    /**
     * @param int $id
     * @return Image
     */
    public function getImage(int $id): Image
    {
        return  $this->imageRepository->getImage($id);
    }

    /**
     * @param string $name
     * @return Image
     */
    public function getImageByName(string $name): Image
    {
        return  $this->imageRepository->getImageByName($name);
    }

    /**
     * Create a image.
     *
     * @param mixed $newImage
     *
     * @return Image|JsonResponse
     *
     */
    public function createImage(mixed $newImage): Image|JsonResponse
    {
        return $this->imageRepository->createImage($newImage);
    }

    /**
     * Update a image.
     *
     * @param int $imageId
     * @param mixed $newImage
     *
     * @return int
     *
     */
    public function updateImage(int $imageId, mixed $newImage): int
    {
        return  $this->imageRepository->updateImage($imageId, $newImage);
    }

    /**
     * Change a image status.
     *
     * @param int $imageId
     * @param string $status
     *
     * @return int
     *
     */
    public function changeStatusImage(int $imageId, string $status): int
    {
        return  $this->imageRepository->changeStatusImage($imageId, $status);
    }

    /**
     * Remove a image.
     *
     * @param mixed $imageId
     *
     * @return void
     *
     */
    public function removeImage($imageId): void
    {
        $this->imageRepository->removeImage($imageId);
    }
}
