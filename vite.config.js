import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    build: {
        outDir: 'dist',
        emptyOutDir: true,
    },
    publicDir: 'public', // semua file di public akan di-copy ke dist
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
    ],
});
