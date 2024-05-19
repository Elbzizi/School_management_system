import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fontAwesome from 'vite-plugin-font-awesome';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        fontAwesome(),
    ],
});


