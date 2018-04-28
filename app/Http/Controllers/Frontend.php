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
        $this->_data['events'] = event::all()->sortByDesc('id');
        return view($this->_path . 'event', $this->_data);
    }

    public function SlugEvent($slug)
    {
        $this->_data['slugInfo'] = $slug;
        return view($this->_path . 'Slug/slugEvent', $this->_data);
    }

    public function Gallery()
    {
        return view($this->_path . 'gallery');
    }

    public function SlugGallery($slug)
    {
        $this->_data['slugInfo'] = $slug;
        return view($this->_path . 'Slug/slugGallery', $this->_data);
    }

    public function Search(Request $request)
    {
        $this->_data['keywords'] = $request->keyword;
        $this->_data['key_type'] = isset($request->key_type) ? $request->key_type : 'all';
        $preAssignData = [];

        if ($request->key_type == 'all') {
            $preAssignData[0] = event::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
            $preAssignData[1] = image::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
            $preAssignData[2] = video::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        } elseif ($request->key_type == 'events') {
            $preAssignData['search_array'] = event::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        } elseif ($request->key_type == 'images') {
            $preAssignData['search_array'] = image::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        } elseif ($request->key_type == 'videos') {
            $preAssignData['search_array'] = video::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
        }
        $this->_data['search_array'] = $preAssignData;
        return view($this->_path . 'search', $this->_data);
    }

    public
    function Contact()
    {
        return view($this->_path . 'contact');
    }

    public
    function Company($slug)
    {
        $this->_data['slugInfo'] = $slug;
        return view($this->_path . 'Company/company', $this->_data);
    }
}
