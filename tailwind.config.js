const plugin = require('tailwindcss/plugin');
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  darkMode: 'class',
  theme: {
    backgroundPosition: {
      'left-center': 'left 0.5rem center'
    },
    container: {
      center: true,
      padding: '1rem',
    },
    fontFamily:{
      'iransanse': 'IRANSansX'
    },
    extend: {
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-8deg)' },
          '50%': { transform: 'rotate(8deg)' },
        }
      },
      animation: {
        wiggle: 'wiggle 1s ease-in-out infinite',
      },
      padding:{
        'md':'56%'
      },
      colors:{
        dark:{
          800: '#232326',
          700: '#323236',
          600: '#3b3b41',
        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    plugin(function({ addVariant }) {
      addVariant('lable-checked', '&:checked ~ label')
      addVariant('group2-hover', '.group2:hover &')
    })
  ],
}
