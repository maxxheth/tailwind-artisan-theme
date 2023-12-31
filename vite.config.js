import { defineConfig } from 'vite';
import esbuild from 'rollup-plugin-esbuild';
import path from 'path';

export default defineConfig({
  // Define the base URL for the assets
  base: 'http://candlelight.test/wp-content/themes/candlelight-theme/dist/',

  // Configure esbuild plugin
  plugins: [
    esbuild({
      minify: process.env.NODE_ENV === 'production',
      target: 'es2018',
    }),
  ],

  // Configure paths
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './javascript'),
    },
  },

  build: {
    outDir: path.resolve(__dirname, '../theme/js'),
    emptyOutDir: false, // Set to false to prevent removing files from outDir
    rollupOptions: {
      // Define separate input files
      input: {
        script: path.resolve(__dirname, 'javascript/script.js'),
        blockEditor: path.resolve(__dirname, 'javascript/block-editor.js'),
        tailwindTypographyClasses: path.resolve(__dirname, 'javascript/tailwind-typography-classes.js'),
      },
      output: {
        // Define output files with specific names
        entryFileNames(chunkInfo) {
          const nameMap = {
            script: 'script.min.js',
            blockEditor: 'block-editor.min.js',
            tailwindTypographyClasses: 'tailwind-typography-classes.min.js',
          };
          return nameMap[chunkInfo.name] || '[name].[hash].js';
        },
      },
    },
  },
});
