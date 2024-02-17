import { defineConfig, loadEnv } from "vite";
import path from "path";

/** @type {import('vite').UserConfig} */
export default defineConfig(({ command, mode, isSsrBuild, isPreview }) => {
  const env = loadEnv(mode, process.cwd(), "VITE_");
  return {
    base: env.VITE_BASE_PATH ?? "",
    publicDir: env.VITE_PUBLIC_DIR ?? "/public",
    build: {
      rollupOptions: {
        input: env.VITE_INPUT_FILE ?? "index.html",
        output: {
          dir: env.VITE_OUTPUT_DIR ?? "./dist",
        },
      },
    },
  };
});
