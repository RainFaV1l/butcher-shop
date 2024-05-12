/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      
    },
    screens: {
      320: '320px',
      400: '400px',
      450: '450px',
      500: '500px',
      550: '550px',
      600: '600px',
      700: '700px',
      750: '750px',
      900: '900px',
      1000: '1000px',
      1171: '1171px'
    }
  },
  plugins: [],
}

