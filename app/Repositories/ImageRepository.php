<?php

namespace App\Repositories;

use App\Interfaces\ImageRepositoryInterface;
use App\Models\Image;
use Illuminate\Support\Collection;

class ImageRepository implements ImageRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Image::all();
    }

    /**
     * @param int $productId
     * @return Image|null
     */
    public function getImage(int $productId): ?Image
    {
        $product = Image::findOrFail($productId);
        return $product;
    }

    /**
     * @param string $productName
     * @return Image|null
     */
    public function getImageByName(string $productName): ?Image
    {
        $product = Image::where("name", $productName)->first();
        return $product;
    }

    /**
     * @param array $newImage
     * @return Image
     */
    public function createImage(array $newImage): Image
    {
        return Image::create($newImage);
    }

    /**
     * @param int $productId
     * @param array $newImage
     * @return int
     */
    public function updateImage(int  $productId, array $newImage): int
    {
        return Image::whereId($productId)->update($newImage);
    }

    /**
     * @param int $productId
     * @param string $status
     * @return int
     */
    public function changeStatusImage(int $productId, string $status): int
    {
        return Image::whereId($productId)->update(['status' => $status]);
    }

    /**
     * @param int $productId
     * @return void
     */
    public function removeImage(int $productId): void
    {
        Image::destroy($productId);
    }
}
