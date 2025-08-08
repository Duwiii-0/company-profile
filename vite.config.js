import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    build: {
        outDir: 'dist'
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/portfolio.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
        viteStaticCopy({
            targets: [
                { src: 'public/_redirect', dest: '' }
            ]
        })
    ],
});
