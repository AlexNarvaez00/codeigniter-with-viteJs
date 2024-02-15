<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class ViteCell extends Cell
{
  public string $viteBaseUrl;
  public string $fileName;

  public function mount(string $fileName=""): void
  {
    $this->viteBaseUrl = env("VITE_BASE_URL") ?? "http://localhost:4321/";
    $this->fileName = $fileName;
  }
}
