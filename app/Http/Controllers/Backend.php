<?php

namespace App\Http\Controllers;

use App\event;
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
        $this->validate($request, [
            'title' => 'required',
            'location'=>'required',
            'starting_date'=>'required',
            'ending_date'=>'required',
            'image' => 'required',
            'details' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = strtolower($file->extension());
            $newName = time() . '_.' . $extension;
            $request->image->move(public_path('image/uploads/events'), $newName);
            $data['image'] = $newName;
        }

        $data['title']=$request->title;
        $data['location']=$request->location;
        $data['starting_date']=$request->starting_date;
        $data['ending_date']=$request->ending_date;
        $data['details']=htmlspecialchars($request->details);
        if (event::create($data)) {
            return redirect()->route('add-event')->with('success', 'Event added successfully');
        }
        return redirect()->back()->with('fail', 'Problem encounter while adding event');
    }
    public function addImage()
    {
        return view($this->_path . 'images.add-image');
    }
    public function addImageAction(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
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
        if (image::create($data)) {
            return redirect()->route('add-image')->with('success', 'Image uploaded successfully');
        }
        return redirect()->back()->with('fail', 'There was some problem');
    }


}
