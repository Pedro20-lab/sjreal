import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/index.js',
                'resources/js/reserva.js',
                'resources/css/reservas.css',],
            refresh: true,
        }),
    ],
});
