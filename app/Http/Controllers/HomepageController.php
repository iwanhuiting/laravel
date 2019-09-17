<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class homepageController extends Controller

{
    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showHomePage()
    { 

        $attributes = [
            'user_id' => '1',
            'mode' => 'homepage',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('homepage.homepage', compact('currentuser', 'catagories', 'attributes'));
    }

}