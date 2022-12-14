import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import * as path from 'path';

export default defineConfig({
    plugins: [
        laravel(['resources/js/app.js', 'resources/css/app.css']),
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
            usePolling: true,
        },
    },
    optimizeDeps: {
        include: ["ziggy"],
    },
    build: {
        chunkSizeWarningLimit: 2048,
        assetsInlineLimit: 2048,
    },

});
