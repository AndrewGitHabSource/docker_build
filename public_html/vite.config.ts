import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import * as path from 'path';

export default defineConfig({
    plugins: [
        laravel(['resources/js/app.js']),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 8080,
        watch: {
            usePolling: true
        }
    },
    resolve: {
        alias: {
            // ziggy: path.resolve('vendor/tightenco/ziggy/src/js/Router'),
        },
    },
    optimizeDeps: {
        include: ["ziggy"],
    },
});
