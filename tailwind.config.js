const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html,js}',
    './**/*.{html,js}',
    './src/**/*.{html,js}',
  ],
  theme: {
    extend: {
      colors: {
        'stiletto': {
          50: '#FFE0E0',
          100: '#FFC2C2',
          200: '#FF8585',
          300: '#FF4747',
          400: '#F31616',
          500: '#CC0000',
          600: '#AD0000',
          700: '#8F0000',
          800: '#700000',
          900: '#520000'
        },
        'outer-space': {
          50: '#E9EBEC',
          100: '#D6D9DC',
          200: '#ACB4B9',
          300: '#808C93',
          400: '#5B656C',
          500: '#383E42',
          600: '#2C3134',
          700: '#212427',
          800: '#171A1C',
          900: '#0C0D0E'
        },
      },
      screens: {
        'xs': '500px',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

