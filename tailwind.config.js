/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'heading': ['Quicksand', 'sans-serif', 'modern'],
    },
    extend: {},
  },
  plugins: [],
}