import { defineConfig } from "vite";
import path from "path";

/** @type {import('vite').UserConfig} */
export default defineConfig({
  puglins: [],
  publicDir: import.meta.env?.VITE_PUBLIC_DIR ?? "./app/Resources/public/",
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "./app/Resources/"),
    },
  },
  build: {
    lib: {
      entry: path.resolve(__dirname, "./app/Resources/main.js"),
    },
    manifest: true,
    rollupOptions: {
      input:
        import.meta.env?.VITE_PUBLIC_DIR + "/main.js" ??
        "./app/Resources/public/main.js",
    },
    output: {
      dir: "./public/dist",
    },
  },
});
