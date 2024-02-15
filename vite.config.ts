import { defineConfig } from "vite";
import path from "path";

export default defineConfig({
  plugins: [],
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "./resources"),
    },
  },
  build: {
    manifest: true,
    rollupOptions: {
      input: "./resources/main.ts",
      output:{
        dir:"./public/dist"
      }
    },
  },
});
