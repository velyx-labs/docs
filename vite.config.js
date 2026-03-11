import jigsaw from '@tighten/jigsaw-vite-plugin';
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    base: '/assets/build/',
    plugins: [
        jigsaw({
            input: ['source/_assets/js/main.js', 'source/_assets/css/main.css'],
            refresh: true,
        }),
        tailwindcss()
    ],
    build: {
        chunkSizeWarningLimit: 550,
        rollupOptions: {
            output: {
                manualChunks(id) {
                    if (id.includes('@docsearch')) {
                        return 'docsearch';
                    }

                    if (id.includes('prismjs')) {
                        return 'prism';
                    }

                    if (id.includes('alpinejs')) {
                        return 'alpine';
                    }
                },
            },
        },
    },
});
