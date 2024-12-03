/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html,js,php}",
  "./src/**/*.{html,js,php}",
  ],
  theme: {
    extend: {
      colors: {
        "color-primary": '#1e293b',          // Primary color
        //"color-primary-dark": '#0b1120',  // Primary dark
        "color-primary-light": '#334155', // Primary light
        "color-secondary": '#2563eb',       // Secondary accent
        "color-background": '#940df2',      // Background
        "color-text-mary": '#31004a',
        "color-text-lime": "#32CD32",
        "color-text-green": "063b00",
        "color-text-light": "#fff",
        
      }
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '20px',
        md: "50px"
      }
    }
  },
  plugins: [],
}

