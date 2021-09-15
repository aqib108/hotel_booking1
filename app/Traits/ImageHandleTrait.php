<?php
namespace App\Traits;

use Faker\Provider\File;
use Illuminate\Http\Request;

trait ImageHandleTrait {



    public $basePath = "/images/uploads";

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function storeImage($image, $imageName, $destination)
    {
        $filePath = public_path($this->basePath.'/'.$destination);
        $file = $image->move($filePath, $imageName);

        return $file;
    }


    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function removeImage($imageName, $destination)
    {

        $filePath = public_path($this->basePath.'/'.$destination.'/'.$imageName);
        if(file_exists($filePath))
        {
            $file = unlink($filePath);

            return $file;
        }


    }



}