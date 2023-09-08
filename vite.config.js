import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
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
    sassOptions: {
        includePaths: [path.join(__dirname, 'styles')],
        prependData: `@import "./resources/sass/_variables.scss";`,
    },

});
