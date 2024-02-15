<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class ViteCell extends Cell
{
  public string $viteBaseUrl;
  public string $fileName;
  public string $isProduction;

  public function __construct()
  {
    $this->isProduction = strcmp(env("CI_ENVIRONMENT"),"production" ) == 0;
    $this->viteBaseUrl = env("VITE_BASE_URL") ?? "http://localhost:4321/";
  }

  public function mount(string $fileName=""): void
  {
    $this->fileName = $fileName;
  }
}
