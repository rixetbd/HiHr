import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                './build/assets/app.525f5899.css',
                './build/assets/app.c5d9e6c4.js',
            ],
            refresh: true,
        }),
    ],
});
