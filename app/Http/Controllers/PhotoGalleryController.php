<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoGalleryController extends Controller
{
    public function listPhotos(){

        $photos = Photo::all();

        return view('gallery.photohome',compact('photos'));
    }

    public function showPhotoForm()
    {
        return view('gallery.add_photo_form');
    }

    public function savePhotoForm(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'min:10',
            'photo' => 'required|image'
        ]);

//        return 'VALIDATIE OK';


        $targetFolder = public_path('photos');
        $filename = str_random(16).'.'.$validData['photo']->getClientOriginalExtension();

        $validData['photo']->move($targetFolder, $filename);

        $photo = new Photo();
        $photo->fill(
            [
                'title'       => $validData['title'],
                'description' => $validData['description'],
                'photo'       => $filename,
            ]
        );

        $photo->save();

        return redirect()->route('gallery.photohome');
    }
}
