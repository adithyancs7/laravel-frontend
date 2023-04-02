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
        'DM': ["DM Serif Display", 'sans-serif'],
        'noto':["Noto Sans",'sans'],
        'poppins':["Poppins",'sans-serif']
      },
    },
  },
  plugins: [],
}
