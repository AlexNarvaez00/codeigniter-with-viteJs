<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class ViteCell extends Cell
{
  public string $viteBaseUrl = env("VITE_BASE_URL") ?? "http://localhost:4321"; 
}
