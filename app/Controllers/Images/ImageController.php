<?php

namespace App\Controllers\Images;

use App\Services\ImageService;
use CodeIgniter\RESTful\ResourcePresenter;

class ImageController extends ResourcePresenter
{
  private ImageService $service;

  public function __construct()
  {
    $this->service = service("imageService");
  }

  public function index()
  {
    return view("images/index", ["title" => "Images | Index"]);
  }
}
