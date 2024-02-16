<?php

namespace App\Cells;

use App\Services\ViteAssetsService;
use CodeIgniter\View\Cells\Cell;

class ViteCell extends Cell
{
  public string $viteBaseUrl;
  public string $fileName;
  public string $isProduction;
  private ViteAssetsService $viteAssetsService;
  public array $manifest;
  public bool $isCSS = false;

  public function __construct()
  {
    $this->isProduction = strcmp(env("CI_ENVIRONMENT"),"production" ) == 0;
    $this->viteBaseUrl = env("VITE_BASE_URL") ?? "http://localhost:4321/";
    if($this->isProduction){
      $this->viteAssetsService = service("viteAssets");
      $this->manifest = $this->viteAssetsService->manifest;
    }
  }

  public function mount(string $fileName=""): void
  {
    $this->fileName = $fileName;
    $this->isCSS = str_contains($fileName,".css");
  }
}
