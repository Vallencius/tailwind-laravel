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
      'montserrat': 'Montserrat', 
      'montserrat-bold':'"Montserrat Bold"', 
      'montserrat-semibold':'"Montserrat SemiBold"',
      'montserrat-extrabold':'"Montserrat ExtraBold"',
      'montserrat-black':'"Montserrat Black"',
     }
    },
  },
  plugins: [],
}
