<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
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

    public function Gallery()
    {
        return view($this->_path . 'gallery');
    }

    public function Search(Request $request)
    {
        $data = $request->keyword;
        return view($this->_path . 'search', $data);
    }
}
