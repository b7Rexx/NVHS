<?php

namespace App\Http\Controllers;

use App\event;
use App\image;
use App\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'location' => 'required',
            'starting_date' => 'required',
            'ending_date' => 'required',
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

        $data['title'] = $request->title;
        $data['location'] = $request->location;
        $data['starting_date'] = $request->starting_date;
        $data['ending_date'] = $request->ending_date;
        $data['details'] = htmlspecialchars($request->details);
        if (event::create($data)) {
            return redirect()->route('view-event')->with('success', 'Event added successfully');
        }
        return redirect()->back()->with('fail', 'Problem encountered while adding event');
    }

    public function viewEvent()
    {
        $this->_data['events'] = event::orderBy('id','DESC')->paginate(10);
        return view($this->_path . 'events.view-event', $this->_data);
    }

    public function updateEvent($id)
    {
        $this->_data['event'] = event::where(['id' => $id])->first();
        return view($this->_path . 'events.update-event', $this->_data);
    }

    public function updateEventAction(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'starting_date' => 'required',
            'ending_date' => 'required',
            'details' => 'required'
        ]);
        $data['title'] = $request->title;
        $data['location'] = $request->location;
        $data['starting_date'] = $request->starting_date;
        $data['ending_date'] = $request->ending_date;
        $data['details'] = htmlspecialchars($request->details);
        if ($request->hasFile('image')) {
            $id = (int)$id;
            $event = event::findOrFail($id);
            $eventImage = $event->image;
            if (file_exists(public_path('image/uploads/events/' . $eventImage))) {
                unlink(public_path('image/uploads/events/' . $eventImage));
            }
            $file = $request->file('image');
            $extension = strtolower($file->extension());
            $newName = time() . '_.' . $extension;
            $request->image->move(public_path('image/uploads/events'), $newName);
            $data['image'] = $newName;
        }
        if (event::where(['id' => $id])->update($data)) {
            return redirect()->route('view-event')->with('success', 'Event updated successfully');
        }
        return redirect()->back()->with('fail', 'Problem encountered while updating ');

    }

    public function deleteEvent($id)
    {
        $id = (int)$id;
        $event = event::findOrFail($id);
        if (event::where(['id' => $id])->delete()) {
            $image = $event->image;
            if (file_exists(public_path('image/uploads/events/' . $image))) {
                unlink(public_path('image/uploads/events/' . $image));
            }
            return redirect()->back()->with('success', 'Event was deleted ');
        }
        return redirect()->back()->with('Fail', 'Problem encountered while deleting event');
    }

    public function addImage()
    {
        return view($this->_path . 'images.add-image');
    }

    public function addImageAction(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);
        $data['title'] = $request->title;
        $data['details'] = $request->description;
        if ($img = image::create($data)) {
            $imgId = $img->id;

            if ($request->hasFile('image')) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $extension = strtolower($file->extension());
                    $newName = str_random(10) . '_.' . $extension;
                    $file->move(public_path('image/uploads/gallery'), $newName);
                    $ref_data['image_id']=$imgId;
                    $ref_data['image_name']=$newName;
                    DB::table('images_references')->insert($ref_data);
                }

                return redirect()->route('add-image')->with('success', 'Image uploaded successfully');
            }

        }
        return redirect()->back()->with('fail', 'There was some problem');
    }


    public
    function addVideo()
    {
        return view($this->_path . 'videos.add-video');
    }

    public
    function addVideoAction(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'video_name' => 'required',
            'details' => 'required'
        ]);
        $data['title'] = $request->title;
        $data['details'] = $request->details;
        $url = $request->video_name;
        $url = str_replace('https://www.youtube.com/watch?v=', '', $url);
        $url = trim($url);
        $data['video_name'] = $url;
        if (video::create($data)) {
            return redirect()->route('view-video')->with('success', 'Video uploaded successfully');
        }
        return redirect()->back()->with('fail', 'Problem encountered while uploading video');
    }

    public
    function viewVideo()
    {
        $this->_data['videos'] = video::orderBy('id','DESC')->paginate(5);
        return view($this->_path . 'videos.view-video', $this->_data);
    }

    public
    function updateVideo($id)
    {
        $this->_data['video'] = video::where(['id' => $id])->first();
        return view($this->_path . 'videos.update-video', $this->_data);
    }

    public
    function updateVideoAction(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'video_name' => 'required',
            'details' => 'required'
        ]);
        $data['title'] = $request->title;
        $data['details'] = $request->details;
        $url = $request->video_name;
        $url = str_replace('https://www.youtube.com/watch?v=', '', $url);
        $url = trim($url);
        $data['video_name'] = $url;
        if (video::where(['id' => $id])->update($data)) {
            return redirect()->route('view-video')->with('success', 'Video updated successfully');
        }
        return redirect()->back()->with('fail', 'Problem encountered while updating video');
    }


    public
    function deleteVideo($id)
    {
        $id = (int)$id;
        $video = video::findOrFail($id);
        if (video::where(['id' => $id])->delete()) {
            return redirect()->back()->with('success', 'Video was deleted ');
        }
        return redirect()->back()->with('fail', 'Problem encountered while deleting video');
    }

}
