import forms from '@tailwindcss/forms';
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                customBrown: {
                    DEFAULT: '#685832',
                    light: '#847256',
                    dark: '#4d4225',
                  },
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'poetsen-one': ['"Poetsen One"', 'sans-serif'],
            },
            colors: {
                'orange-custom': '#FF7D53',
                

            },
        },
    },

    plugins: [forms],
};
