import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.css",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#233567',
              }
        },
        theme: {
            screens: {
              'tablet': '640px',
              // => @media (min-width: 640px) { ... }
        
              'laptop': '1024px',
              // => @media (min-width: 1024px) { ... }
        
              'desktop': '1280px',
              // => @media (min-width: 1280px) { ... }
            },
          }
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        require('flowbite-typography'),
        require('@tailwindcss/aspect-ratio'),
        "postcss-import",
        "tailwindcss",
        "autoprefixer"
    ],
};
