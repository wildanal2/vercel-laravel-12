import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig(({ mode }) => {
    // Base URL for production builds
    const isProduction = mode === 'production';
    const baseUrl = process.env.APP_URL || '';

    return {
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
            tailwindcss(),
        ],
        base: isProduction ? baseUrl : undefined,
        build: {
            rollupOptions: {
                output: {
                    assetFileNames: (assetInfo) => {
                        if (assetInfo.name.endsWith('.css')) {
                            return 'build/assets/[name].[hash][extname]';
                        }
                        return 'build/assets/[name].[hash][extname]';
                    },
                },
            },
        },
        // Ensure assets are served with the correct protocol
        server: {
            https: false,
        },
    };
});
