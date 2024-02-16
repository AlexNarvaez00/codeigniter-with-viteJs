<?php

namespace App\Database\Seeds;

use App\Models\Image;
use CodeIgniter\Database\Seeder;

class ImageSeeder extends Seeder
{
  public function run()
  {
    $images = new Image();

    $rows = [];
    for ($row = 0; $row < 100; $row++) {
      array_push($rows, [
        "name" => \Faker\Provider\Image::imageUrl(800, 400)
      ]);
    }
    $images->insertBatch($rows);
  }
}
