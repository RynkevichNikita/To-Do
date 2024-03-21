import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/welcome.scss',
                    'resources/sass/show.scss',
                    'resources/sass/create.scss',
                    'resources/sass/edit.scss'],
            refresh: true,
        }),
    ],
});
