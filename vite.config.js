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
    ],
});
