import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'assets/sass/app.scss',
                'assets/js/app.js',
                'assets/css/app.css',
                'assets/css/bootstrap.css'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'bootstrap'),
            '$': 'jQuery'
        }
    },
});
