const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
    // darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}',
        './node_modules/tw-elements/dist/js/**/*.js',
    ],
    variants: {
      extend: {
        backgroundImage: ["dark"],
      },
    },
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                roboto : ['Roboto'],
            },
            backgroundImage: {
                'prism-svg' : "url('/svg/subtle-prism.svg')",
                'prism-svg-dark' : "url('/svg/subtle-prism-dark.svg')",
            },
            animation: {
                //
            },
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/aspect-ratio'),
        require('tw-elements/dist/plugin'),
        plugin(function ({ addUtilities }) {
            addUtilities({
              '.scrollbar-hide': {
                /* IE and Edge */
                '-ms-overflow-style': 'none',

                /* Firefox */
                'scrollbar-width': 'none',

                /* Safari and Chrome */
                '&::-webkit-scrollbar': {
                  display: 'none'
                }
              }
            }
            )
          })
        ],
};
