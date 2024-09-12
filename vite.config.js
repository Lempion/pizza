import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/nav.js',
                'resources/js/product.js',
                'resources/js/product-create.js',
                'resources/js/public_function_and_action.js',
                'resources/js/product-create-combo.js',
                'resources/js/toast-functions.js',
                'resources/js/product-table-modal.js',
                'resources/js/product-store.js',
                'resources/js/product-index.js',
                'resources/js/product-create-additional-product.js',
            ],
            refresh: false,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery'
        },
    },
});
