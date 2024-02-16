<?php /* JS  */  ?>

<?php if (!$isProduction && !$isCSS) : ?>
  <script type="module" src="<?= $viteBaseUrl ?>@vite/client"></script>
  <script type="module" src="<?= $viteBaseUrl . $fileName ?>"></script>
<?php endif; ?>

<?php if ($isProduction && !$isCSS) : ?>
  <script type="module" src="dist/<?= $manifest[$fileName]["file"] ?>"></script>
<?php endif; ?>
