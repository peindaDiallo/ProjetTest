module.exports = {
    purge: [
      './ressources/**/*.html',
      './ressources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {
        zIndex: {
          '-1': '-1',
        },
        flexGrow: {
          '5' : '5'
        }
      },
    },
    variants: {
      extend: {},
    },
    plugins: [],
  }
