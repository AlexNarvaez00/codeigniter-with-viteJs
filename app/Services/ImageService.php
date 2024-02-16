<?php

namespace App\Services;

use App\Models\Image;

class ImageService
{
  private Image $model;

  public function __construct(Image $model = new Image())
  {
    $this->model = $model;
  }

  public function findByName(string $name): Image
  {
    return $this->model
      ->like("name", $name);
  }
}
