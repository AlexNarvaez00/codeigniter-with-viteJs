<?php

namespace App\Controllers\Images;

use CodeIgniter\RESTful\ResourcePresenter;

class ImageController extends ResourcePresenter
{
    public function index()
    {
      return view("images/index",["title" => "Images | Index"]);
    }
}
