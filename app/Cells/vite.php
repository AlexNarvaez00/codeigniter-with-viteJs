<?php if (!$isProduction) : ?>
  <script type="module" src="<?= $viteBaseUrl ?>@vite/client"></script>
  <script type="module" src="<?= $viteBaseUrl . $fileName ?>"></script>
<?php endif; ?>
<?php if ($isProduction) : ?>
  <script type="module"></script>
<?php endif; ?>
