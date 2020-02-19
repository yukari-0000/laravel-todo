<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function services(){
        $data = [
            'title' => 'Our Services',
            'services' => ['Programming','web graphics','SEO']
        ];
        return view('pages.services')->with($data);
    }
    //
}
