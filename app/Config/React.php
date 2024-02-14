<?php


namespace Config;

class React
{

  public static function view(string $component, array $props)
  {
    $data = [
      "component" => "Pages.$component",
      "props" => $props
    ];
    return view("layouts/layout", ["data" => self::toString($data)]);
  }


  public static function toString($object): string
  {
    $data = json_encode($object, JSON_HEX_QUOT);
    $data = str_replace("\"", "'", $data);
    $data = trim($data);
    return $data;
  }
}
