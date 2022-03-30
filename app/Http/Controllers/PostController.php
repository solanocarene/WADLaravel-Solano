<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Post()
    {
        $id = array ( 
            'name' => 'Carene Paguio Solano',
            'course' => 'BSIT',
            'block' => "3B"
        );
        return view('post')->with('id', $id);
    }

    
}
