import { defineConfig, loadEnv } from "vite";

export default defineConfig(({ commond, mode, isSsrBuild, isPreview  })=>{
  const env = loadEnv(mode, process.cwd(), "VITE_");
  return {
    publicDir:env.VITE_PUBLIC_DIR ?? "/public",
    build:{
      manifest:true,
      rollupOptions:{
        input: env.VITE_INPUT_FILE ?? "index.html",
        output:{
          dir: env.VITE_OUTPUT_DIR ?? "./dist",
        }
      }
    }
  };
});
