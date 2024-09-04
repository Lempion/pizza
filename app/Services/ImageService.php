<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{

    public static function movePhoto($sourcePath, $destinationPath): array
    {
        if (Storage::exists($sourcePath)) {
            Storage::move($sourcePath, $destinationPath);
        } else {
            return ['message' => 'File not found.', 'status' => 'error'];
        }
        return ['message' => 'File moved.', 'status' => 'success'];
    }

    public static function uploadPhoto($file, $path): string
    {
        $imageName = time() . '.' . $file->extension();
        $imgPath = $file->storeAs($path, $imageName, 'public');
        return Storage::url($imgPath);
    }
}
