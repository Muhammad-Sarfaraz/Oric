<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;

class GalleryController extends Controller
{
   public function index(){
    $images = Gallery::orderBy('id', 'asc')->paginate(25);
    // if(count($images)>10){
    //     Session::flash('warning','Don\'t add more than 10 slider for better site performance!');
    // }
    return view('backend.site.gallery.view', compact('images'));
   }


   public function create(){

    return view('backend.site.gallery.add_image');
   }

    
   public function Store(Request $request){
       
        //echo 'Works';

        //print_r($request->except('_token'));

       //return view('backend.site.gallery.gallery');
       $this->validate($request, [
        'title' => 'required|min:1|max:255',
        'image' => 'required|mimes:jpeg,jpg,png|',

    ]);
       
     $storagepath = $request->file('image')->store('public/gallery');
        $fileName = basename($storagepath);

        $data = $request->all();
        $data['image'] = $fileName;

        Gallery::create($data);

        return redirect()->back()->with('status', 'Image Added Deleted.');


   }

   public function destroy($id)
    {
        $slider = Gallery::findOrFail($id);
        $slider->delete();
        //Storage::delete( public_path('gallery/' . $task->image));
        return back()->with('status', 'Image Sucessfully Deleted.');
    }

   


}
