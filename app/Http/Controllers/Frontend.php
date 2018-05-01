<?php

namespace App\Http\Controllers;

use App\event;
use App\image;
use App\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Frontend extends Controller
{
    private $_data = [];

    private $_path = 'Frontend.pages.';

    //
    public function index()
    {
        return view($this->_path . 'home');
    }

    public function Event()
    {
        $this->_data['events'] = event::orderBy('title', 'DESC')->simplePaginate(6);
        return view($this->_path . 'event', $this->_data);
    }

    public function DetailEvent($slug)
    {
        $this->_data['slugInfo'] = $slug;
        $this->_data['detail'] = event::select('id', 'title', 'image', 'details', 'location', 'starting_date', 'ending_date')->where('id', '=', $slug)->get();
        return view($this->_path . 'Detail/Event', $this->_data);
    }

    public function DetailImage($slug)
    {
        $this->_data['slugInfo'] = $slug;
        $this->_data['detail'] = image::select('id', 'title', 'image')->where('id', '=', $slug)->get();
        return view($this->_path . 'Detail/Image', $this->_data);
    }

    public function DetailVideo($slug)
    {
        $this->_data['slugInfo'] = $slug;
        $this->_data['detail'] = video::select('id', 'title', 'details', 'video_name')->where('id', '=', $slug)->get();
        return view($this->_path . 'Detail/Video', $this->_data);
    }

    public function Gallery($type)
    {
        $this->_data['GalleryType'] = $type;
        if ($type == 'Image') {
            $this->_data['images'] = image::orderBy('id', 'DESC')->simplePaginate(9);
        } elseif ($type == 'Video') {
            $this->_data['videos'] = video::orderBy('id', 'DESC')->simplePaginate(6);
        }
        return view($this->_path . 'gallery', $this->_data);
    }

    public function DetailGallery($slug)
    {
        $this->_data['slugInfo'] = $slug;

        return view($this->_path . 'Detail/Gallery', $this->_data);
    }

    public function Search(Request $request)
    {
        $this->_data['keywords'] = $request->keyword;
        $this->_data['key_type'] = isset($request->key_type) ? $request->key_type : 'Show All';
        $this->_data['all'] = false;
        if ($request->key_type == 'Events') {
            $this->_data['Event'] = event::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        } elseif ($request->key_type == 'Images') {
            $this->_data['Image'] = image::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        } elseif ($request->key_type == 'Videos') {
            $this->_data['Video'] = video::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        } else {
            $this->_data['all'] = true;

            $this->_data['Event'] = event::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');

            $this->_data['Image'] = image::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');

            $this->_data['Video'] = video::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        }
        return view($this->_path . 'search', $this->_data);
    }

    public function Contact()
    {
        return view($this->_path . 'contact');
    }

    public function Company($slug)
    {
        $this->_data['slugInfo'] = $slug;
        return view($this->_path . 'Company/company', $this->_data);
    }
}
