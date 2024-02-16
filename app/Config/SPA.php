<?php


namespace Config;

class SPA
{

  public static function render(string $component, array $props)
  {
    $data = [
      "component" => "Pages/$component",
      "props" => $props
    ];
    return view("layouts/layout", ["data" => self::propsToString($data)]);
  }


  public static function propsToString($object): string
  {
    $data = json_encode($object, JSON_HEX_QUOT);
    $data = str_replace("\"", "'", $data);
    $data = trim($data);
    return $data;
  }
}
