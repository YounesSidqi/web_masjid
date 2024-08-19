/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'Futura': ['Futura'],
        'Font-Products': ['Product Sans'],
      },
      colors: {
        primary : '#5E8FC4',
        buttoncolor : '#CDDFED',
        tes : '#BF1F1F'
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
}

