<?php

namespace App\Http\Controllers;

use App\event;
use Illuminate\Http\Request;

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

        //Search
        $this->_data['search_array'] = event::select('id', 'title', 'details')->where('title', 'like', "%$request->keyword%")->get()->sortByDesc('id');
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
