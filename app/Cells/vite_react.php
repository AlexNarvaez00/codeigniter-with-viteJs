<?php if (!$isProduction) : ?>
  <script type="module">
    import RefreshRuntime from '<?= $viteBaseUrl ?>/@react-refresh'
    RefreshRuntime.injectIntoGlobalHook(window)
    window.$RefreshReg$ = () => {}
    window.$RefreshSig$ = () => (type) => type
    window.__vite_plugin_react_preamble_installed__ = true
  </script>
<?php endif; ?>
