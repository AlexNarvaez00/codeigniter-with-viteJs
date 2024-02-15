<!DOCTYPE html>
<html lang="es">

<head>
  <title> <?= $title ?? "app"  ?> </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?= view_cell("ViteCell",["fileName"=>"resources/main.ts"]) ?>
</body>

</html>
