/** @type {import('tailwindcss').Config} */

import defaultTheme from 'tailwindcss/defaultTheme';
import { defineConfig } from 'tailwindcss';

export default defineConfig({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
    extend: {
        fontFamily: {
            sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
});

// const defaultTheme = require('tailwindcss/defaultTheme')

// export default {
//   content: [
//     "./resources/**/*.blade.php",
//     "./resources/**/*.js",
//     "./resources/**/*.vue",
//   ],
//   theme: {
//     extend: {
//         fontFamily: {
//         sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
//       },
//     },
//   },
//   plugins: [],
// }
