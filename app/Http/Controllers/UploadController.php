<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class UploadController extends BaseController
{
    public function index()
    {
        return view('upload');

    }

    public function store(Request $request)
    {

        echo '<pre>';
        print_r($request->all());

    }
}
