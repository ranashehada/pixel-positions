/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        "black":" #060606"
      },
      fontFamily:{
        "hanken-grotesk":["Hanken Grotesk", "sana-serif"]
      },
      fontSize:{
        "2xs": ".625rem" //10px
      }
    },
  },
  plugins: [],
}

