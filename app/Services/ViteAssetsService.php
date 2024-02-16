<?php

namespace App\Services;

class ViteAssetsService
{

  public array $manifest;

  public function __construct()
  {
    $this->manifest = json_decode(file_get_contents(__DIR__ . "/../../public/dist/.vite/manifest.json"), true);
  }
}
