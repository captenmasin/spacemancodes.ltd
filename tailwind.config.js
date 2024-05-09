/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,js,php}"],
  theme: {
    extend: {
		fontFamily: {
			'inter': ['Inter', 'sans-serif'],
			'poppins': ['Poppins', 'sans-serif'],
		}
    },
  },
  plugins: [],
}

