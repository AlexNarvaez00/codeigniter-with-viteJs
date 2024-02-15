<?php

namespace App\Controllers\Images;

use App\Controllers\BaseController;

class ImageController extends BaseController
{
    public function index()
    {
      return view("images/index",["title" => "Images | Index"]);
    }
}
