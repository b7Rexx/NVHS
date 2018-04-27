<?php

namespace App\Http\Controllers;

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
        return view($this->_path . 'event');
    }

    public function SlugEvent($slug)
    {
        $this->_data['slugInfo'] = $slug;
        return view($this->_path . 'slugEvent', $this->_data);
    }

    public function Gallery()
    {
        return view($this->_path . 'gallery');
    }

    public function SlugGallery($slug)
    {
        $this->_data['slugInfo'] = $slug;
        return view($this->_path . 'slugGallery', $this->_data);
    }

    public function Search(Request $request)
    {
        $this->_data['keywords'] = $request->keyword;
        return view($this->_path . 'search', $this->_data);
    }

    public function Contact()
    {
        return view($this->_path.'contact');
    }
}
