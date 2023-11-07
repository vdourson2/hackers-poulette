/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  content: ["./index.view.php"],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'colTurquoise': '#0d8187',
        'colBlack': '#303030',
      },
      fontFamily: {
        'fontBellota': ['Bellota', 'sans-serif'],
      },
    }
  },
  plugins: [],
}

