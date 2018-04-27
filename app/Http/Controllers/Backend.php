<?php

namespace App\Http\Controllers;

use App\image;
use Illuminate\Http\Request;

class Backend extends Controller
{

    private $_data = [];
    private $_path = 'Backend.pages.';
    public function index()
    {
        return view($this->_path . 'home');
    }
    public function addEvent()
    {
        return view($this->_path . 'events.add-event');
    }
    public function addEventAction(Request $request)
    {
        return $request;
    }
    public function addImage()
    {
        return view($this->_path . 'images.add-image');
    }
    public function addImageAction(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'location'=>'required',
            'image' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = strtolower($file->extension());
            $newName = time() . '_.' . $extension;
            $request->image->move(public_path('image/uploads/gallery'), $newName);
            $data['image_name'] = $newName;
        }
        $data['title']=$request->title;
        $data['description']=$request->description;
        if (image::insert($data)) {
            return redirect()->route('add-image')->with('success', 'Image uploaded successfully');
        }
        return redirect()->back()->with('fail', 'There was some problem');
    }


}
