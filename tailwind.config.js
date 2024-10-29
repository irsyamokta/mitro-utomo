import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                inter: ['Inter', 'sans-serif'],
            },
            screens: {
                ...defaultTheme.screens,
            },
            colors: {
                primary: '#508D4E',
                secondary: '#365E32',
                accent: '#FFC60B',
            },
        },
    },

    plugins: [forms],
};
