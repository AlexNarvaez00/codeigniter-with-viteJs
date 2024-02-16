<?php if(!$isProduction):  ?>
  <script type="module" src="<?= $viteBaseUrl ?>@vite/client"></script>
<?php endif; ?>
<?=  view_cell("ViteScriptCell",["fileName" => $input]) ?>
