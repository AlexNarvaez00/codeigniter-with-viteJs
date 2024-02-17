<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class ViteReactCell extends Cell
{
  public string $isProduction;
  public string $viteBaseUrl;
  public function __construct()
  {
    $this->isProduction = strcmp(env("CI_ENVIRONMENT"), "production") == 0;
    $this->viteBaseUrl = env("VITE_BASE_URL") ?? "http://localhost:4321/";
  }
}
