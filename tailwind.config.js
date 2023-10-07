import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'bone': {
                  '50': '#faf6f2',
                  '100': '#f3eae1',
                  '200': '#e0cbb6',
                  '300': '#d5b79c',
                  '400': '#c39574',
                  '500': '#b67c59',
                  '600': '#a96a4d',
                  '700': '#8d5441',
                  '800': '#72463a',
                  '900': '#5d3a31',
                  '950': '#311d19',
                },
              },
        },
    },

    plugins: [forms, typography],
};
