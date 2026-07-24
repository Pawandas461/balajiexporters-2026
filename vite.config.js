import { defineConfig } from 'vite';
import { terser } from 'rollup-plugin-terser';

export default defineConfig({
    publicDir: false, // Disable automatic copying from the public directory
    build: {
        rollupOptions: {
        input: ['public/js/custom.js', 'public/js/ics.js'],
        output: {
            entryFileNames: '[name].min.js', // Minified files with `.min` suffix
            assetFileNames: '[name].[ext]',
            dir: 'dist/js', // Output directory is outside of `public`
        },
        plugins: [
            terser(), // Minify the JavaScript files
        ],
        },
        minify: false, // Don't use Vite's minify since we're using `terser` explicitly
    },
});