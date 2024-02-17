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
    return SPA::render("images/index", ["images" => [
      "Item 1",
      "Item 2",
    ]]);
  }
}
