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
                'fern': {
                    '50': '#f4faf3',
                    '100': '#e6f5e3',
                    '200': '#cdeac8',
                    '300': '#a5d89d',
                    '400': '#65b559',
                    '500': '#51a146',
                    '600': '#3f8435',
                    '700': '#34682d',
                    '800': '#2d5328',
                    '900': '#254522',
                    '950': '#0f250e',
                },
                'blue-violet': {
                    '50': '#f1f4fc',
                    '100': '#e5eafa',
                    '200': '#d0d8f5',
                    '300': '#b4beed',
                    '400': '#959ce4',
                    '500': '#7b7dd9',
                    '600': '#6761ca',
                    '700': '#6059b5',
                    '800': '#484390',
                    '900': '#3e3c73',
                    '950': '#252343',
                },
                
              },
        },
    },

    plugins: [forms, typography],
};
