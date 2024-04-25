<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgQuartosController extends Controller
{
    public function show(Request $request)
    {
        $images = [
            'image1' => 'images/img_quarto_1.jpeg',
            'image2' => 'images/img_quarto_2.jpeg',
            'image3' => 'images/img_quarto_3.jpeg',
            'image4' => 'images/img_quarto_4.jpeg',
            'image5' => 'images/img_quarto_5.jpeg',
            'image6' => 'images/img_quarto_6.jpeg',
            'image7' => 'images/img_quarto_7.jpeg',
            'image8' => 'images/img_quarto_8.jpeg',
            'image9' => 'images/img_quarto_9.jpeg',
            'image10' => 'images/img_quarto_10.jpeg',
            'image11' => 'images/img_quarto_11.jpeg',
            'image12' => 'images/img_quarto_12.jpeg',
            'image13' => 'images/img_quarto_13.jpeg',
            'image14' => 'images/img_quarto_14.jpeg',
           
        ];
        $imageQuarto = $request->query('image');
    
            if (array_key_exists($imageQuarto, $images)) {
                $imagePath = public_path($images[$imageQuarto]);
    
                if (file_exists($imagePath)) {
                    $image = file_get_contents($imagePath);
                    $mimeType = mime_content_type($imagePath);
    
                    return response($image, 200)
                        ->header('Content-Type', $mimeType);
                }
            }
    
            return response('Image not found', 404);
    }
}