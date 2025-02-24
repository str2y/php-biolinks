import defaultTheme from 'tailwindcss/defaultTheme';
import daisyui from "daisyui"

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
    ],
    theme: {
        extend: {},
    },
    plugins: [
        daisyui,
    ],
};
