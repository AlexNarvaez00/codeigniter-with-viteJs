<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class ViteStylesCell extends Cell
{
  public string $isProduction;
  public array $filesNames = [];

  public string $viteBaseUrl;


  public function __construct()
  {
    $this->isProduction = strcmp(env("CI_ENVIRONMENT"), "production") == 0;
    $this->viteBaseUrl = env("VITE_BASE_URL") ?? "http://localhost:4321/";
    if ($this->isProduction)
      $this->filesNames = $this->getAllStylesFromManifest();
  }

  public function getAllStylesFromManifest(): array
  {
    $manifest = service("viteAssets")->manifest;
    $styles = [];
    foreach ($manifest as $file) {
      if (!array_key_exists("css", $file)) continue;
      array_push($styles, ...$file["css"]);
    }
    return $styles;
  }
}
