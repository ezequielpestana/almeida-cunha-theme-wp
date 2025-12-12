import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig(({ command }) => {
    const isBuild = command === 'build';
    const themeBase = '/wp-content/themes/almeidacunha-tema/';

    return {
        base: isBuild ? `${themeBase}dist/` : '/',
        server: {
            port: 3000,
            cors: true,
            origin: 'almeidacunha.test',
        },
        build: {
            manifest: true,
            outDir: 'dist',
            rollupOptions: {
                input: [
                    'resources/js/app.js',
                    'resources/css/app.css',
                    'resources/css/editor-style.css'
                ],
            },
        },
        plugins: [
            tailwindcss(),
        ],
    }
});
