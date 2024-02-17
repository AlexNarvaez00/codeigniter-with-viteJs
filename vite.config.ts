import { defineConfig } from "vite";
import react from '@vitejs/plugin-react';
import path from "path";

export default defineConfig({
  plugins: [react()],
  publicDir: "./resources/public/",
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "./resources"),
    },
  },
  build: {
    manifest: true,
    rollupOptions: {
      input: "./resources/main.tsx",
      output:{
        dir:"./public/dist"
      }
    },
  },
});
