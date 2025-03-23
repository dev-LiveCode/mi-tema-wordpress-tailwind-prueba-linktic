/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'selector',
  content: [
    "./src/**/*.{html,js}",
    "./*.php",
    "./template-parts/**/*.php",
    "./assets/js/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        playfairDisplay: ['"Playfair Display"', 'serif'],
        rubik: ['"Rubik"', 'sans-serif'],
        inter: ['"Inter"', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

