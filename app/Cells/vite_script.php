<?php if (!$isProduction) :  ?>
  <script type="module" src="<?= $viteBaseUrl . $fileName?>"></script>
<?php endif; ?>
<?php if ($isProduction) :  ?>
  <script type="module" src="dist/<?= $fileName ?>"></script>
<?php endif; ?>
