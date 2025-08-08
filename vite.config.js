import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/portfolio.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        viteStaticCopy({
            targets: [
                { src: 'public/_redirects', dest: '' }
            ]
        })
    ],
    build: {
        outDir: 'dist',
        emptyOutDir: true
    }
});
