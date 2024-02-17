<?php

namespace App\Services;

class ViteAssetsService
{

  public array $manifest;

  public function __construct()
  {
    $json = file_get_contents(__DIR__ . "/../../public/dist/.vite/manifest.json");
    $this->manifest = json_decode($json, true);
  }
}
