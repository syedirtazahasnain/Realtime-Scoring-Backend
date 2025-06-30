<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AppHelper
{
    /**
     * Upload an image and return its path.
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @param  string  $folder
     * @return string
     */
    public static function uploadImage(UploadedFile $file, $folder = 'images')
    {
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($folder, $filename, 'public');
        return $path;
    }


    /**
     * Create the avatar image
     */
    public static function createAvatar($name)
    {
        $words = explode(' ', $name);
        $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1] ?? '', 0, 1));
        $bg_color = '#' . substr(md5($name), 0, 6);
        $image = imagecreate(200, 200);
        $bg = imagecolorallocate($image, hexdec(substr($bg_color, 1, 2)), hexdec(substr($bg_color, 3, 2)), hexdec(substr($bg_color, 5, 2)));
        $text_color = imagecolorallocate($image, 255, 255, 255);
        imagefill($image, 0, 0, $bg);
        $font_size = 75;
        $font_path = public_path('fonts/arial.ttf');
        if (!file_exists($font_path)) {
            \Log::channel('custom_log')->error('Font file not found: ' . $font_path);
            throw new \Exception('Font file not found.');
        }
        $text_bounding_box = imagettfbbox($font_size, 0, $font_path, $initials);
        if ($text_bounding_box === false) {
            \Log::channel('custom_log')->error('Failed to create text bounding box for initials: ' . $initials);
            throw new \Exception('Failed to create text bounding box.');
        }
        $text_width = $text_bounding_box[2] - $text_bounding_box[0];
        $text_height = $text_bounding_box[1] - $text_bounding_box[7];
        $x = (200 - $text_width) / 2;
        $y = (200 - $text_height) / 2 + $text_height;
        imagettftext($image, $font_size, 0, $x, $y, $text_color, $font_path, $initials);
        $avatar_filename = time() . '_avatar.png';
        $avatar_path = 'storage/avatars/' . $avatar_filename;
        $avatar_directory = public_path('storage/avatars');
        if (!file_exists($avatar_directory)) {
            mkdir($avatar_directory, 0755, true);
        }
        imagepng($image, public_path($avatar_path));
        imagedestroy($image);

        return 'avatars/' . $avatar_filename;
    }
    /**
     * Delete an image by path.
     *
     * @param  string  $path
     * @return bool
     */
    public static function deleteImage($path)
    {
        return Storage::disk('public')->delete($path);
    }
}
