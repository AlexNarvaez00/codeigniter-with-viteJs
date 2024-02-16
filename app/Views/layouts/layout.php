<!DOCTYPE html>
<html lang="es">

<head>
  <title> <?= $title ?? "app"  ?> </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= view_cell("ViteStylesCell") ?>
</head>

<body>
  <div id="app" data-props="<?= $data ?? json_encode([]) ?>"></div>
  <?= view_cell("ViteTagsCell", ["input" => "resources/main.ts"])  ?>
</body>

</html>
