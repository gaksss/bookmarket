/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*", "./js/*"],

  theme: {
    colors: {
      "primary-dark": "#262626",
      "primary-white": "#F0EDEE",
      green: "#538083",
      red: "#B75D69",
    },
    extend: {
      backgroundImage: {
        'books-pile': "url('../img/booksPile.jpeg')",
      }
    },
  },
  plugins: [],
};
