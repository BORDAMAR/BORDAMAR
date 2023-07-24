import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/index.sass',
                'resources/uikit/css/uikit-rtl.css',
                'resources/uikit/css/uikit-rtl.min.css',
                'resources/uikit/css/uikit.css',
                'resources/uikit/css/uikit.min.css',
                'resources/uikit/js/uikit-icons.js',
                'resources/uikit/js/uikit-icons.min.js',
                'resources/uikit/js/uikit.js',
                'resources/uikit/js/uikit.min.js',
            ],
            refresh: true,
        }),
    ],
});
