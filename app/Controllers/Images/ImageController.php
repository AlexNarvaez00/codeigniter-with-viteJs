<?php

namespace App\Controllers\Images;

use App\Services\ImageService;
use CodeIgniter\RESTful\ResourcePresenter;
use Config\SPA;

class ImageController extends ResourcePresenter
{
  private ImageService $service;

  public function __construct()
  {
    $this->service = service("imageService");
  }

  public function index()
  {
    $images = $this->service
      ->findByName("")
      ->paginate(10, "default", 1);
    return SPA::render("images/index", ["images" => $images]);
  }
}
