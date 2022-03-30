<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
     $user = array( 
            'nickname' => 'korine',
            'email' => 'korinesolanogmail.com',
            'studentid' => "201910319"
        );
        return view('home')->with('user', $user);
    }

    
}
